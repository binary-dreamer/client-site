<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/client-site/config/db.php';

header("Content-Type: application/json");

$db = new DB();
$conn = $db->connection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input = file_get_contents("php://input");
    $data = json_decode($input, true);

if (!$data) {
    echo json_encode(["status" => "error", "message" => "Invalid JSON input"]);
    exit;
}

if (!isset($_SESSION['user_id'])) {
    echo json_encode(["status" => "error", "message" => "User not logged in"]);
    exit;
}

$user_id = $_SESSION['user_id'];

// Save Journal
if ($data["action"] === "save") {
    $content = trim($data["content"] ?? "");
    if (empty($content)) {
        echo json_encode(["status" => "error", "message" => "Journal content cannot be empty"]);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO journals (user_id, content) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $content);
    echo ($stmt->execute()) ? json_encode(["status" => "success"]) : json_encode(["status" => "error", "message" => "Database error"]);
    $stmt->close();
    exit;
}

// Update Journal
if ($data["action"] === "update") {
    $journal_id = $data["journal_id"] ?? 0;
    $content = trim($data["content"] ?? "");

    if (empty($content) || !$journal_id) {
        echo json_encode(["status" => "error", "message" => "Invalid journal ID or content"]);
        exit;
    }

    $stmt = $conn->prepare("UPDATE journals SET content = ? WHERE id = ? AND user_id = ?");
    $stmt->bind_param("sii", $content, $journal_id, $user_id);
    echo ($stmt->execute()) ? json_encode(["status" => "success"]) : json_encode(["status" => "error", "message" => "Database error"]);
    $stmt->close();
    exit;
}

// Delete Journal
if ($data["action"] === "delete") {
    $journal_id = $data["journal_id"] ?? 0;

    if (!$journal_id) {
        echo json_encode(["status" => "error", "message" => "Invalid journal ID"]);
        exit;
    }

    $stmt = $conn->prepare("DELETE FROM journals WHERE id = ? AND user_id = ?");
    $stmt->bind_param("ii", $journal_id, $user_id);
    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Journal deleted successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Database error"]);
    }
    $stmt->close();
    exit;
}
}

// Fetch All Journals
if (isset($_GET["action"]) && $_GET["action"] === "fetch") {
    if (!isset($_SESSION['user_id'])) {
        echo json_encode(["status" => "error", "message" => "User not logged in"]);
        exit;
    }

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT id, content, created_at FROM journals WHERE user_id = ? ORDER BY created_at DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$journals = [];
while ($row = $result->fetch_assoc()) {
    $journals[] = $row;
}

echo json_encode(["status" => "success", "journals" => $journals]);
$stmt->close();
exit;
}

// Fetch Single Journal
if (isset($_GET["action"]) && $_GET["action"] === "get") {
    $journal_id = $_GET["journal_id"] ?? 0;
    $stmt = $conn->prepare("SELECT content FROM journals WHERE id = ?");
    $stmt->bind_param("i", $journal_id);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    echo json_encode(["status" => "success", "journal" => $result]);
    exit;
}

echo json_encode(["status" => "error", "message" => "Invalid request"]);
?>

