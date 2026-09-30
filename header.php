<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MedCare Hospital</title>

    <link rel="stylesheet" href="/Hospital-Management-System/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

<header class="header">

    <div class="container nav-container">

        <a href="/Hospital-Management-System/index.php" class="logo">
            <span class="logo-icon">✚</span>
            <span>Med<span>Care</span></span>
        </a>

        <nav class="navbar">

            <a href="/Hospital-Management-System/index.php">Home</a>

            <a href="/Hospital-Management-System/pages/about.php">
                About
            </a>

            <a href="/Hospital-Management-System/pages/doctors.php">
                Doctors
            </a>

            <a href="/Hospital-Management-System/pages/services.php">
                Services
            </a>

            <a href="/Hospital-Management-System/pages/appointments.php">
                Appointment
            </a>

            <a href="/Hospital-Management-System/pages/contact.php">
                Contact
            </a>

        </nav>

        <a href="/Hospital-Management-System/pages/appointments.php"
           class="nav-btn">
            Book Appointment
        </a>

        <button class="menu-btn" id="menuBtn">
            ☰
        </button>

    </div>

</header>

<main>