# Login Attempt Validator - Laravel Assessment 02

This is a secure Login System built using **PHP Laravel**. It features strict form validation, authentication logic, and user interface enhancements like a password visibility toggle and "Remember Me" functionality.

## 🚀 Features
* **Strict Validation:** * Checks for empty fields.
    * Validates proper email format.
    * Enforces a minimum password length for security.
* **Authentication:** Uses Laravel's built-in Auth guard to verify credentials.
* **UI Bonuses:**
    * **Password Toggle:** Show/Hide password functionality using JavaScript.
    * **Remember Me:** Persistent login sessions via checkbox.
    * **Redirects:** Successful logins are redirected to a dashboard.
* **Error Handling:** Displays clear, field-specific validation messages and invalid credential alerts.

## 🛠️ Technical Stack
* **Framework:** Laravel 11.x
* **Language:** PHP 8.2+
* **Frontend:** Blade Templating Engine & Tailwind CSS
* **Database:** MySQL (Supports SQLite)

## 📂 Project Structure
* **Routes:** `routes/web.php` - Handles login and dashboard routing.
* **Controller:** `app/Http/Controllers/AuthController.php` - Manages authentication and validation logic.
* **Model:** `app/Models/User.php` - The standard authenticatable User model.
* **View:** `resources/views/login.blade.php` - The login interface with JS toggle logic.

## ⚙️ Setup and Installation

Follow these steps to get the project running locally:

1. **Clone and Enter Directory:**
   ```bash
   git clone [https://github.com/MalinduDissanayaka/assessment-app.git](https://github.com/MalinduDissanayaka/assessment-app.git)
   cd assessment-app
2. **Install Dependencies:**
   ```bash
   composer install
3. **Database Setup:**
   ```bash
   php artisan migrate
4. **Create a Test User:**
   ```bash
   php artisan tinker
    # Inside tinker run:
    \App\Models\User::create(['name' => 'Admin', 'email' => 'test@example.com', 'password' =>            bcrypt('password123')]);
    exit
5. **Launch the Application:**
   ```bash
   php artisan serve

Access the system at: http://127.0.0.1:8000/login
