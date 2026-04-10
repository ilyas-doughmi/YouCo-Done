# YouCo'Done 🍽️

YouCo'Done is a modern web application designed to bridge the gap between food enthusiasts and restaurateurs. It provides a seamless platform for users to discover restaurants and book tables online, while offering restaurant owners robust tools to manage their establishments and menus.

---

## 🚀 Technologies

- **Backend:** PHP 8.2+ with [Laravel 11](https://laravel.com)
- **Frontend:** [Blade Templates](https://laravel.com/docs/blade) & [TailwindCSS](https://tailwindcss.com)
- **Database:** [PostgreSQL](https://www.postgresql.org)
- **Permissions:** [Spatie Laravel-Permission](https://spatie.be/docs/laravel-permission)
- **Build Tool:** [Vite](https://vitejs.dev)

---

## ✨ Features

### 👤 For Customers
- **Restaurant Discovery:** Search and browse detailed profiles of various restaurants.
- **Easy Reservations:** Book a table at your favorite spot in just a few clicks.
- **Profile Management:** Manage your personal details and booking history.

### 👨‍🍳 For Restaurateurs
- **Smart Dashboard:** Monitor restaurant performance with real-time statistics.
- **Establishment Management:** Add, edit, or remove restaurant listings.
- **Menu & Dish Builder:** Create and customize digital menus with specific categories and dishes.
- **Reservation Tracking:** Keep track of all incoming bookings efficiently.

### 🛡️ For Administrators
- **Global Oversight:** Manage all registered restaurants and users.
- **Content Moderation:** Ability to remove or restrict establishments to ensure platform quality.

---

## 🛠️ Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/YouCo-Done.git
   cd YouCo-Done/web
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Configuration:**
   Update your `.env` file with your PostgreSQL credentials:
   ```env
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=youco_db
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Run Migrations & Seeders:**
   ```bash
   php artisan migrate --seed
   ```

6. **Serve the application:**
   ```bash
   php artisan serve
   npm run dev
   ```

---

## 📁 Project Structure

```text
├── app/                # Core logic, Models, and Controllers
├── config/             # Application configuration files
├── database/           # Migrations, Seeders, and Factories
├── public/             # Assets and entry point
├── resources/          # Blade templates and CSS/JS assets
│   ├── views/          # HTML Templates
│   └── css/            # TailwindCSS styles
├── routes/             # Web and API routes
└── tests/              # Automated tests
```

---

## 📝 License

This project is open-sourced software licensed under the [MIT license](LICENSE).
