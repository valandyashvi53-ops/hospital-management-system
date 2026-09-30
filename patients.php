<?php

include '../includes/header.php';
include '../includes/db.php';

$result = $conn->query("SELECT * FROM patients ORDER BY patient_id DESC");

?>

<section class="page-hero">

    <div class="container">

        <span class="section-tag">PATIENTS</span>

        <h1>Patient Records</h1>

        <p>
            Hospital patient information management.
        </p>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="form-card">

            <table style="width:100%; border-collapse:collapse;">

                <tr style="text-align:left;">

                    <th style="padding:12px;">ID</th>
                    <th style="padding:12px;">Name</th>
                    <th style="padding:12px;">Age</th>
                    <th style="padding:12px;">Gender</th>
                    <th style="padding:12px;">Phone</th>

                </tr>

                <?php while ($row = $result->fetch_assoc()): ?>

                <tr>

                    <td style="padding:12px;">
                        <?php echo $row["patient_id"]; ?>
                    </td>

                    <td style="padding:12px;">
                        <?php echo htmlspecialchars($row["name"]); ?>
                    </td>

                    <td style="padding:12px;">
                        <?php echo $row["age"]; ?>
                    </td>

                    <td style="padding:12px;">
                        <?php echo htmlspecialchars($row["gender"]); ?>
                    </td>

                    <td style="padding:12px;">
                        <?php echo htmlspecialchars($row["phone"]); ?>
                    </td>

                </tr>

                <?php endwhile; ?>

            </table>

        </div>

    </div>

</section>


<?php include '../includes/footer.php'; ?>