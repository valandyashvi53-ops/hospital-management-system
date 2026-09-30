<?php

include '../includes/header.php';
include '../includes/db.php';

$patients = $conn->query(
    "SELECT COUNT(*) AS total FROM patients"
)->fetch_assoc()["total"];

$doctors = $conn->query(
    "SELECT COUNT(*) AS total FROM doctors"
)->fetch_assoc()["total"];

$appointments = $conn->query(
    "SELECT COUNT(*) AS total FROM appointments"
)->fetch_assoc()["total"];

?>

<section class="page-hero">

    <div class="container">

        <span class="section-tag">ADMIN PANEL</span>

        <h1>Hospital Dashboard</h1>

        <p>
            Manage hospital information and appointments.
        </p>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="services-grid">

            <div class="service-card">

                <div class="service-icon">👥</div>

                <h3>Total Patients</h3>

                <p style="font-size:30px;font-weight:800;color:#0d9488;">
                    <?php echo $patients; ?>
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">👨‍⚕️</div>

                <h3>Total Doctors</h3>

                <p style="font-size:30px;font-weight:800;color:#0d9488;">
                    <?php echo $doctors; ?>
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">📅</div>

                <h3>Appointments</h3>

                <p style="font-size:30px;font-weight:800;color:#0d9488;">
                    <?php echo $appointments; ?>
                </p>

            </div>

        </div>

    </div>

</section>


<?php include '../includes/footer.php'; ?>
