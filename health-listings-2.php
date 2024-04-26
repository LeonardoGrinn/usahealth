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
	<script>(function (w, d, s, l, i) {
			w[l] = w[l] || []; w[l].push({
				'gtm.start':
					new Date().getTime(), event: 'gtm.js'
			}); var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
					'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5KKF2C3');</script>
	<!-- End Google Tag Manager -->
	<!-- place this once in the document head -->
	<script type="text/javascript" src="//www.nextinsure.com/listingdisplay/loader/sh"></script>


</head>

<body>
    	<!-- Navbar -->
				<?php include 'layout/navbar.php'; ?>
				<!-- Navbar -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KKF2C3" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<br/>
<br/>
<br/><br/><br/>
<br/><br/>

	<div class="container" >
		<div class="row">
		    	<!-- lead or nolead -->
	<div id="mode" data-id="lead"></div>
	<div id="qsWidgetContainer"></div>
		

		

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
	var matchingConfiguration = {
		"src": "692383",
		"zipcode": "auto",
		"statecode": "auto",
		"trn_id": "transactionId",
		"leadid": "",
		"coveragetype": "Exchanges",
		"householdsize": "4",
		"age": "38",
		"currentlyinsured": "1",
		"lp_url": "",
		"ext_click_id": ""
	};
	//the widget will be loaded into a div with id="qsWidgetContainer".  
	sh.initialize(matchingConfiguration, "qsWidgetContainer");
</script>
	<script>
	$(document).ready(function () {
		if ($(".shmktpl-button-text").length) {
			$(".shmktpl-button-text").each(function () {
				$(this).text("Lean More");
			});
		} else {
			setTimeout(function () {
				$(".shmktpl-button-text").each(function () {
					$(this).text("Lean More");
				});
			}, 1000);
		}
	});
</script>
</html>