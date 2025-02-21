<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/client-site/config/db.php';

class Journal {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function saveJournal($user_id, $content) {
        $stmt = $this->conn->prepare("INSERT INTO journals (user_id, content) VALUES (?, ?)");
        $stmt->bind_param("is", $user_id, $content);
        return $stmt->execute();
    }

    public function getUserJournals($user_id) {
        $stmt = $this->conn->prepare("SELECT * FROM journals WHERE user_id = ? ORDER BY created_at DESC");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>
