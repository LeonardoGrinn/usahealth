<?php 
// Start session 
session_start();

if (isset($_POST['next'])) {
  // Create a new session variable any input inside key and values from POST array.
  foreach($_POST as $key => $value) {
    $_SESSION['info'][$key] = $value;
  } 

  //Remove Next Key 

  $keys = array_keys($_SESSION['info']);
  
  if (in_array('next', $keys)) {
    unset($_SESSION['info']['next']);
  }

  //Redirect to Step 2 Page 
  header("Location: step-2.php");

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

   <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5KKF2C3');</script>
	<!-- End Google Tag Manager -->

  <title>Website Terms</title>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KKF2C3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Navbar -->
<?php include 'layout/navbar.php';?>
<!-- Navbar -->



  <!-- Section Steps -->
  <section class="section__legal padding-section">

  <center>
    <h1>
    Website Terms Link
    </h1>
  </center>

  <p>
  This document outlines the terms of service for using our website. By using our website, you agree to be bound by these terms.
  <br/><br/>
  1.	Acceptance of Terms: By using our website, you agree to these terms of service. If you do not agree to these terms, you 
  should not use our website.
  <br/><br/>
  2.	Use of the Website: Our website is intended for use by individuals who are at least 18 years old. You may use our website 
  for lawful purposes only. You may not use our website for any illegal or unauthorized purpose.
  <br/><br/>
  3.	Intellectual Property: All content on our website, including but not limited to text, graphics, logos, images, and software, 
  is the property of our website or our content suppliers and is protected by U.S. and international copyright laws. You may not copy, 
  reproduce, distribute, or display any content on our website without our express written permission.
  <br/><br/>
  4.	Disclaimer of Warranties: Our website is provided on an "as is" basis without warranties of any kind, either express or implied, 
  including but not limited to warranties of merchantability, fitness for a particular purpose, non-infringement, or any other warranties 
  that may arise from course of dealing or usage of trade.
  <br/><br/>
  5.	Limitaation of Liability: Our website will not be liable for any damages of any kind arising from the use of our website, including but not 
  limited to direct, indirect, incidental, punitive, and consequential damages.
  <br/><br/>
  6.	Third-Party Websites: Our website may contain links to third-party websites. We are not responsible for the content or privacy 
  practices of those websites. We encourage you to review the terms and privacy policies of those websites before using them.
  <br/><br/>
  7.	Modifications to Terms of Service: We may modify these terms of service at any time without notice. By continuing to use our website after 
  such modifications are made, you agree to be bound by the modified terms.
  <br/><br/>
  8.	Governing Law: These terms of service shall be governed by and construed in accordance with the laws of the United States and the State of 
  Kansas. Any dispute arising under or relating to these terms of service shall be resolved exclusively by the state and federal courts located in Kansas.
  <br/><br/>
  9.	Entire Agreement: These terms of service constitute the entire agreement between you and our website and govern your use of our website. 
  If any provision of these terms of service is found to be invalid or unenforceable, the remaining provisions shall remain in full force and effect.
  <br/><br/>
  

  </p>

  </section><!-- ./Section Steps -->

  <!-- Footer -->
  <?php include 'layout/footer.php';?>
  <!-- Footer -->
  

</body>

<!-- NavBar Script -->
<script src="assets/js/navbar.js"></script>

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script>

</html>
