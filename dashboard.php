<!DOCTYPE html>
<html>
<head>
<title>absensi maxi</title>
<link rel="icon" id="favicon" href="logo header.ico" type="image/x-icon">
<style>
* {
  margin: 0;
  padding: 0;
}

#dashboard {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: center;
  background-color:  rgba(255, 99, 71,1);
  color: white;
  position: sticky;
}
#dashboard td, #dashboard th {
  border: 1px solid #ddd;
  padding: 3px;
}
#logo{
  font-family: Helvetica, Arial, sans-serif;
  font-size: 150%;
  text-align : center;
}
#ct{
  margin-left: auto;
  margin-right: auto;
}
a:link, a:visited {
  background-color: tomato;
  color: white;
  padding: 16px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #ff7961;
  border-radius :10%;
}
#clock{
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  font-size: 300%;
  color : tomato;
}
#date{
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  font-size: 300%;
  background-color : tomato;
  color : white;
  border: 4px solid tomato;
}
#absen{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 100%;
  border-radius: 8px;
  margin: 4px 2px;
  cursor: pointer;
}
#absen:hover{
  background-color: grey;
  color: black;
}

#buttloc{
  text-align: center;
}
#ilus{
  text-align: center;
}
</style>

</head>
<body>
<!--table of dashboard-->
    <p style="display: block; text-align: center;">
    <table id="dashboard">
    <tr>
        <th><a href="https://mc.mka.biz.id/user/login.php" target="_blank">Login/Logout</a> </th>
        <th max-width ="6%";>Absen</th>
        <th width ="15%"style="background-color:white; padding-top: 1px; padding-bottom: 1px;"><img src="https://e-ipo.co.id/id/pipeline/get-logo?id=235" width = "40%"></th>
        <th style="color: #fa2600;background-color: white; font-size: 1. em;padding-top: 1px; padding-bottom: 1px;font-size: 1.5em;">Maxindo Karya Anugrah</th>
        <th max-width ="6%";>main menu</th>
    </tr> 
    </table>
    <span id='ct'></span>    
  </p>
<!--the clock date time and illustration-->
  <div id="clock"></div>
  <div id="date"></div>
  <div id ="ilus"> <img src="callendar2.png" width = "15%"></div>
  <div id="buttloc"><button id="absen">klik tombol ini untuk absen</button></div>
<!--the button click sound-->
  <audio id="clickSound" controls="false" style="display: none">
    <source src="button_clicked.mp3" type="audio/mpeg">
      </audio>
  <audio id="failedSound" controls="false" style="display: none">
    <source src="button_failed.mp3" type="audio/mpeg">
      </audio>
  <script src="fungsi.js"> 
  </script>

</body>
</html>