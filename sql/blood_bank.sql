
-- Create Database
CREATE DATABASE IF NOT EXISTS blood_bank;
USE blood_bank;

-- Create Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    blood_group ENUM('A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-') NOT NULL,
    location VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Sample User
INSERT INTO users (name, email, password, blood_group, location)
VALUES ('Admin User', 'admin@bloodbank.com', '$2y$10$examplehashedpassword', 'O+', 'Sample City');
