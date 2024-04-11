<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Fahrenheit to Celsius" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Niko" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="./faviconf/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./faviconf/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./faviconf/favicon-16x16.png" />
    <link rel="manifest" href="./faviconf/site.webmanifest" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Fahrenheit to Celsius</title>
  </head>
  <body>
    <!-- php echo to print the html to the page, displays title and subheading -->
    <?php 
      echo "<h1>Fahrenheit to Celsius</h1>";
    ?>
    <img src="./images/formula.png" alt="formula"> <br>
    <?php
      echo "<h3>This program will calculate degrees fahrenheit to celsius with numbers you input here.</h3>";
    ?>
    <!-- form to get degrees fahrenheit from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="f">Degrees Fahrenheit: </label>
      <input type="text" id="f" step="any" placeholder="Degrees Fahrenheit" name="f"><br><br>
      <input type="submit" value="Calculate">
    </form>

      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			

      </iframe>

    <br>
  </body>
</html>