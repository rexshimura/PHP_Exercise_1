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
    <style>
        /* I want to make it look fresh so I added some css*/
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #f0f8ff, #87ceeb); 
        }
        div {
            max-width: 600px; 
            padding: 20px; 
            box-sizing: border-box; 
            background-color: #ffffff; 
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
            font-size: 1.8em;
        }
        p {
            font-size: 1.2em;
            line-height: 1.5;
        }
        /* I want to contain those colors in a box */
        .weather-box {
            display: inline-block;
            padding: 5px 10px;
            margin: 2px 5px;
            font-weight: bold;
            border-radius: 5px;
            color: #fff;
            transition: all 0.3s ease; /* Smooth transition for hover effects */
        }

        /* Assign colors to the weather boxes */
        .rain { background-color: #007bff; } 
        .sunshine { background-color: #ffc107; } 
        .clouds { background-color: #6c757d; } 
        .hail { background-color: #17a2b8; } 
        .sleet { background-color: #20c997; }
        .snow { background-color: #e9ecef; color: #212529; } 
        .wind { background-color: #28a745; } 

        /* Hover effect */
        .weather-box:hover {
            transform: scale(1.1); 
            filter: brightness(1.2);
        }
    </style>
</head>
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

