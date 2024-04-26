<?php 
// Start session 
session_start();
$message =''; 

$json_string = file_get_contents('assets/json/USCities.json');
$data = json_decode($json_string);

function validateZipCode($zipcode, $data) {
   foreach ($data as $object) {
    if ($object->zip_code == $zipcode) {
      // Decode the JSON response and extract the state abbreviation
      $data = json_decode($response, true);
      $state_abbr = strtolower($object->state);
      $_SESSION['info']['zipcode'] = $zipcode;
      $_SESSION['info']['state'] = $state_abbr;
      $_SESSION['info']['next'] = $_POST['next'];
    }
  }
}
 if (isset($_GET['zip'], $_GET['age'], $_GET['household_size'],$_GET['household_income'])) {
     
     $_SESSION['info']['age'] = $_GET['age'];
     $_SESSION['info']['householdsize'] = $_GET['household_size'];
     $_SESSION['info']['householdestimated'] = $_GET['household_income'];
      validateZipCode($_GET['zip'], $data);
        # header("Location: step-2.php");
}

if (isset($_POST['next'], $_POST['zipcode'])) {
  $zipcode = $_POST['zipcode'];

  //if (validateZipCode($zipcode, $data)) {
    header("Location: step-2.php?age=" . $_GET['age'] . "&household_size=" . $_GET['household_income'] . "&household_income=" . $_GET['household_income'] ."");

   // exit();
 // } else {
   // $message = "Error: ZIP code not found.";
 // }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="assets/css/style.css">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Font Family -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>USAHealthMarketplace.org</title>

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
  <!-- End Google Tag Manager --><!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5KKF2C3');</script>
  <!-- End Google Tag Manager -->
<script>
      function openPopUp() {
  var url = "step-2.php";
  var width = screen.width; 
  var height = screen.height; 

  var left = (screen.width - width) / 2;
  var top = (screen.height - height) / 2;

  var options = "width=" + width + ",height=" + height + ",left=" + left + ",top=" + top;
  window.open(url, "_blank", options);
  window.location.href = "/health-listings.php";
}

document.addEventListener("DOMContentLoaded", function() {
  var getStartedButton = document.getElementById("getStartedButton");

  if (getStartedButton) {
    getStartedButton.addEventListener("click", function(event) {
      event.preventDefault();
      openPopUp();
    });
  }
});
</script>

</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KKF2C3"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

<!-- Navbar -->
<?php include 'layout/navbar.php';?>
<!-- Navbar -->

  <!-- Section Hero -->
  <section class="section__hero">
    
    <div class="section__hero-empty"></div><!-- section__hero-empty -->

    <!-- section__hero-textbox -->
    <div class="section__hero-textbox">

      <!-- section__hero-textbox-content -->
      <div class="section__hero-textbox-content">

  
          <!-- <h4>
            <u>Get Up To $164 Back Per Month</u> <br/><br/>
            <!-- ✔ Health Insurance for <strong>$0/Month</strong><br>
            ✔ <strong>$500</strong> in Health Credits <br>
            ✔ Premium Tax Credit from the IRS
          </h4> -->


        <!-- First Form -->
        <center>
    
          <form method="POST" class="section__hero-form">
            <p><big><strong>Answer 3 simple questions to see if you qualify for extra benefits in a new plan</strong></big></p>
            <input required type="text" pattern="[0-9]*" style="width: 100%;" id="zipcode" placeholder="Zip Code" name="zipcode" class="my-2">
            <a class="btn btnForm getstarted" name="next" id ="getStartedButton" href="">Get Started</a>
            <!-- <center><p style="color: white;">Get Up to $164 Back Each Month</p></center> -->
          </form>
          <div>
            <p class="section__hero-textbox-text">
                <?php echo $message; ?>
             </p>
          </div>
        </center> <!-- ./First Form -->
       
       <!-- <center> <div class="section__hero-features">
          <p>• <strong>$0/Month</strong></p>
          <p>• <strong>$500</strong> in Health Credits</p>
          <p>• Premium Tax Credit from the IRS</p>
        </div></center> -->
        
      </div> <!-- ./section__hero-textbox-content -->
    </div> <!-- ./section__hero-textbox -->

    <div class="section__hero-empty-bottom"></div><!-- section__hero-empty -->
   
  </section>

  <!-- Texbox Banner -->
 <!--  <section class="section-textbanner">
    <p>Affordable Care Act (Obamacare) Health Insurance Plans</p>
  </section> --> <!-- ./Texbox Banner -->
  <!-- ./Section Hero -->

  <!-- Section Steps -->
  <section class="section__steps padding-section">

     <!--<div class="section__steps-description"> --> <!-- Steps description -->
      <!-- <center><p class="section__steps-description-text">Answer 3 simple questions to see if you qualify for extra Medicare benefits in a new plan</p></center> -->
      <!--</div> --> <!-- ./Steps description -->

    <div class="section__steps-box">

      <!-- section__steps-icon -->
      <div class="section__steps-icon">
        <center><span>1</span></center>
        <center><p>Zip Code</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__steps-icon">
        <center><span>2</span></center>
        <center><p>Age</p></center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__steps-icon">
        <center><span>3</span></center>
        <center><p>Health Insurance Options</p></center>
      </div> <!-- ./section__steps-icon -->
      
      <!-- section__steps-icon 
      <div class="section__steps-icon">
        <center><span>4</span></center>
        <center><p>Household Income</p></center>
      </div> ./section__steps-icon -->
      
    </div>

  </section><!-- ./Section Steps -->

  <!-- Footer -->
  <?php include 'layout/footer-home.php';?>
  <!-- Footer -->
  

</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script>

<!-- Tag para registrar el click -->
<script>
  gtag('event', 'page_view', { 'event_category': 'RegisterForm', 'event_label': 'View', 'value':'Step 1 - Homepage' });
</script>
</html>
