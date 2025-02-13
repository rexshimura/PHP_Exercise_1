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
            $weather_conditions = [
                "rain" => "rain",
                "sunshine" => "sunshine",
                "clouds" => "clouds",
                "hail" => "hail",
                "sleet" => "sleet",
                "snow" => "snow",
                "wind" => "wind"
            ];
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

