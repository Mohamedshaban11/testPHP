<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Confirmation</title>
</head>
<body>
    <?php
    if (isset($_GET['first_name']) && isset($_GET['last_name']) && isset($_GET['address']) && isset($_GET['country']) && isset($_GET['gender']) && isset($_GET['skills']) && isset($_GET['username']) && isset($_GET['department'])) {
        $first_name = $_GET["first_name"];
        $last_name = $_GET["last_name"];
        $address = $_GET["address"];
        $country = $_GET["country"];
        $gender = $_GET["gender"];
        $skills = $_GET["skills"];
        $username = $_GET["username"];
        $department = $_GET["department"];
    ?>
        <h2>Thank You, <?php echo ($gender === "male") ? "Mr." : "Miss"; ?> <?php echo $first_name . " " . $last_name; ?></h2>
        <p>Please review your information:</p>
        <p><strong>Name:</strong> <?php echo $first_name . " " . $last_name; ?></p>
        <p><strong>Address:</strong> <?php echo $address; ?></p>
        <p><strong>Your skills:</strong> <?php echo $skills; ?></p>
        <p><strong>Country:</strong> <?php echo $country; ?></p>
        <p><strong>Department:</strong> <?php echo $department; ?></p>
    <?php
    } else {
        echo "<h2>Form submission failed.</h2>";
    }
    ?>
</body>
</html>