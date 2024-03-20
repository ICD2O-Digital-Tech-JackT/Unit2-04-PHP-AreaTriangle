<!DOCTYPE html>
<html>
  <head>
    <title>Calculating the area of a triangle in php</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
  </head>
  <body>
    <?php
      echo "<h1>Calculating the area of a triangle in php</h1>";
      echo "<br>";
      echo "<p>The Base of the triangle is equal to 7 cm, and the Height is equal to 5 cm</p>";
    ?>
    <form action="./results.php" method="post" target="results">
      <label for=lblBase">Base (cm):</label>
      <input type="number" id="base" placeholder="Enter the base (mm)" name="base"><br><br>
      <label for="lblHeight">Height (cm):</label>
      <input type="number" id="height" placeholder="Enter the height (mm)" name="height"><br><br>
      <input type="submit" value="Calculate Area">
    </form>
    <?php
    echo "<br>"
    ?>
      <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			
        The area of the triangle is  " + $area + cm<sup>2</sup>
      </iframe>
  </body>
</html>
