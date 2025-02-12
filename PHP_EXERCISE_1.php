<!-- 
-------------------------------------------
INTEGRATIVE PROGRAMMING : PHP Exercise 1
TITLE: WEATHER CONDITIONS
-------------------------------------------
JOHN PAUL P. MAHILOM
BSIT II-B 
11/02/2025 
-------------------------------------------
INSTRUCTIONS:

Arrays allow you to assign multiple values to one variable. For this PHP exercise,
write an array variable of weather conditions with the following values: 
( rain, sunshine, clouds, hail, sleet, snow, wind. )

Using the array variable for all the
weather conditions, echo the following statement to the browser:

"We've seen all kinds of weather this month. At the beginning of the month, we had
snow and wind. Then came sunshine with a few clouds and some rain. At least we
didn't get any hail or sleet."

Don't forget to include a title for your page, both in the header and on the page itself.

-------------------------------------------
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 1: Weather Conditions</title>
</head>
<link rel="stylesheet" href="exercise_styles1.css">
<body>
    <div>
        <h1>PHP Exercise 1: Weather Conditions</h1>
        <?php
            // From Instructions: Write an array variable of weather conditions with the following values: ( rain, sunshine, clouds, hail, sleet, snow, wind. )
            // Define the array of weather conditions but I'll be doing it in Associative Array to Reference weather conditions by their key
            
            // key => value
            $weather_conditions = [
                "rain" => "rain",
                "sunshine" => "sunshine",
                "clouds" => "clouds",
                "hail" => "hail",
                "sleet" => "sleet",
                "snow" => "snow",
                "wind" => "wind"
            ];

            // Echo the statement where the array values are dynamically inserted with styling using the associative array keys
            echo "<p>We've seen all kinds of weather this month. 
                At the beginning of the month, we had 
                <span class='weather-box snow'>{$weather_conditions['snow']}</span> 
                and <span class='weather-box wind'>{$weather_conditions['wind']}</span>. 
                Then came <span class='weather-box sunshine'>{$weather_conditions['sunshine']}</span> 
                with a few <span class='weather-box clouds'>{$weather_conditions['clouds']}</span> 
                and some <span class='weather-box rain'>{$weather_conditions['rain']}</span>. 
                At least we didn't get any <span class='weather-box hail'>{$weather_conditions['hail']}</span> 
                or <span class='weather-box sleet'>{$weather_conditions['sleet']}</span>.
            </p>";
        ?>
    </div>
</body>
</html>

