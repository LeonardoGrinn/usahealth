<?php 

  //$servername = "sql910.main-hosting.eu";
  $servername = "localhost";
  $database = "u554046401_heathM";
  $username = "u554046401_heathM";
  $password = "112123@33223QQQQWs";
  //$username = "root";
  //$password = "";
  $statusConn;

  // Conect to data base
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";


if(isset($_POST['submit'])) {
    if ($_FILES['file']['name']) {
        $filename = explode('.', $_FILES['file']['name']);
        if($filename[1] == 'csv') {
            $handle = fopen($_FILES['file']['tmp_name'], 'r');
            while($data = fgetcsv($handle)) {
                $item1 = mysqli_real_escape_string($conn, $data[0]);
                $item2 = mysqli_real_escape_string($conn, $data[1]);
                $item3 = mysqli_real_escape_string($conn, $data[2]);
                $item4 = mysqli_real_escape_string($conn, $data[3]);
                $sql = "INSERT into CSV_Files(excel_phone, excel_fname, excel_lname, excel_email) values ('$item1', '$item2', '$item3', '$item4')";
            }

            fclose($handle);

            print 'Import done';
        }
    } 
}

?>
