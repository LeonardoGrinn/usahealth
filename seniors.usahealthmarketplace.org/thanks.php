<?php 

// Start Session
session_start();

if(isset($_SESSION['info'])) {

  // Extract Array so as we can use its key as variable name
  extract($_SESSION['info']);


  //$servername = "sql910.main-hosting.eu";
  $servername = "localhost";
  $database = "u554046401_heathM";
  $username = "u554046401_heathM";
  $password = "112123@33223QQQQWs";
  // $username = "root";
  // $password = "";
  $statusConn;

  // Conect to data base
  $conn = mysqli_connect($servername, $username, $password, $database);

  $sql = mysqli_query($conn, "INSERT INTO form_steps (zipcode, age, household_size, household_estimated, anualhouse_hold) VALUES('$zipcode', '$age', '$householdsize', '$householdestimated', '$anualhousehold')");


  if($sql) {
    unset($_SESSION['info']);

    $statusConn = "Data has been saved succesfully!";
    // echo 'Data has been saved succesfully!';

  } else {

    $statusConn = mysqli_error($conn);
    // echo mysqli_error($conn);
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="assets/css/icon-font.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Font Family -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<script src=//b-js.ringba.com/CA9ecff5380721489cb76623fd8986551e async></script>
  <title>Results | Thanks</title>

  <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5KKF2C3');</script>
	<!-- End Google Tag Manager -->


</head>

<body class="page-thanks">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KKF2C3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Navbar -->
<?php include 'layout/navbar.php';?>
<!-- Navbar -->


  <section class="section__stepsbar padding-section">
   
  <div class="section__stepsbar-box">

        <!-- section__steps-icon -->
        <div class="section__stepsbar-icon step-completed">
        <center><span><img src="assets/img/step-icons/zipcode.svg" alt="zipcode"></img></span></center>
        <center><p>Zipcode</p></center>
      </div> <!-- ./section__steps-icon -->

       <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><img src="assets/img/step-icons/cake-candles-solid.svg" alt="age"></img></span></center>
        <center><p>Age</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span class="current-step"><img src="assets/img/step-icons/card.svg" alt="medicare-card"></img></span></center>
        <center><p>Medicare Card</p></center>
      </div> <!-- ./section__steps-icon -->
      
      <!-- section__steps-icon
      <div class="section__stepsbar-icon">
        <center><span><img src="assets/img/step-icons/flag-solid.svg" alt="life-events"></img></span></center>
        <center><p>Life Events</p></center>
      </div>  ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span><img src="assets/img/step-icons/square-poll-vertical-solid.svg" alt="results"></img></span></center>
        <center><p>Results</p></center>
      </div> <!-- ./section__steps-icon -->

    </div>

  </section><!-- section__currentStep -->

  <!-- section__progressbar -->
  <section class="section__progressbar padding-section">

    <div class="section__progressbar-box">
      <div class="section__progressbar-fill" style="width:100%"></div>
      <div class="section__progressbar-filled" style="width:100%"></div> 
    </div>
  </section><!-- ./section__progressbar -->

  <!-- section__thanks-->
  <section class="section__thanks">
    
    <!-- First Form -->
    <center>
      <div class="container-policy">
        <!--  <p><big><strong>You Qualify For A Plan Review. Call to Complete The Process and Activate Your Additional Benefits</strong></big></p>-->
         <p class="policy-thanks">Unfortunately, based on your responses, you do not qualify for $0 premiums through ACA Insurance. 
         However, <strong>since you have Medicare Parts A & B, you may be eligible for a Medicare Advantage Plan with possible additional plan benefits if you have a Special Enrollment 
         Period available to you</strong>. Like recently moved, on your state's Medicaid program, or have other qualifying events. Call (Click) the number below to be connected with a 
         licensed insurance agent to check your eligibility to enroll and learn more about these plan options.</p>
      </div>
    </center>
    <center>
      <div class="container-button">
        <!-- <p>(only takes about 10 minutes)</p>
        <p>Call the Number Below to Enroll</p> -->
          <center>
            <div class="time">
              <span class="dot"></span>
              <div id="wait-time">Licensed Insurance Agent Available</div>
            </div>
          </center>

        <!-- btnPadding5 deleted class -->
        <!-- <a class="btn btnFormGreen getstarted" href="tel:877 308 8011" onclick="  fbq('track', 'Contact');"><i class="fa-solid fa-phone-volume" style="transform: translateY(2.5px); margin-right: 7px;"></i><strong><big>CALL NOW</big></strong></a> -->
        <a class="btn btnFormGreen getstarted my-2" href="tel:8663566704" onclick="  fbq('track', 'Contact');"><i class="fa-solid fa-phone-volume" style="transform: translateY(2.5px); margin-right: 7px;">
          </i>
            <strong>
              <big>CALL NOW</big>
            </strong>
            <br/>
            <big style="font-size: 1.4rem; font-weight: 500;">866-356-6704</big>
        <br/><small>TTY: 711</small>
        </a>
        <p class="my-2">Monday - Friday: 9am - 5pm CST</p>
      </div>
    </center>
       </section><!-- section__thanks -->
         <!-- Footer -->
    <?php include 'layout/footer.php';?>
    <!-- Footer --> 
   


</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>

<script>

  /*window.addEventListener("load", function(event) {
    setTimeout(loadAfterTime, 200000);
  });

  function loadAfterTime() {
    window.location.href = 'https://seniors.usahealthmarketplace.org/seniors-health-listings.php';
    ///alert('works');
  }*/
</script>

</html>
