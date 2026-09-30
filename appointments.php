<?php

include '../includes/header.php';
include '../includes/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $doctor = trim($_POST["doctor"]);
    $date = $_POST["date"];
    $time = $_POST["time"];
    $message_text = trim($_POST["message"]);

    $sql = "INSERT INTO appointments
            (patient_name, email, phone, doctor, appointment_date, appointment_time, message)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "sssssss",
        $name,
        $email,
        $phone,
        $doctor,
        $date,
        $time,
        $message_text
    );

    if ($stmt->execute()) {
        $message = "Appointment booked successfully!";
    } else {
        $message = "Something went wrong. Please try again.";
    }

    $stmt->close();
}

?>

<section class="page-hero">

    <div class="container">

        <span class="section-tag">APPOINTMENT</span>

        <h1>Book Your Appointment</h1>

        <p>
            Schedule your consultation with our medical specialists.
        </p>

    </div>

</section>


<section class="section">

    <div class="container form-container">

        <?php if ($message != ""): ?>

            <div class="alert alert-success">
                <?php echo htmlspecialchars($message); ?>
            </div>

        <?php endif; ?>


        <div class="form-card">

            <form method="POST">

                <div class="form-grid">

                    <div class="form-group">

                        <label>Patient Name</label>

                        <input
                            type="text"
                            name="name"
                            placeholder="Enter your full name"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>Email</label>

                        <input
                            type="email"
                            name="email"
                            placeholder="Enter your email"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>Phone Number</label>

                        <input
                            type="tel"
                            name="phone"
                            placeholder="Enter phone number"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>Select Doctor</label>

                        <select name="doctor" required>

                            <option value="">Choose Doctor</option>

                            <option>Dr. Aarav Patel - Cardiologist</option>

                            <option>Dr. Ananya Shah - Neurologist</option>

                            <option>Dr. Rohan Mehta - General Physician</option>

                            <option>Dr. Priya Desai - Dentist</option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>Appointment Date</label>

                        <input
                            type="date"
                            name="date"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label>Appointment Time</label>

                        <input
                            type="time"
                            name="time"
                            required
                        >

                    </div>


                    <div class="form-group full">

                        <label>Message</label>

                        <textarea
                            name="message"
                            placeholder="Describe your concern..."
                        ></textarea>

                    </div>

                </div>


                <div class="form-submit">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Book Appointment →
                    </button>

                </div>

            </form>

        </div>

    </div>

</section>


<?php include '../includes/footer.php'; ?>