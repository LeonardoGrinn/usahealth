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
if (isset($_SESSION['info']['anualhousehold'])) {
    if (in_array("None of these apply", $_SESSION['info']['anualhousehold'])) {
        $event = 'None';
    } else {
        $event = 'Other';
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

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5KKF2C3');</script>
  <!-- End Google Tag Manager -->
	<script src="//insurance.mediaalpha.com/js/serve.js"></script>
  <title>Results | Thanks</title>
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
        <center><span><i class="fa-solid fa-cake-candles"></i></span></center>
        <center><p>Age</p></center>
      </div> <!-- ./section__steps-icon -->

       <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><i class="fa-solid fa-users"></i></span></center>
        <center><p>Household Size</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><i class="fa-solid fa-money-bill-trend-up"></i></span></center>
        <center><p>Income</p></center>
      </div> <!-- ./section__steps-icon -->
      
      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><i class="fa-solid fa-flag"></i></span></center>
        <center><p>Life Events</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span class="current-step"><i class="fa-solid fa-square-poll-vertical"></i></span></center>
        <center><p>Results</p></center>
      </div> <!-- ./section__steps-icon -->
      
    </div>

  </section><!-- section__currentStep -->
<script type="text/javascript">
/* Delta Business Ventures / Health Clicks Native */
// Obtener la URL actual
var currentUrl = new URL(window.location.href);

// Obtener los parámetros de la URL
var urlParams = new URLSearchParams(currentUrl.search);

// Obtener los valores de los parámetros
var age = urlParams.get('age');
var householdSize = urlParams.get('household_size');
var householdIncome = urlParams.get('household_income');
var qualifyingLifeEvent = urlParams.get('qualifying_life_event');
var zipcode = urlParams.get('zip');

// Obtener los valores de la sesión si no se proporcionan por la URL
if (!age || !householdSize || !householdIncome || !qualifyingLifeEvent || !zipcode) {
  age = "<?php echo $_SESSION['info']['age']; ?>";
  householdSize = "<?php echo $_SESSION['info']['householdsize']; ?>";
  householdIncome = "<?php echo $_SESSION['info']['householdestimated']; ?>";
  qualifyingLifeEvent = "<?php echo $event; ?>";
  zipcode = "<?php echo isset($_SESSION['info']['zipcode']) ? $_SESSION['info']['zipcode'] : 'auto'; ?>";
}

// Crear el objeto MediaAlphaExchange con los valores obtenidos
var MediaAlphaExchange = {
  "data": {
    "zip": zipcode
  },
  "placement_id": "zTQP7iuWXwVYLoLOW4GeUZPmvgT_Ag",
  "sub_1": "test sub id",
  "type": "ad_unit",
  "version": 17
};

if (age) {
  MediaAlphaExchange.data.age = age;
}
if (householdSize) {
  MediaAlphaExchange.data.household_size = householdSize;
}
if (householdIncome) {
  MediaAlphaExchange.data.household_income = householdIncome;
}
if (qualifyingLifeEvent) {
  MediaAlphaExchange.data.qualifying_life_event = qualifyingLifeEvent;
} 

// Cargar MediaAlphaExchange
MediaAlphaExchange__load('mediaalpha_placeholder');

</script>
  <!-- section__progressbar -->
  <section class="section__progressbar padding-section">

    <div class="section__progressbar-box">
      <div class="section__progressbar-fill" style="width:100%"></div>
      <div class="section__progressbar-filled" style="width:100%"></div> 
    </div>
  </section><!-- ./section__progressbar -->

  <!-- section__thanks-->
  <section class="section__thanks padding-section">
    
    <!-- First Form -->
    <center>
      <div>
        <br/>
        <br/>
        <p><big><u>Based On Your Answers These Are Your Top Options</big></p>
      </div>
     <!--  These plans are significantly less expensive than COBRA with more coverage and offer better benefits. But your eligibility for these health plans is expiring.
     
  -->   </center>
  	<div id="mediaalpha_placeholder" data-text="View Plans"></div>
   <!--  <br/>
    <center>
      <div>
        <p>Call the Number Below to Enroll</p>
        <p>(only takes about 10 minutes)</p>
        <br/>
        <br/>
        <button class="btn btnForm getstarted btnPadding5" href="tel:8773080111">
        <i class="fa-sharp fa-solid fa-phone"></i>  
        <a href="tel:8773080111">
        877-308-0111</a></button>
      </div>
    </center>
    <br/>
    <br/>
    <center>
      <div class="time">
        <span class="dot"></span> -->
        <!-- <div id="wait-time">Current wait time &gt; 30 seconds</div> -->
     <!--    <div >Current wait time &lt; 30 seconds</div>
      </div>
    </center>
    <br/>
    <br/> -->

   <!--  <div class="section__thanks-features">
      <div class="section__thanks-f">
        <p>• $0 Primary Care Visits</p>
        <p>• $0 Virtual Urgent Care</p>
        <p>• $3 Prescription Drug Costs</p>
        <p>• Pre-existing conditions accepted</p>

      </div> -->
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
  </section><!-- section__thanks -->

  <!-- Footer -->
  <?php include 'layout/footer.php';?>
  <!-- Footer -->
</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script>
<script>
    let seconds = 30;
    let timer = setInterval(() => {
      seconds--;
      document.getElementById("wait-time").textContent = `Current wait time > (${seconds}) seconds`;

      if (seconds <= 0) {
        clearInterval(timer);
        document.getElementById("wait-time").textContent = `Current wait time > (0) seconds`;
      }
    }, 1000);
    </script>
</html>
