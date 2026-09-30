<?php

include '../includes/header.php';
include '../includes/db.php';

$result = $conn->query(
    "SELECT * FROM patients ORDER BY patient_id DESC"
);

?>

<section class="page-hero">

    <div class="container">

        <span class="section-tag">ADMIN</span>

        <h1>Manage Patients</h1>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="form-card">

            <table style="width:100%;border-collapse:collapse;">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Phone</th>
                </tr>

                <?php while ($row = $result->fetch_assoc()): ?>

                <tr>

                    <td><?php echo $row["patient_id"]; ?></td>

                    <td>
                        <?php echo htmlspecialchars($row["name"]); ?>
                    </td>

                    <td><?php echo $row["age"]; ?></td>

                    <td>
                        <?php echo htmlspecialchars($row["gender"]); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row["phone"]); ?>
                    </td>

                </tr>

                <?php endwhile; ?>

            </table>

        </div>

    </div>

</section>


<?php include '../includes/footer.php'; ?>