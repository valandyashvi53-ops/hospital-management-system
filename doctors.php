<?php

include '../includes/header.php';
include '../includes/db.php';

$result = $conn->query(
    "SELECT * FROM doctors ORDER BY doctor_id DESC"
);

?>

<section class="page-hero">

    <div class="container">

        <span class="section-tag">ADMIN</span>

        <h1>Manage Doctors</h1>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="doctors-grid">

            <?php while ($row = $result->fetch_assoc()): ?>

                <div class="doctor-card">

                    <img
                        src="../images/doctor1.jpg"
                        alt="Doctor"
                    >

                    <div class="doctor-info">

                        <h3>
                            <?php echo htmlspecialchars($row["name"]); ?>
                        </h3>

                        <p>
                            <?php echo htmlspecialchars($row["specialization"]); ?>
                        </p>

                    </div>

                </div>

            <?php endwhile; ?>

        </div>

    </div>

</section>


<?php include '../includes/footer.php'; ?>