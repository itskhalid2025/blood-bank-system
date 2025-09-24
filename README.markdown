# Blood Bank Management System

A full-stack web application for managing blood donors, recipients, and blood requests. Built with PHP, MySQL, and a responsive UI, this system supports basic user management and search functionality.

📖 Table of Contents

* Project Overview
* Features
* Project Structure
* Modules
* Technologies Used
* Setup Instructions
* Contributing
* License

📋 Project Overview
The Blood Bank Management System is designed to facilitate blood donation and request management by providing a simple and secure platform. Users can register as donors, search for blood by group and location, and manage their profiles. The application is built with PHP for the backend, MySQL for data storage, and styled with CSS for a responsive interface.

✨ Features

* Donor Registration: Add and manage donor details.
* Blood Search: Search for donors by blood group and location.
* Secure Sessions: Basic session management for user tracking.
* Responsive UI: Optimized for desktop and mobile devices using custom CSS.

Healthcare-Management-System/
├── frontend_dev/                # Frontend code (React, HTML, CSS, Bootstrap)
│   ├── src/                    # React components, styles, and assets
│   ├── public/                 # Static files (HTML, favicon, etc.)
│   └── package.json            # Frontend dependencies and scripts
├── Health/                     # Backend code (C#, ADO.NET)
│   ├── Controllers/            # API controllers for handling requests
│   ├── Models/                 # Data models for database interaction
│   ├── DataAccess/             # ADO.NET database operations
│   └── appsettings.json        # Configuration for SQL Server connection
├── README.md                   # Project documentation
└── .gitignore                  # Git ignore file


🛠 Technologies Used

* Frontend:
  * HTML
  * CSS
  * PHP (for dynamic content)

* Backend:
  * PHP
  * PDO (for MySQL database operations)

* Database:
  * MySQL

* Tools:
  * XAMPP (for Apache and MySQL)
  * Git & GitHub

⚙️ Setup Instructions

1. Clone the Repository:

   ```bash
   git clone https://github.com/your-username/blood-bank-system.git
   cd blood-bank-system


Environment Setup:

Install XAMPP from apachefriends.org.
Start Apache and MySQL modules in XAMPP Control Panel.


Database Setup:

Open http://localhost/phpmyadmin in your browser.
Create a database named blood_bank.
Import the sql/blood_bank.sql file:
Go to the blood_bank database > Import > Choose blood_bank.sql > Go.


Update the password hash in blood_bank.sql if needed (use password_hash() in PHP).


Configure Database Connection:

Open config/db_connect.php and ensure the credentials match your MySQL setup:
Default: username = 'root', password = '' (unless changed).




Access the Application:

Open http://localhost/blood-bank-system in your browser.
Register a donor at http://localhost/blood-bank-system/donor/register.php.
Search for blood at http://localhost/blood-bank-system/donor/search_blood.php.



📥 Contributing

Fork the repository.
Create a new branch (git checkout -b feature-branch).
Make your changes and commit (git commit -m "Add feature").
Push to the branch (git push origin feature-branch).
Create a Pull Request.

📜 LicenseThis project is licensed under the MIT License. See the LICENSE file for details.```