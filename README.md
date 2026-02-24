# 📚 NovelNest

NovelNest is your all-in-one digital sanctuary for book lovers. It brings together a vast collection of e-books, professionally narrated audiobooks, and a personal journaling space into one seamless, distraction-free platform. 

Whether you're looking to dive into a fantasy world, listen to a thriller on your commute, or reflect on your day, NovelNest has everything you need.

## ✨ Features

- **📖 E-Books:** Read from a diverse library of genres including Fiction, Horror, Historical, Sci-Fi, Romance, and more on any device.
- **🎧 Audiobooks:** Listen to high-quality audiobooks on the go.
- **✍️ Journaling:** A private space to write, reflect, and track your thoughts.
- **⭐ Wishlist:** Save your favorite books and audiobooks to read or listen to later.
- **💳 Premium Subscription:** Flexible subscription plans powered by Stripe for unlimited, ad-free access to our entire library.
- **⚙️ Admin Dashboard:** A comprehensive backend for administrators to manage users, books, audiobooks, and subscriptions.

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS, JavaScript, Swiper.js (for carousels)
- **Backend:** PHP (MVC Architecture)
- **Database:** MySQL
- **Payments:** Stripe API integration (`stripe/stripe-php`)

## 📁 Project Structure

The repository is structured into two main applications:

- `/public`: The user-facing frontend application containing controllers, models, and views (pages like audiobooks, books, journaling, etc.).
- `/admin`: The secure backend administration panel for platform management (dashboard, controllers, models).

## 🚀 Getting Started

### Prerequisites

- A local web server like XAMPP, WAMP, or MAMP.
- PHP 7.4 or higher.
- Composer (for managing PHP dependencies).
- MySQL Database.
- A Stripe Developer Account (for processing subscription payments).

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/binary-dreamer/NovelNest.git
   ```

2. **Setup the Database:**
   - Create a new MySQL database for the project (e.g., `novelnest`).
   - Import the provided `.sql` database schema file (if available) into your database to set up the required tables.

3. **Install Dependencies:**
   Navigate to the `public/` and `admin/` directories and run Composer to install the required PHP packages (like Stripe):
   ```bash
   cd novelnest/public
   composer install
   cd ../admin
   composer install
   ```

4. **Configure the Environment:**
   - Update your database connection details in the relevant configuration files (e.g., `public/config/` and `admin/config/`).
   - Add your **Stripe API Keys** in `public/config/stripeApi.php`.

5. **Run the Application:**
   - Move the project folder to your web server's root directory (e.g., `htdocs` for XAMPP).
   - Start your local Apache and MySQL servers.
   - Open your browser and navigate to `http://localhost/novelnest/public/` to view the main site, or `http://localhost/novelnest/admin/` for the admin portal.


*Enjoy your reading and listening journey with NovelNest!* 🦉📖
