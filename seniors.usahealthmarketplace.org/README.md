# Health USA

## Documentation

This file contains PHP functions for retrieving poverty threshold data, checking income eligibility for government health programs, and redirecting users based on eligibility criteria and life events.
##
getFpl($year, $state, $householdSize)
This function retrieves the poverty threshold for a given year, state, and household size from an API.

```php
function getFpl($year, $state, $householdSize) {
  $fplApiUrl = "https://aspe.hhs.gov/topics/poverty-economic-mobility/poverty-guidelines/api/$year/$state/$householdSize";
  $fplApiResponse = file_get_contents($fplApiUrl);
  $fplResponseData = json_decode($fplApiResponse, true);
  return $fplResponseData["data"]["poverty_threshold"];
}
```

### Parameters
**year:** The year for which you want to retrieve the Federal Poverty Level (FPL) data.

**state:** The state parameter is a two-letter abbreviation for the state in the United States for which you want to retrieve the poverty guidelines. For example, "CA" for California or "NY" for New York.

**householdSize:** The number of people in the household for which the Federal Poverty Level (FPL) is being calculated.

Return Value
The poverty threshold for a given year, state, and household size.

##
**checkIncomeStepFour($householdSize, $income, $state)**
This function checks a person's income and household size to determine their eligibility for government health programs or other health listings.

### Parameters
**householdSize:** The number of people in the household.

**income:** The income of the household.

**state:** The state where the household is located. It is used to determine the Federal Poverty Level (FPL) for that state.

**Redirects**

- If the income percentage is less than or equal to 138% of the Federal Poverty Level (FPL) for 2023, the user is redirected to "medicaid.php".

- If the income percentage is between 150% and 400% of the Federal Poverty Level (FPL) for 2023, the user is redirected to "step-5.php".

- If the income percentage is greater than 400% of the Federal Poverty Level (FPL) for 2023, the user is redirected to "health-exchange-thanks.php".

- If none of the above conditions are met, the user is redirected to "thanks.php".

##
**checkIncomeStepfive($householdSize, $income, $lifeEvents, $state)**

- This function checks if "None of these apply" is in the array of life events and redirects to a specific page based on the result.

### Parameters
**householdSize:** The number of people in the household.

**income:** The total income of the household.

**lifeEvents:** An array of life events that may affect a person's eligibility for healthcare subsidies or programs. Examples of life events include losing a job, getting married, having a baby, or moving to a new state.

**state:** The state parameter is missing in the function. It is not being used or referenced in the code.
Redirects

- If "None of these apply" is found in the lifeEvents array, the user is redirected to "health-listings.php".

- If "None of these apply" is not found in the lifeEvents array, the user is redirected to "thanks.php".