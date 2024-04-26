<?php include ('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">   
    <!-- Styles CSS -->
    <link rel="stylesheet" href="styles.css">
    <title>USA Health Marketplace</title>
</head>
<body>

     <!-- Navbar -->
     <section class="navbar">
        <img class="navbar__logo" src="assets/img/logo.png" alt="logo" >
    </section>


<section class="container">
    <!-- Form Title -->
    <h1 class="form__title">UPLOAD CVS</h1>

   
    <!-- Contract builder Container -->


      <center>
        <form action="" method="post" class="form" enctype="multipart/form-data">
            <div align="center" class="form__container">
                <input type="file" name="file" id="file" class="form__inputfile" />
                <label for="file">Choose a file</label>
                <!-- <br> -->
                <input type="submit" name="submit" value="Import">
            </div>
          </form>
      </center>


       


</section>

    <foote class="footer">
        <center><p>© Copyright USA Health Marketplace 2023</p></center>
    </foote>
    
</body>

</html>