<?
  include 'php/dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header>
      <nav class="navigation">
        <ul class="navbuttons">
          <li><a href="index.php">Home</a></li>
          <li><a href="radio.php">Radio</a></li>
          <li><a href="drone.php">Drone Control</a></li>
          <li><a id="refreshButton" onclick="">Refresh</a></li>
        </ul>
      </nav>
    </header>
    <div class="flex-container" id="sensorsContainer">
      <div id="sensor1" onclick="navigateToPage('sensor1')">
        <p>Sensor 1</p>
        <p id="temperature1">Temperature</p>
        <p id="battery1">Battery</p>
        <p id="cameraStatus1">Initial Text</p>
      </div>
      <div id="sensor2" onclick="navigateToPage('sensor2')">
        <p>Sensor 2</p>
        <p id="temperature2">Temperature</p>
        <p id="battery2">Battery</p>
        <p id="cameraStatus2">Initial Text</p>
      </div>
      <div id="sensor3" onclick="navigateToPage('sensor3')">
        <p>Sensor 3</p>
        <p id="temperature3">Temperature</p>
        <p id="battery3">Battery</p>
        <p id="cameraStatus3">Initial Text</p>
      </div>  
      <div id="sensor4" onclick="navigateToPage('sensor4')">
        <p>Sensor 4</p>
        <p id="temperature4">Temperature</p>
        <p id="battery4">Battery</p>
        <p id="cameraStatus4">Initial Text</p>
      </div>
      <div id="sensor5" onclick="navigateToPage('sensor5')">
        <p>Sensor 5</p>
        <p id="temperature5">Temperature</p>
        <p id="battery5">Battery</p>
        <p id="cameraStatus5">Initial Text</p>
      </div>
      <div id="sensor6" onclick="navigateToPage('sensor6')">
        <p>Sensor 6</p>
        <p id="temperature6">Temperature</p>
        <p id="battery6">Battery</p>
        <p id="cameraStatus6">Initial Text</p>
      </div>
      <div id="sensor7" onclick="navigateToPage('sensor7')">
        <p>Sensor 7</p>
        <p id="temperature7">Temperature</p>
        <p id="battery7">Battery</p>
        <p id="cameraStatus7">Initial Text</p>
      </div>
      <div id="sensor8" onclick="navigateToPage('sensor8')">
        <p>Sensor 8</p>
        <p id="temperature8">Temperature</p>
        <p id="battery8">Battery</p>
        <p id="cameraStatus8">Initial Text</p>
      </div>
      <div id="sensor9" onclick="navigateToPage('sensor9')">
        <p>Sensor 9</p>
        <p id="temperature9">Temperature</p>
        <p id="battery9">Battery</p>
        <p id="cameraStatus9">Initial Text</p>
      </div>
      <div id="sensor10" onclick="navigateToPage('sensor10')">
        <p>Sensor 10</p>
        <p id="temperature10">Temperature</p>
        <p id="battery10">Battery</p>
        <p id="cameraStatus10">Initial Text</p>
      </div>
      <div id="sensor11" onclick="navigateToPage('sensor11')">
        <p>Sensor 11</p>
        <p id="temperature11">Temperature</p>
        <p id="battery11">Battery</p>
        <p id="cameraStatus11">Initial Text</p>
      </div>
      <div id="sensor12" onclick="navigateToPage('sensor12')">
        <p>Sensor 12</p>
        <p id="temperature12">Temperature</p>
        <p id="battery12">Battery</p>
        <p id="cameraStatus12">Initial Text</p>
      </div>
      <div id="sensor13" onclick="navigateToPage('sensor13')">
        <p>Sensor 13</p>
        <p id="temperature13">Temperature</p>
        <p id="battery13">Battery</p>
        <p id="cameraStatus13">Initial Text</p>
      </div>
      <div id="sensor14" onclick="navigateToPage('sensor14')">
        <p>Sensor 14</p>
        <p id="temperature14">Temperature</p>
        <p id="battery14">Battery</p>
        <p id="cameraStatus14">Initial Text</p>
      </div>
      <div id="sensor15" onclick="navigateToPage('sensor15')">
        <p>Sensor 15</p>
        <p id="temperature15">Temperature</p>
        <p id="battery15">Battery</p>
        <p id="cameraStatus15">Initial Text</p>
      </div>
      <div id="sensor16" onclick="navigateToPage('sensor16')">
        <p>Sensor 16</p>
        <p id="temperature16">Temperature</p>
        <p id="battery16">Battery</p>
        <p id="cameraStatus16">Initial Text</p>
      </div>
    </div>
    <script src="js/script.js"></script>
  </body>