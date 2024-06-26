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
		<script src="//insurance.mediaalpha.com/js/serve.js"></script>
  <!-- Font Family -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <title>Results | Thanks</title>

  <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5KKF2C3');</script>
	<!-- End Google Tag Manager -->
	


</head>

<body>
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
      <center><span><img src="assets/img/step-icons/cake-candles-solid.svg" alt="age"></img></span></center>
      <center><p>Age</p></center>
    </div> <!-- ./section__steps-icon -->

    <!-- section__steps-icon -->
    <div class="section__stepsbar-icon step-completed">
      <center><span><img src="assets/img/step-icons/users-solid.svg" alt="house-hold-size"></img></span></center>
      <center><p>Household Size</p></center>
    </div> <!-- ./section__steps-icon -->

    <!-- section__steps-icon -->
    <div class="section__stepsbar-icon step-completed">
      <center><span><img src="assets/img/step-icons/money-bill-trend-up-solid.svg" alt="income"></img></span></center>
      <center><p>Income</p></center>
    </div> <!-- ./section__steps-icon -->

    <!-- section__steps-icon -->
    <div class="section__stepsbar-icon step-completed">
      <center><span><img src="assets/img/step-icons/flag-solid.svg" alt="life-events"></img></span></center>
      <center><p>Life Events</p></center>
    </div> <!-- ./section__steps-icon -->

    <!-- section__steps-icon -->
    <div class="section__stepsbar-icon">
      <center><span class="current-step"><img src="assets/img/step-icons/square-poll-vertical-solid.svg" alt="results"></img></span></center>
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
      <div>
        <br/>
        <p><big><strong> <span style="color:#008000"> You're Pre-Qualified:</span> $0 Health Insurance, $1,400 Subsidy and Pre-paid Benefits card for Essentials. Call to Claim and Activate Benefits.</strong></big></p>
      </div>
    </center>
      
    <br/>

    <center>
      <div>
        <!-- <p>(only takes about 10 minutes)</p>
        <p>Call the Number Below to Enroll</p> -->

        <br/>
          <center>
            <div class="time">
              <span class="dot"></span>
              <div id="wait-time">Agent is Available</div>
            </div>
          </center>

        <!-- btnPadding5 deleted class -->
        <a id="btnFormGreen" class="btn btnFormGreen getstarted" href="tel:8557293240"><i class="fa-solid fa-phone-volume" style="transform: translateY(2.5px); margin-right: 7px;"></i><strong><big>CALL NOW</big></strong><br/>855-729-3240</a>
            <br/>        <br/>        <br/>
         <center>  
         <p style="font-size: .8rem;"> 
     By clicking the Call Now
     button on this website, you are providing express consent to be contacted via telephone or SMS, <br/> including pre-recorded and autodialed calls or text messages,     even if your phone number is on any national or state Do Not Call Registry.      <br/>This consent is not a condition of any purchase.
      <br/>
      </p>
            </center>
      </div>
    </center>
    <br/>
    <br/>
  
   
    <!-- <div class="section__thanks-features">
      <div class="section__thanks-f">
        <p>• $0 Primary Care Visits</p>
        <p>• $0 Virtual Urgent Care</p>
        <p>• $3 Prescription Drug Costs</p>
        <p>• Pre-existing conditions accepted</p>
      </div>
    </div> -->
    <br/>
    <br/>

    <!-- Footer -->
    <?php include 'layout/footer.php';?>
    <!-- Footer --> 
   
  </section><!-- section__thanks -->

</body>
  <script>
 var callToActionButton = document.getElementById('btnFormGreen'); // Reemplaza con el ID de tu botón

function handleClick() {
  // Desactiva el escuchador de eventos después del primer clic
  callToActionButton.removeEventListener('click', handleClick);

  // Realiza la acción que necesitas al hacer clic en el botón
  fbq('track', 'Contact');
}

// Agrega el escuchador de eventos
callToActionButton.addEventListener('click', handleClick);

  </script>
<!-- NavBar Script -->
</html>
