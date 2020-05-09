
<?php

function kontrol() {


$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["city"])) {
    $genderErr = "City is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["email"])) {
    $genderErr = "E-Mail is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["lastname"])) {
    $genderErr = "Lastname is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["name"])) {
    $genderErr = "Name is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
?>

 <?php echo $_POST["name"]; ?><br>
 <?php echo $_POST["lastname"]; ?><br>
 <?php echo $_POST["email"]; ?> <br>
 <?php echo $_POST["city"]; ?><br>
 <?php echo $_POST["gender"]; ?>
}

