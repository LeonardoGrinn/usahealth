<?php 
include 'utils.php';
// Start Session
session_start();
if(isset($_POST['next'], $_POST['anualhousehold'])) {
  $_SESSION['info']['anualhousehold']=  $_POST['anualhousehold'];
  $_SESSION['info']['next']= $_POST['next'];

  $householdSize=  $_SESSION['info']["householdsize"];
  $income=  $_SESSION['info']["householdestimated"];
  $lifeEvents =   $_POST['anualhousehold'];
  $state =  $_SESSION['info']["state"];
  
$event ='';
   if (in_array("None of these apply", $_SESSION['info']['anualhousehold'])) {
    $event ='No';
    } else if (!in_array("None of these apply", $_SESSION['info']['anualhousehold']))  {
     $event ='other'; 
    }

        
$parameter = "?age=" . $_SESSION['info']['age'] . "&household_size=" . $_SESSION['info']['householdsize'] . "&household_income=" . $_SESSION['info']['householdestimated']. "&qualifying_life_event=" . $event;

  echo checkIncomeStepfive($householdSize, $income, $lifeEvents, $state, $parameter);
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

  <title>Step 5 | Life Events</title>

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
      <div class="section__stepsbar-icon">
        <center><span class="current-step"><img src="assets/img/step-icons/users-solid.svg" alt="house-hold-size"></img></span></center>
        <center><p>Household Size</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span><img src="assets/img/step-icons/money-bill-trend-up-solid.svg" alt="income"></img></span></center>
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
      <div class="section__progressbar-fill" style="width:80%"></div>
      <div class="section__progressbar-filled" style="width:60%"></div> 
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
        <label>Do any of the following life events apply to you?</label> <br/><br/>
        <div class="step-form__checkboxes">
            <div class="btn btnForm stepCheckbox" style="display: flex;">
           <div style="padding-right: 10px;">
                <input type="checkbox" id="event1" name="anualhousehold[]" value="Losing or lost health coverage">
           </div>
              <label for="event1">Losing or lost health coverage</label>
            </div>

            <div class="btn btnForm stepCheckbox">
              <input type="checkbox" id="event2" name="anualhousehold[]" value="Changes with my family">
              <label for="event2"> Changes with my family</label><br>
            </div>

            <div class="btn btnForm stepCheckbox">
              <input type="checkbox" id="event3" name="anualhousehold[]" value="Started or left a job">
              <label for="event3"> Started or left a job</label><br><br>
            </div>
            
            <div class="btn btnForm stepCheckbox">
              <input type="checkbox" id="event4" name="anualhousehold[]" value="Move to a new state">
              <label for="event4"> Move to a new state</label><br><br>
            </div>

            <div class="btn btnForm stepCheckbox">
              <input type="checkbox" id="event6" name="anualhousehold[]" value="None of these apply">
              <label for="event6"> None of these apply</label><br><br>
            </div>
            
            <!-- Form buttons -->
            <div class="mt-2 mb-5 pt-2">
             <!--  <a id="btBack" class="btn btnLink btn-red pl-pr" href="step-4.php">Previous</a> -->
              <input id="btNext" class="btn btnForm" name="next" value="See if I Qualify" type="submit">
            </div>
        </div>
        <!-- ./Form buttons -->
      </form>
    </center> <!-- ./First Form -->
   
  </section><!-- section__currentStep -->

  <!-- Footer -->
  <?php include 'layout/footer.php';?>
  <!-- Footer -->

</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Font Awesome -->
<!-- <script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Tag para registrar el click -->
<script>
document.getElementById("btBack").addEventListener("click", gtag_Back);
document.getElementById("btNext").addEventListener("click", gtag_Next);

function gtag_Next() {
  gtag('event', 'click', { 'event_category': 'RegisterForm', 'event_label': 'Next', 'value':'Step 5 - Life Events' });
}

function gtag_Back() {
  gtag('event', 'click', { 'event_category': 'RegisterForm', 'event_label': 'Back', 'value':'Step 5 - Life Events' });
}
</script>

<script>
$(document).ready(function() {
  $("#btNext").click(function() {
    var checked = $("input[name='anualhousehold[]']:checked").length;
    if (checked == 0) {
      Swal.fire(
        'Error!',
        'Please select a life event, or if none apply, select ’None of these Apply.',
        'error'
      )
      return false;
    }
  });
});
</script>

</html>
