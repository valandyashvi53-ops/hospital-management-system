<?php

include '../includes/header.php';
include '../includes/db.php';

$result = $conn->query(
    "SELECT * FROM appointments ORDER BY appointment_id DESC"
);

?>

<section class="page-hero">

    <div class="container">

        <span class="section-tag">ADMIN</span>

        <h1>Appointments</h1>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="form-card">

            <table style="width:100%;border-collapse:collapse;">

                <tr>

                    <th>ID</th>
                    <th>Patient</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Time</th>

                </tr>

                <?php while ($row = $result->fetch_assoc()): ?>

                <tr>

                    <td>
                        <?php echo $row["appointment_id"]; ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row["patient_name"]); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row["doctor"]); ?>
                    </td>

                    <td>
                        <?php echo $row["appointment_date"]; ?>
                    </td>

                    <td>
                        <?php echo $row["appointment_time"]; ?>
                    </td>

                </tr>

                <?php endwhile; ?>

            </table>

        </div>

    </div>

</section>


<?php include '../includes/footer.php'; ?>