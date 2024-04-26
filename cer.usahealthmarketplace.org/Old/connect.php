<?php 

  //$servername = "sql910.main-hosting.eu";
  //$servername = "localhost";
  $servername = "192.169.174.93";
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
  echo "<div class='ui-message'><center><h1>Connected successfully</h1></center></div>";


  if(isset($_POST['submit'])) {
    if ($_FILES['file']['name']) {
        $filename = explode('.', $_FILES['file']['name']);
        if($filename[1] == 'csv') {
            $handle = fopen($_FILES['file']['tmp_name'], 'r');
            while($data = fgetcsv($handle)) {
                $phone = mysqli_real_escape_string($conn, $data[0]);
                $fname = mysqli_real_escape_string($conn, $data[1]);

                $sql = "INSERT INTO `CER_Files`(`cer`, `key`) values ('$cer', '$key')";
                echo $sql;
                mysqli_query($conn, $sql);
                
            }

            fclose($handle);

            print '<div class="ui-message"><center><h1>Import Done</h1></center></div>';
        }
    } 
}

?>
