<?php
$servername = "localhost";
$database = "forms";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
echo "Connected successfully";

$name = $_POST['txtname'];
$tempat = $_POST['tempat_ttl'];
$tanggal = $_POST['tanggal_ttl'];
$agama = $_POST['txtagama'];
$alamat = $_POST['txtalamat'];
$nohp = $_POST['phone'];
$jk = $_POST['radiocheck'];
// $hobi = $_POST['hobischeck'];
$hobi = implode(',', $_POST['hobischeck']);
// 
$fileName = $_FILES["uploadFile"]["name"];
$tempName = $_FILES["uploadFile"]["tmp_name"];
$folder = "./images/" . $fileName;
if (move_uploaded_file($tempName, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}

$sql = "INSERT INTO `mahasiswa_forms` (`email`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `no_hp`, `jenis_kel`, `hobi`, `foto`) VALUES ('$name', '$tempat', '$tanggal', '$agama', '$alamat', '$nohp', '$jk', '" . $hobi . "', '$fileName')";

$rs = mysqli_query($conn, $sql);

if ($rs) {
    echo "Contact Records Inserted";
}
header("Location:http://localhost/submission-2/");
