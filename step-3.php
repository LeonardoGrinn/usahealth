<?php 
// Start Session
session_start();

if(isset($_POST['next'], $_POST['householdsize'])) {
  $_SESSION['info']['householdsize']=  $_POST['householdsize'];
  $_SESSION['info']['next']= $_POST['next'];

  // Redirecto to step-3.php
  //header("Location: step-4.php?age=" . $_SESSION['info']['age']  . "household_size=" .  $_SESSION['info']['householdsize']. "&household_income=" .  $_SESSION['info']['householdestimated'] ."");
  header("Location: step-4.php?age=" . $_SESSION['info']['age']  . "household_size=" .  $_SESSION['info']['householdsize']. "&household_income=" .  $_SESSION['info']['householdestimated'] ."&utm_source=" .  $_SESSION['info']['utm_source'] ."&utm_medium=" .  $_SESSION['info']['utm_medium'] ."&utm_campaign=" .  $_SESSION['info']['utm_campaign'] ."");
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

  <title>Step 3 | Household Size</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SNH79EYLLD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-SNH79EYLLD');
  </script> 
  
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

  <!-- Website Logo  -->
  <div class="website-logo"></div>


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
    <div class="section__stepsbar-icon">
      <center><span class="current-step"><img src="assets/img/step-icons/money-bill-trend-up-solid.svg" alt="income"></img></span></center>
      <center><p>Income</p></center>
    </div> <!-- ./section__steps-icon -->

    <!-- section__steps-icon -->
    <div class="section__stepsbar-icon">
      <center><span><img src="assets/img/step-icons/flag-solid.svg" alt="life-events"></img></span></center>
      <center><p>Life Events</p></center>
    </div> <!-- ./section__steps-icon -->

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
      <div class="section__progressbar-fill" style="width:40%"></div>
      <div class="section__progressbar-filled" style="width:20%"></div> 
    </div>
    <p>
      <b>Progress</b>
    </p>
  </section><!-- ./section__progressbar -->

  <!-- section__currentStep -->
  <section class="section__currentstep padding-section">
    
    <!-- First Form -->
    <center>
      <form method="POST" class="section__step-form">
        <label>What is your Household size?</label> <br/><br/>
        <p><small><i>Include yourself, your spouse if married, and anyone you'll claim as a tax dependent</i></small></p> <br/>
        <input required type="text" max="8" min="0" value="<?= isset($_SESSION['info']['householdsize']) ? $_SESSION['info']['householdsize'] : '' ?>"  placeholder="Household Size" name="householdsize"> <br/>
        
        <!-- Form buttons -->
        <div class="mt-2 pt-2">
       <!--    <a  id="btBack" class="btn btnLink btn-red" href="step-2.php">Previous</a> -->
          <input id="btNext" class="btn btnForm btnWidth" name="next" value="Next" type="submit">
        </div>
        <!-- ./Form buttons -->
      </form>
    </center> <!-- ./First Form -->
   
  </section><!-- section__currentStep -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- Footer -->
  <?php include 'layout/footer.php';?>
  <!-- Footer -->

</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>

<!-- Font Awesome -->
<!-- <script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script> -->

<!-- Tag para registrar el click -->
<script>
document.getElementById("btBack").addEventListener("click", gtag_Back);
document.getElementById("btNext").addEventListener("click", gtag_Next);

function gtag_Next() {
  gtag('event', 'click', { 'event_category': 'RegisterForm', 'event_label': 'Next', 'value':'Step 3 - Household Size' });
}

function gtag_Back() {
  gtag('event', 'click', { 'event_category': 'RegisterForm', 'event_label': 'Back', 'value':'Step 3 - Household Size' });
}
</script>

</html>
