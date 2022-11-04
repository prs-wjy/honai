<form id="myForm" action="." method="post">
  <input type="hidden" id="checkinsuccess" name="checkinsuccess" value="">
</form>
<script type="text/javascript">
    document.getElementById('myForm').submit();
</script>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_honai";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (!empty($_POST)) {
  $sql = "INSERT INTO
  guest (name, sharer_name, nationality, city, email, phone, id_type, id_number)
  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

  $name = $_POST['name'];
  $sharer = $_POST['sharer-name'];
  $nationality = $_POST['nationality'];
  $city = $_POST['city'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $idType = $_POST['id-type'];
  $idNumber = $_POST['id-number'];

  $stmt = $conn->prepare($sql);
  $stmt->bind_param(
    'ssssssss',
    $name,
    $sharer,
    $nationality,
    $city,
    $email,
    $phone,
    $idType,
    $idNumber
  );

  $stmt->execute();
  $stmt->close();
}

mysqli_close($conn);
?>