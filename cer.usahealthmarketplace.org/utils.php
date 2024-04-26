<?php 

/**
 * This function retrieves the poverty threshold for a given year, state, and household size from an
 * API.
 * 
 * @param year The year for which you want to retrieve the Federal Poverty Level (FPL) data.
 * @param state The state parameter is a two-letter abbreviation for the state in the United States for
 * which you want to retrieve the poverty guidelines. For example, "CA" for California or "NY" for New
 * York.
 * @param householdSize The number of people in the household for which the Federal Poverty Level (FPL)
 * is being calculated.
 * 
 * @return the poverty threshold for a given year, state, and household size.
 */

function getFpl($year, $state, $householdSize) {
  $fplApiUrl = "https://aspe.hhs.gov/topics/poverty-economic-mobility/poverty-guidelines/api/$year/$state/$householdSize";
  $fplApiResponse = file_get_contents($fplApiUrl);
  $fplResponseData = json_decode($fplApiResponse, true);
  return $fplResponseData["data"]["poverty_threshold"];
}

/**
 * The function checks a person's income and household size to determine their eligibility for
 * government health programs or other health listings.
 * 
 * @param householdSize The number of people in the household.
 * @param income The income of the household.
 * @param state The state where the household is located. It is used to determine the Federal Poverty
 * Level (FPL) for that state.
 */

 function checkIncomeStepFour($householdSize, $income, $state, $parameter) {
    // Obtiene el valor de FPL para el tamaño del hogar y estado dados para 2023
    $fpl2023 = getFpl(2023, $state, $householdSize);
    // Calcula el porcentaje de ingresos en comparación con el FPL para 2023
    $incomePercent2023 = intval(($income / $fpl2023) * 100);
    // Redirige al usuario a la página correspondiente según los criterios de elegibilidad
   /*  if ($incomePercent2023 <= 138) {
        header("Location: medicaid.php");
        exit;
    }

    if ($incomePercent2023 >= 150 && $incomePercent2023 <= 400) {
        header("Location: step-5.php".$parameter);
        exit;
    }

    if ($incomePercent2023 > 400) {
        header("Location: health-exchange-non-aca.php".$parameter);
        exit;
    } */
    header("Location: step-5.php".$parameter);
   /*  header('Location: thanks.php'.$parameter); */
    exit;
}

/**
 * The function checks if "None of these apply" is in the array of life events and redirects to a
 * specific page based on the result.
 * 
 * @param householdSize The number of people in the household.
 * @param income The income parameter is a variable that represents the total income of a household. It
 * is used as a factor in determining eligibility for certain programs or services.
 * @param lifeEvents An array of life events that may affect a person's eligibility for healthcare
 * subsidies or programs. Examples of life events include losing a job, getting married, having a baby,
 * or moving to a new state.
 * @param state The state parameter is missing in the function. It is not being used or referenced in
 * the code.
 */
function checkIncomeStepfive($householdSize, $income, $lifeEvents, $state, $parameter) {
       /*  if (in_array("None of these apply", $lifeEvents)) {
            header('Location: health-listings.php'.$parameter);
            exit;
        } else { */
            header('Location: thanks.php'.$parameter);
            exit;
      /*   } */
}
