<?php 
include 'utils.php';
// Start Session
session_start();

if(isset($_POST['next'], $_POST['householdestimated'])) {
  $_SESSION['info']['householdestimated']=  $_POST['householdestimated'];
  $_SESSION['info']['next']= $_POST['next'];
  // Redirecto to step-3.php

  $householdSize=  $_SESSION['info']["householdsize"];
  $income=  $_SESSION['info']["householdestimated"];
  $state =  $_SESSION['info']["state"];
  
 $parameter = "?age=" . $_SESSION['info']['age'] . "&household_size=" . $_SESSION['info']['householdsize'] . "&household_income=" . $_SESSION['info']['householdestimated'];

echo checkIncomeStepFour($householdSize, $income, $state, $parameter);
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

  <title>Step 4 | Income</title>

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
    <div class="section__stepsbar-icon">
      <center><span class="current-step"><img src="assets/img/step-icons/flag-solid.svg" alt="life-events"></img></span></center>
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
      <div class="section__progressbar-fill" style="width:60%"></div>
      <div class="section__progressbar-filled" style="width:40%"></div> 
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
        <label>What is your estimated annual Household income for 2024 (before taxes)?</label> <br/><br/>
        <p><small><i>Enter your estimated income for everyone you included in your Household size</i></small></p> <br/>
        <input required type="text" min="0" 
          id="householdestimatedOne"
         value="<?= isset($_SESSION['info']['householdestimated']) ? $_SESSION['info']['householdestimated'] : '' ?>"
         placeholder="Household Est. Income"  onblur="formatCurrency(this)"> 
         <input required type="hidden" min="0"
         
         value="<?= isset($_SESSION['info']['householdestimated']) ? $_SESSION['info']['householdestimated'] : '' ?>" 
         placeholder="Household Est. Income" name="householdestimated"  id="householdestimated" > 
        <!-- Form buttons -->
        <div class="mt-2 pt-2">
         <!--  <a id="btBack" class="btn btnLink btn-red" href="step-3.php">Previous</a> -->
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
  gtag('event', 'click', { 'event_category': 'RegisterForm', 'event_label': 'Next', 'value':'Step 4 - Income' });
}

function gtag_Back() {
  gtag('event', 'click', { 'event_category': 'RegisterForm', 'event_label': 'Back', 'value':'Step 4 - Income' });
}

const inputElement = document.getElementById("householdestimated");
const outputElement = document.getElementById("householdestimatedOne");

const inputValue = parseInt(inputElement.value.replace(/\D/g, ''), 10);
console.log(inputValue);
const formattedValue = inputValue.toLocaleString('en-US');
outputElement.value = !isNaN(formattedValue) ? formattedValue: '';


function validateInput(input) {
    // Expresión regular que solo permite números y comas
    const regex = /^[0-9,]*$/;
    // Valor ingresado por el usuario
    const value = input.value;
    // Validar si el valor coincide con la expresión regular
    if (!regex.test(value)) {
        // Si no coincide, eliminar los caracteres no permitidos
        input.value = value.replace(/[^0-9,]/g, '');
    }
}

function formatCurrency(input) {
    if(validateInput(input)){
          const value = parseFloat(input.value.replace(/,/g, '')); 
  if (!isNaN(value)) {
    input.value = value.toLocaleString('en-US'); 
  }
  document.getElementById("householdestimated").value= value || 0 
    }

}
</script>

</html>
