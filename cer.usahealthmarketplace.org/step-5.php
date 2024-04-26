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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>Step 5 | Life Events</title>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SNH79EYLLD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-SNH79EYLLD');
  </script>

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

</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KKF2C3" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Navbar -->
  <?php include 'layout/navbar.php';?>
  <!-- Navbar -->


  <section class="section__stepsbar padding-section">

    <div class="section__stepsbar-box">

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><img src="assets/img/step-icons/cake-candles-solid.svg" alt="age"></img></span></center>
        <center>
          <p>Age</p>
        </center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><img src="assets/img/step-icons/users-solid.svg" alt="house-hold-size"></img></span></center>
        <center>
          <p>Household Size</p>
        </center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><img src="assets/img/step-icons/money-bill-trend-up-solid.svg" alt="income"></img></span></center>
        <center>
          <p>Income</p>
        </center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon step-completed">
        <center><span><img src="assets/img/step-icons/flag-solid.svg" alt="life-events"></img></span></center>
        <center>
          <p>Life Events</p>
        </center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span class="current-step"><img src="assets/img/step-icons/id-card-solid.svg"
              alt="results"></img></span></center>
        <center>
          <p>Information</p>
        </center>
      </div> <!-- ./section__steps-icon -->

      <!-- section__steps-icon -->
      <div class="section__stepsbar-icon">
        <center><span><img src="assets/img/step-icons/square-poll-vertical-solid.svg" alt="results"></img></span>
        </center>
        <center>
          <p>Results</p>
        </center>
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
    <style>
      .grid-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 5px;
        margin: 0px;
        width: 60%;
      }

      .grid-item {
        padding: 5px;
        text-align: left;
        margin-bottom: 20px;


      }

      .grid-item input {
        text-align: left !important;
        width: 90% !important;
        font-size: 1rem !important;
        padding-left: 15px;
      }

      @media (max-width: 767px) {
        .grid-container {
          width: 100%;
          grid-template-columns: repeat(1, 1fr);
        }

        .section__step-form .grid-item input[type=text] {
          width: 90% !important;
        }
      }
    </style>
    <!-- First Form -->
    <center>
      <form class="section__step-form form__info" id="miFormulario">
        <div class="">
          <div class="row__form">
            <div class="">
              <label>First Name</label> <br />
              <input required type="text" placeholder="First Name" name="firstName"
                value="<?php echo $_GET['firstName']?>"> <br />
            </div>
            <div class="">
              <label>Last Name</label> <br />
              <input required type="text" placeholder="Last Name" name="lastName"
                value="<?php echo $_GET['lastName']?>"> <br />
            </div>
          </div>

          <div class="row__form">
            <div class="">
              <label>Phone Number</label> <br />
              <input type="text" id="phone" name="phone" placeholder="(123) 123-4567" maxlength="14" oninput="formatPhoneNumberInput(this)">
 
              <br />
            </div>
            <div class="">
              <label>Email</label> <br />
              <input required type="email" placeholder="Email" name="email" value="<?php echo $_GET['email']?>"> <br />
            </div>
          </div>

          <div class="row__form">
            <div class="">
              <label>Address</label> <br />
              <input required type="text" placeholder="Address" name="address" value="<?php echo $_GET['address']?>">
              <br />
            </div>
            <div class="">
              <label>Zip Code</label> <br />
              <input required type="text" placeholder="Zip Code" name="zip_code" value="<?php echo $_GET['zipCode']?>">
              <br />
            </div>
          </div>

          <div class="row__form">
            <div class="">
              <label>Age</label> <br />
              <input required type="text" placeholder="Age" name="age" value="<?php echo $_GET['age']?>"> <br />
            </div>
            <div class="">
              <label for="gender">Gender</label> <br />
            <select required name="gender" id="genderSelect">
                <option value="male" <?php echo ($_GET['gender'] === 'male') ? 'selected' : ''; ?>>Male</option>
                <option value="female" <?php echo ($_GET['gender'] === 'female') ? 'selected' : ''; ?>>Female</option>
                <option value="other" <?php echo ($_GET['gender'] === 'other') ? 'selected' : ''; ?>>Other</option>
            </select>
            <br />

            </div>
          </div>
        </div>
           <br />
              <br />
  <center>  
         <p style="color:red; display:none" id="messageError">  </p>
            </center>
        <!-- Form buttons -->
        <div class="mt-2 mb-5 pt-2">
          <!--  <a id="btBack" class="btn btnLink btn-red pl-pr" href="step-4.php">Previous</a> -->
          <center><input id="btNext" class="btn btnForm btnInfo" name="next" value="Send" type="button"></center>
        </div>
         <center>  
         <p style="font-size: .8rem;"> 
    By clicking the Send button on this website, you are providing express consent to be contacted via telephone or SMS,
including pre-recorded and autodialed calls or text messages, even if your phone number is on any national or state Do Not Call Registry. <br/>
This consent is not a condition of any purchase.     <br/>
      </p>
            </center>
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
  document.getElementById("btBack")?.addEventListener("click", gtag_Back);
  document.getElementById("btNext").addEventListener("click", gtag_Next);

  function gtag_Next() {
    gtag('event', 'click', { 'event_category': 'RegisterForm', 'event_label': 'Next', 'value': 'Step 5 - Life Events' });
  }

  function gtag_Back() {
    gtag('event', 'click', { 'event_category': 'RegisterForm', 'event_label': 'Back', 'value': 'Step 5 - Life Events' });
  }
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var phoneFromURL = '<?php echo isset($_GET["phone"]) ? $_GET["phone"] : ""; ?>';
 if(phoneFromURL){
         var formattedPhoneNumber = '';
           var phoneNumber =phoneFromURL
      for (var i = 0; i < phoneNumber.length && i < 10; i++) {
        if (i === 0) {
          formattedPhoneNumber += '(' + phoneNumber[i];
        } else if (i === 2) {
          formattedPhoneNumber += phoneNumber[i] + ') ';
        } else if (i === 6) {
          formattedPhoneNumber += '-' +phoneNumber[i];
        } else if (i === 10) {
          formattedPhoneNumber += '-' + phoneNumber[i];
        } else {
          formattedPhoneNumber += phoneNumber[i];
        }
      }
      
       document.getElementById('phone').value = formattedPhoneNumber;
 }
});

function formatPhoneNumberInput(input) {
  var phoneNumber = input.value.replace(/\D/g, '');

      // Aplica el formato (123) 123-4567
      var formattedPhoneNumber = '';
      for (var i = 0; i < phoneNumber.length && i < 10; i++) {
        if (i === 0) {
          formattedPhoneNumber += '(' + phoneNumber[i];
        } else if (i === 2) {
          formattedPhoneNumber += phoneNumber[i] + ') ';
        } else if (i === 6) {
          formattedPhoneNumber += '-' +phoneNumber[i];
        } else if (i === 10) {
          formattedPhoneNumber += '-' + phoneNumber[i];
        } else {
          formattedPhoneNumber += phoneNumber[i];
        }
      }

      // Actualiza el valor del campo de entrada con el formato aplicado
      input.value = formattedPhoneNumber;
    }


$(document).ready(function () {
  $("#btNext").click(function () {
    const url = 'https://phenotypemedia.leadportal.com/apiJSON.php';
    const apiKey = '785b0ec179730b042d7396d8a39b3bc93dff2ead8a2ee6f05e5b933a7f75549e';
    const src = 'USA_Health';
    var btNext = document.getElementById('btNext');
    btNext.value = 'Saving';
    document.getElementById('messageError').textContent = '';

    const datosDelFormulario = {};
    const inputs = $('#miFormulario').serializeArray();

    const formattedData = inputs.reduce((acc, field) => {
      const formattedName = field.name.replace(/_/g, ' ').replace(/(?:^\w|[A-Z]|\b\w|\s+)/g, (match) => match.toUpperCase());
      acc[formattedName] = field.value;
      return acc;
    }, {});

    // Obtener los valores de Sub_Id y Pub_Id desde PHP
    //var subId = <?php echo isset($_GET['Sub_Id']) ? $_GET['Sub_Id'] : 0; ?> || 0;
    // var pubId = <?php echo isset($_GET['Pub_Id']) ? $_GET['Pub_Id'] : 0; ?> || 0;
function generateUniqueSubId() {
  const userAgent = window.navigator.userAgent;
  const hash = hashCode(userAgent);
  const uniqueSubId = 'SUB' + hash;
  return uniqueSubId;
}

function hashCode(str) {
  let hash = 0;
  if (str.length === 0) {
    return hash;
  }
  for (let i = 0; i < str.length; i++) {
    const char = str.charCodeAt(i);
    hash = (hash << 5) - hash + char;
    hash = hash & hash;
  }
  return hash;
}
    const requestOptions = {
      method: 'POST',
      body: JSON.stringify({
        "Request": {
          "Mode": "full",
          "Key": apiKey,
          "API_Action": "pingPostLead",
          "TYPE": "33",
          "Zip": formattedData?.['Zip Code'] || "auto",
          "Address": formattedData?.Address,
          "Email": formattedData?.Email,
          "Primary_Phone": formattedData.Phone?.replace(/\D/g, ''),
          "First_Name": formattedData?.FirstName,
          "Last_Name": formattedData?.LastName,
          "Gender": formattedData?.Gender?.toUpperCase(),
          "DOB": "12\/23\/1980",
          "Household_Size": <?php echo isset($_GET['householdsize']) ? $_GET['householdsize'] : 0; ?>,
          "Estimated_Household_Income": <?php echo isset($_GET['householdestimated']) ? $_GET['householdestimated'] : 0; ?>,
          "Sub_Id":generateUniqueSubId(),
          "Pub_Id": 0,
          "SRC": src,
          "Landing_Page": "landing",
        }
      }),
    };

    fetch(url, requestOptions)
      .then(response => response.text())
      .then(data => {
        const parser = new DOMParser();
        const xmlDoc = parser.parseFromString(data, 'text/xml');

        const status = xmlDoc.querySelector('status')?.textContent;
        const error = xmlDoc.querySelector('error')?.textContent;

        if (status === 'Error') {
          document.getElementById('messageError').style.display = 'block'; 
          btNext.value = 'Send';
          document.getElementById('messageError').textContent = error;
          // Puedes manejar el error de la forma que desees
        } else if (xmlDoc.querySelector('lead_id')?.textContent) {
          document.getElementById('messageError').textContent = '';
          window.location.href = 'https://health.usahealthmarketplace.org/thanks.php';
        }
      })
      .catch(error => console.error('Fetch Error:', error));
  });
});
</script>

</html>