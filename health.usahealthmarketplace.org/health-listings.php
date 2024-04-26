<?php 
// Start Session
session_start();
 $event = '';

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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>USAHealthmMarketplace.org</title>
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">


	<link rel="stylesheet" href="assets/css/style.css">

	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script src="assets/demo/geoip2.js"></script>
	<script src="assets/demo/jquery.mask.min.js"></script>
	<script src="assets/demo/front.js"></script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5KKF2C3');</script>
	<!-- End Google Tag Manager -->
	
	<script src="//insurance.mediaalpha.com/js/serve.js"></script>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KKF2C3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript">
/* Delta Business Ventures / Health Clicks Native */
var currentUrl = new URL(window.location.href);
var urlParams = new URLSearchParams(currentUrl.search);

var age = urlParams.get('age');
var householdSize = urlParams.get('household_size');
var householdIncome = urlParams.get('household_income');
var qualifyingLifeEvent = urlParams.get('qualifying_life_event');
var zipcode = urlParams.get('zip');

if (!age || !householdSize || !householdIncome || !qualifyingLifeEvent || !zipcode) {
  age = "<?php echo $_SESSION['info']['age']; ?>";
  householdSize = "<?php echo $_SESSION['info']['householdsize']; ?>";
  householdIncome = "<?php echo $_SESSION['info']['householdestimated']; ?>";
  qualifyingLifeEvent = "<?php echo $event; ?>";
  zipcode = "<?php echo isset($_SESSION['info']['zipcode']) ? $_SESSION['info']['zipcode'] : 'auto'; ?>";
}

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

<!-- Navbar -->
<?php include 'layout/navbar.php';?>
<!-- Navbar -->


    <div class="mt-8 mb-5 text-center">
        <h3 style="font-weight: 100;line-height: 1.5;">
            The Below Providers Offer <b>$0 Health Insurance, dental and vision</b> When Activating up to <b>$6,300 in Government Health Subsidies. </b> <br/>
            Plus, You May Also Earn Up to <b>$500 on a Rewards Card</b> , with Participating Providers, to <b>Help Pay for Daily Essentials.</b>
        </h3>
    </div>
	<div id="mediaalpha_placeholder" data-text="View Plans"></div>
	<!-- lead or nolead -->
	<div id="mode" data-id="lead"></div>

	<div class="container section__listings" id="medigapQuiz" style="display:none">
		<div class="row">
			<div class="col-12 col-xl-9 mx-auto">

				<!-- Navbar -->
				<!-- Navbar --> <!-- <form> -->

				<!--page four-->
				<div id="page-4" data-page="4" class="page hidden pt-4 section__box">

					<!-- Margin -->
					<br/><br/><br/><br/>
					<!-- Margin -->

					<center>
						<!-- <h2>
							For eligibility a qualifying life event is required. During open enrollment a qualifying life event is not necessary and 
							enrollment is open. ACA Open enrollment for this year is Nov.1st – Jan. 15th.
						</h2> -->
					</center>
					<!-- <center>
						<h1>We Found
							<span id="plansFound">Several</span>
							Health Plans That Match Your Healthcare Needs
						</h1>
					</center>

					<br/><br/>
					<div id="plans"></div>
					<div class="col-12 mt-4 mb-4">
						<center>
							<h2 style="margin:20px">Speak with a licensed Medicare specialist: <a href="tel:8557293240" style="text-decoration: none; color:inherit;"> <i class="fa-solid fa-phone-volume" style="transform: translateY(2.5px); margin-right: 7px;"></i>855-729-3240</a></a></h2>
						</center>
					</div> -->
				</div>
				<!-- <input id="leadid_token" name="universal_leadid" type="hidden" value="" />
				<input type="hidden" name="zipcode" id="zipcode">

				 -->

				<!-- </form> -->

			</div>
			<!--end quiz-->

	

		</div>
	</div>
	</div>
			<!-- Footer -->
			<?php include 'layout/footer.php'; ?>
			<!-- Footer -->
</body>

<!-- NavBar Script -->

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/6c23d26d8b.js" crossorigin="anonymous"></script>
<script>
      function openPopUp(urlClick) {
              var url = "https://usahealthmarketplace.org/health-listings-2.php";
  var width = screen.width; 
  var height = screen.height; 
  var left = (screen.width - width) / 2;
  var top = (screen.height - height) / 2;

  var options = "width=" + width + ",height=" + height + ",left=" + left + ",top=" + top;
  // window.open(url, "_blank", options);
  window.location.href =url;

}
 
$(document).ready(function() {
  if ($(".mav-partner__button").length) {
    $(".mav-partner__button").each(function() {
      $(this).text("Lean More");
    });
  } else {
    setTimeout(function() {
      $(".mav-partner__button").each(function() {
        $(this).text("Lean More");
      });
    }, 1000);
  }
  $(document).on("click", ".mav-partner .mav-partner__button", function(e) {
    e.preventDefault();
    openPopUp($(this).attr("data-cu"));
  }); 
});
</script>
</html>