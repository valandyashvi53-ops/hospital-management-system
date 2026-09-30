CREATE DATABASE IF NOT EXISTS hospital_management;

USE hospital_management;


-- =========================
-- USERS
-- =========================

CREATE TABLE users (

    user_id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    email VARCHAR(150) NOT NULL UNIQUE,

    phone VARCHAR(20),

    password VARCHAR(255) NOT NULL,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);


-- =========================
-- PATIENTS
-- =========================

CREATE TABLE patients (

    patient_id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    age INT,

    gender VARCHAR(20),

    phone VARCHAR(20),

    email VARCHAR(150),

    address TEXT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);


-- =========================
-- DOCTORS
-- =========================

CREATE TABLE doctors (

    doctor_id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    specialization VARCHAR(100),

    phone VARCHAR(20),

    email VARCHAR(150),

    experience INT,

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);


-- =========================
-- APPOINTMENTS
-- =========================

CREATE TABLE appointments (

    appointment_id INT AUTO_INCREMENT PRIMARY KEY,

    patient_name VARCHAR(100) NOT NULL,

    email VARCHAR(150),

    phone VARCHAR(20),

    doctor VARCHAR(150),

    appointment_date DATE,

    appointment_time TIME,

    message TEXT,

    status VARCHAR(30) DEFAULT 'Pending',

    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);


-- =========================
-- SAMPLE DOCTORS
-- =========================

INSERT INTO doctors
(name, specialization, phone, email, experience)
VALUES

(
'Dr. Aarav Patel',
'Cardiologist',
'9876543210',
'aarav@medcare.com',
15
),

(
'Dr. Ananya Shah',
'Neurologist',
'9876543211',
'ananya@medcare.com',
12
),

(
'Dr. Rohan Mehta',
'General Physician',
'9876543212',
'rohan@medcare.com',
10
),

(
'Dr. Priya Desai',
'Dentist',
'9876543213',
'priya@medcare.com',
8
);


-- =========================
-- SAMPLE PATIENTS
-- =========================

INSERT INTO patients
(name, age, gender, phone, email, address)
VALUES

(
'Rahul Sharma',
22,
'Male',
'9876500001',
'rahul@example.com',
'Ahmedabad'
),

(
'Neha Patel',
25,
'Female',
'9876500002',
'neha@example.com',
'Ahmedabad'
);