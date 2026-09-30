<?php

include 'includes/header.php';
include 'includes/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users
            (name, email, phone, password)
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssss",
        $name,
        $email,
        $phone,
        $password
    );

    if ($stmt->execute()) {
        $message = "Registration successful!";
    } else {
        $message = "Email may already exist.";
    }

    $stmt->close();
}

?>

<section class="page-hero">

    <div class="container">

        <span class="section-tag">CREATE ACCOUNT</span>

        <h1>Patient Registration</h1>

        <p>
            Create your account to access hospital services.
        </p>

    </div>

</section>


<section class="section">

    <div class="container form-container">

        <?php if ($message): ?>

            <div class="alert alert-success">
                <?php echo htmlspecialchars($message); ?>
            </div>

        <?php endif; ?>


        <div class="form-card">

            <form method="POST">

                <div class="form-grid">

                    <div class="form-group full">

                        <label>Full Name</label>

                        <input
                            type="text"
                            name="name"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>Email</label>

                        <input
                            type="email"
                            name="email"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>Phone</label>

                        <input
                            type="tel"
                            name="phone"
                            required
                        >

                    </div>


                    <div class="form-group full">

                        <label>Password</label>

                        <input
                            type="password"
                            name="password"
                            required
                        >

                    </div>

                </div>


                <div class="form-submit">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Create Account
                    </button>

                </div>

            </form>

        </div>

    </div>

</section>


<?php include 'includes/footer.php'; ?>