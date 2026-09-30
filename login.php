<?php

include 'includes/header.php';
include 'includes/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $stmt = $conn->prepare(
        "SELECT * FROM users WHERE email = ?"
    );

    $stmt->bind_param("s", $email);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {

            $_SESSION["user_id"] = $user["user_id"];
            $_SESSION["user_name"] = $user["name"];

            header("Location: index.php");
            exit;

        } else {

            $message = "Invalid password.";

        }

    } else {

        $message = "Account not found.";

    }

    $stmt->close();
}

?>

<section class="page-hero">

    <div class="container">

        <span class="section-tag">PATIENT LOGIN</span>

        <h1>Welcome Back</h1>

        <p>
            Login to your MedCare account.
        </p>

    </div>

</section>


<section class="section">

    <div class="container form-container">

        <?php if ($message): ?>

            <div class="alert alert-error">
                <?php echo htmlspecialchars($message); ?>
            </div>

        <?php endif; ?>


        <div class="form-card">

            <form method="POST">

                <div class="form-group">

                    <label>Email Address</label>

                    <input
                        type="email"
                        name="email"
                        required
                    >

                </div>

                <br>

                <div class="form-group">

                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        required
                    >

                </div>


                <div class="form-submit">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Login
                    </button>

                </div>

            </form>

        </div>

    </div>

</section>


<?php include 'includes/footer.php'; ?>