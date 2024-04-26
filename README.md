

# USA Health Marketplace

USA Health Marketplace.org was created to inform US citizens of their health insurance options. Our goal is to provide a tool and a resource to determine your availability for health insurance plans without asking or storing any personal information.

[usahealthmarketplace.org](https://usahealthmarketplace.org/)


- Click in **See if i Qualify** https://usahealthmarketplace.org/step-2.php

- Age less than 64 https://usahealthmarketplace.org/step-3.php?age=63household_size=&household_income=

- Age more than 66 https://seniors.usahealthmarketplace.org

- Household size 1 https://usahealthmarketplace.org/step-4.php?age=63household_size=1&household_income=

- lncome 10.000 https://usahealthmarketplace.org/step-5.php?age=63&household_size=1&household_income=10000

- lncome 50.000 https://usahealthmarketplace.org/step-5.php?age=&household_size=&household_income=50000

- Life events https://usahealthmarketplace.org/thanks.php?age=&household_size=&household_income=&qualifying_life_event=other


- Life events https://usahealthmarketplace.org/thanks.php?age=&household_size=&household_income=&qualifying_life_event=other


- Health plan listings https://usahealthmarketplace.org/health-listings.php

- Health plan listings 2 https://usahealthmarketplace.org/health-listings-2.php
## Project Structure


#### File structure

- `/public_html`:The project root contains the main files of the website, including PHP scripts, HTML pages, and other files related to the site's functionality.

- `/public_html/assets`: This directory contains static files and resources used on the website, such as images, style sheets, and scripts.

- `/public_html/layout`: Here are the design and template files used to build the website's user interface.

- `/public_html/error_log`: This file logs website errors and issues for debugging purposes.

- `/public_html/package.json`: `Npm` configuration file that could contain dependencies and scripts related to the development of the project.

- `/public_html/README.md`: This file you are reading, which provides information about the structure of the project.

#### Website Pages 
The project includes several web pages, each of which performs a specific function on the site. Here are some of the most important pages:

- `/_health-listings.php`
- `/_medicare-listings.php`
- `/affordable-care-act-plans.php`
- `/contact-us.php`
- `/health-exchange-non-aca.php`
- `/health-listings-2.php`
- `/health-listings.php`
- `/index.php`
- `/medicaid.php`
- `/medicare-listings.php`
- `/medicare.php`
- `/privacy-policy.php`
- `/referral.php`
- `/rejected.php`
- `/step-2.php`
- `/step-3.php`
- `/step-4.php`
- `/step-5.php`
- `/thanks.php`
- `/utils.php`
- `/website-terms.php`

Each page serves a specific function on the site and can have its own content and logic.

#### Additional notes

Be sure to keep this directory structure organized and follow development best practices to ensure the efficiency and maintainability of your project.
## Q. What is PHP?
PHP or Hypertext Pre-processor is a general purpose programming language written in C and used by developers to create dynamic web applications. PHP Supports both Procedural Programming and Object Oriented Programming.

PHP files generally have extension .php and PHP code is generally written between <?php ... ?> tags. A hello world program is:

```bash
<?php
    echo "hello world";
?>
```

## Installation and Execution

Follow these steps to set up and run this project in a local environment using XAMPP or a similar environment with PHP. This will allow you to access the project via the URL
`localhost:8080`.

### Previous requirements

Make sure you have the following prerequisites installed:

- **XAMPP**: Download and install XAMPP from [the official website](https://www.apachefriends.org/index.html).


**Move the Project**:

Copy or move the cloned project folder to the htdocs folder of your XAMPP installation. The location of htdocs may vary depending on your system and configuration. For example, on Windows, it could be in ```bash C:\xampp\htdocs```.

**Start XAMPP:**

Start XAMPP and make sure Apache and MySQL services are running. You can do this from the XAMPP interface or using commands depending on your operating system.

**Access the Project:**

Open your web browser and access the project using the URL http://localhost:8080/project-name. 

Be sure to replace project-name with the name of the project folder you placed in htdocs.

**Example: http://localhost:8080/my-project**
 

#### **Additional notes**
Make sure your web server is configured correctly to listen on port 8080 or whatever port you prefer. You can adjust the settings in XAMPP settings.

If your project requires a database, be sure to configure and load the database as needed.
Be sure to follow security best practices when setting up your on-premises environment.
## API Reference

### utils.php


#### JavaScript for Opening a Popup Window

This JavaScript code allows you to open a popup window when clicking a button with the ID `"getStartedButton."`
```
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
```

This code is commonly used to open a new popup window when clicking a button or link. Ensure that the HTML element with the ID "getStartedButton" is present on the page where you want this functionality to work. When the button is clicked, it will execute the openPopUp() function, which opens a new window with the URL `"step-2.php"` and then redirects the current page to `"/health-listings.php."`


#### `getFpl` function

This function retrieves the poverty line for a given year, state, and household size from an API.

- **Parameters**:
   - `$year`: The year for which you want to obtain the Federal Poverty Level (FPL) data.
   - `$state`: The two-letter abbreviation of the state in the United States for which you want to obtain poverty guidelines (for example, "CA" for California or "NY" for New York).
   - `$householdSize`: The number of people in the household for which the Federal Poverty Level (FPL) is being calculated.

- **Return**: The poverty threshold for the specified year, state, and household size.



#### `checkIncomeStepFour` function

This feature checks a person's income and household size to determine their eligibility for government health programs or other health lists.

- **Parameters**:
   - `$householdSize`: The number of people in the household.
   - `$income`: The household income.
   - `$state`: The state where the home is located. It is used to determine the Federal Poverty Level (FPL) for that state.
   - `$parameter`: An additional parameter that can be passed to the target page.

- **Comments**: The function performs the following steps:
   1. Gets the FPL value for the given household size and state for the year 2023.
   2. Calculate the percentage of revenue compared to FPL for 2023.
   3. Redirect the user to the corresponding page based on the eligibility criteria. (Redirect lines are currently commented out.)



#### `checkIncomeStepFive` function

This function checks if "None of these options apply" is in the life events array and redirects to a specific page based on the result.

- **Parameters**:
   - `$householdSize`: The number of people in the household.
   - `$income`: The total household income, used to determine eligibility for certain programs or services.
   - `$lifeEvents`: An array of life events that may affect a person's eligibility for health care subsidies or programs.
   - `$state`: (State is not used in this function and appears to be unreferenced in the code.)
   - `$parameter`: An additional parameter that can be passed to the target page.

- **Comments**: The function performs a check based on whether "None of these options apply" is in the life events array and redirects to the corresponding page based on the result. (Redirect lines are currently commented out.)





## MediaAlpha Exchange script

- ***Medicare listings***
```bash
<script type="text/javascript">
/* Delta Business Ventures / Medicare Clicks - Native */

// The code below defines an object called "MediaAlphaExchange". This object appears to be related to advertising or obtaining user information.
// var MediaAlphaExchange = {
// "placement_id": "Gf5ewOuJdXKjXnBAOCyKhXnd26neJg",
// "version": "17",
//     "data": {
// "zip": <?php echo $_SESSION['info']['zipcode']?>
// }
// };

// The code is currently commented out, which means it is disabled and will not run on the website. It appears that the "MediaAlphaExchange" object was intended to collect information, possibly the user's zip code, and could be related to advertising or data analysis.
</script>
```

- ***Health listings***
```bash
<script type="text/javascript">
/* Delta Business Ventures / Health Clicks Native */

// Extract parameters from the URL query string
var currentUrl = new URL(window.location.href);
var urlParams = new URLSearchParams(currentUrl.search);

var age = urlParams.get('age');
var householdSize = urlParams.get('household_size');
var householdIncome = urlParams.get('household_income');
var qualifyingLifeEvent = urlParams.get('qualifying_life_event');
var zipcode = urlParams.get('zip');

// Check if any of the required parameters are missing in the URL
if (!age || !householdSize || !householdIncome || !qualifyingLifeEvent || !zipcode) {
  // If any parameter is missing, fallback to values from the PHP session
  age = "<?php echo $_SESSION['info']['age']; ?>";
  householdSize = "<?php echo $_SESSION['info']['householdsize']; ?>";
  householdIncome = "<?php echo $_SESSION['info']['householdestimated']; ?>";
  qualifyingLifeEvent = "<?php echo $event; ?>";
  zipcode = "<?php echo isset($_SESSION['info']['zipcode']) ? $_SESSION['info']['zipcode'] : 'auto'; ?>";
}

// Define the MediaAlphaExchange object with data for the ad exchange
var MediaAlphaExchange = {
  "data": {
    "zip": zipcode
  },
  "placement_id": "zTQP7iuWXwVYLoLOW4GeUZPmvgT_Ag",
  "sub_1": "test sub id",
  "type": "ad_unit",
  "version": 17
};

// Set additional data fields if the corresponding parameters are available
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

// Load the MediaAlphaExchange ad unit
MediaAlphaExchange__load('mediaalpha_placeholder');

</script>

```

- **URL Parameters Extraction:** It starts by obtaining the current URL of the browser and analyzing the query parameters (query string) using the URL object and URLSearchParams. Query parameters are data that can be passed via the URL, such as ?age=30&household_size=4&zip=12345, and this code is responsible for extracting it.

- **Variable Assignments:** The extracted parameter values are then assigned to variables such as age, householdSize, householdIncome, qualifyingLifeEvent, and zipcode. These values will be used later in the code.

- **Parameter Validation:** A check is performed to ensure that all necessary parameters (age, householdSize, householdIncome, qualifyingLifeEvent, and zipcode) are present. If any of these parameters are missing from the URL (that is, null or undefined), the code uses fallback values obtained from a PHP session to populate those variables.

- **MediaAlphaExchange Object:** An object called MediaAlphaExchange is defined, which appears to be related to advertising or exchanging data for ads. This object contains fields such as data, placement_id, sub_1, type, and version. The data property contains relevant information, such as zip code, which is used in ad settings.

- **Conditional Data Assignment:** Next, the values of the variables age, householdSize, householdIncome, and qualifyingLifeEvent are checked to see if they have content (they are not null or undefined). If so, those values are assigned to the MediaAlphaExchange object in the corresponding field within data.

- **MediaAlphaExchange Loading:** Finally, the code calls a MediaAlphaExchange__load('mediaalpha_placeholder') function to load an ad or content related to MediaAlphaExchange. The 'mediaalpha_placeholder' is probably an identifier of some element on the web page where the ad should load.

**Note:**
It is important to always define the data zip code in autodata": ```{ "zip": zipcode }```,


## health-listings-2.php
```
<script>
	var matchingConfiguration = {
		"src": "",
		"zipcode": "",
		"statecode": "",
		"var1": "QA.Test",
		"var2": "subid 2",
		"var3": "subid 3",
		"trn_id": "transactionId",
		"leadid": "",
		"coveragetype": "Medicare",
		"householdsize": "4",
		"age": "38",
		"creditrating": "Excellent",
		"currentlyinsured": "1",
		"education": "Bachelor",
		"gender": "M",
		"homeowner": "1",
		"married": "0",
		"military": "1",
		"occupation": "Professor",
		"medicalcondition": "0",
		"height": "65",
		"weight": "170",
		"tobacco": "0",
		"session_ref": "referring url of user's session",
		"lp_url": "",
		"ext_click_id": ""
	};
	//the widget will be loaded into a div with id="qsWidgetContainer".  
	sh.initialize(matchingConfiguration, "qsWidgetContainer");
</script>

```

-  A JavaScript object named matchingConfiguration is defined. This object contains a series of properties and key-value pairs that seem to be configuration parameters for the widget or component to be initialized later in the code. Each property has an associated value, such as ZIP code, state, age, gender, occupation, and more. These values may be parameters that the widget needs to function correctly or to perform certain actions.

- It is mentioned that the widget will be loaded into an HTML container with id="qsWidgetContainer". This means that the widget will be embedded in an element on the web page with that specific ID.

- The function `sh.initialize(matchingConfiguration, "qsWidgetContainer")`; is used to initialize the widget. It appears that this function expects two arguments: the matchingConfiguration object containing the widget's configuration and the ID of the HTML container where the widget will be loaded `("qsWidgetContainer" in this case)`.

**Note:**  

In summary, the code sets up a matchingConfiguration configuration object with various parameters and then initializes a widget on the web page using that configuration. The widget is likely to be loaded into a container with the ID `"qsWidgetContainer."` The specific details of the widget and its functionality depend on how it's implemented on the website and its intended purpose.

It is important to always define the data zip code in autodata": ```{ "zip": zipcode }```,


## License

[© 2023 USAHealthMarketplace.org](https://health.godare.me/privacy-policy.php)

