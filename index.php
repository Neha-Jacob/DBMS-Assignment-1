<?php

if (isset($_POST["Submit"]))
{
  echo ($_POST["name"]);
  echo ($_POST["roll"]);
  echo ($_POST["dob"]);
  echo ($_POST["address"]);
  echo ($_POST["contact"]);
  echo ($_POST["email"]);
  echo ($_POST["semno"]);
  echo ($_POST["sgpa1"]);
  echo ($_POST["sgpa2"]);
  echo ($_POST["sgpa3"]);
  echo ($_POST["sgpa4"]);
  echo ($_POST["sgpa5"]);
  echo ($_POST["sgpa6"]);
  echo ($_POST["sgpa7"]);
  echo ($_POST["sgpa8"]);
  echo ($_POST["cgpa"]);
  echo ($_POST["hobbies"]);
  echo ($_POST["stay"]);
  echo ($_POST["references"]);
  
}

?>



<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> Biodata/CV</title>
</head>
<body style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
  <h1 style="text-align: center;"> BIODATA/CV</h1>
  <hr><hr><br>

  <section id="navigation" style="text-align: center;">Click the function you want to do<br><br>
    --><a href="#enterdetails">Enter details </a><br>
    --><a href="#search">Search by roll number </a>
  </section>
    <br><br>
    <hr>
    <br>

  <section id="enterdetails" style="text-align: center;"><u>ENTER THE FOLLOWING DETAILS</u><br><br>
    <form action="index.php" method="POST">

      <label for="name">Name: </label><br>
      <input type="text" id="name" name="name"><br><br>

      <label for="roll">Roll number: </label><br>
      <input type="text" id="roll" name="roll"><br><br>

      <label for="dob">Date of brith: </label><br>
      <input type="date" id="dob" name="dob" max="2005-01-01"><br><br>

      Address: <div>
        <textarea name="address" rows="4" form="details"></textarea>
      </div><br>

      <label for="contact">Mobile number(without +): </label><br>
      <input type="number" id="contact" name="contact"><br><br>

      <label for="email">Email Id: </label><br>
      <input type="email" id="email" name="email"><br><br>

      <label for="semno">Current Semester: </label><br>
      <input type="number" id="semno" name="semno" min="1" max="8"><br><br>

      <section id="sgpas">
        <label for="sgpa1">Semester 1 SGPA: </label><br>
        <input type="number" id="sgpa1" name="sgpa1" min="0.00" max="10.00" step="0.01"><br>
        <label for="sgpa2">Semester 2 SGPA: </label><br>
        <input type="number" id="sgpa2" name="sgpa2" min="0.00" max="10.00" step="0.01"><br>
        <label for="sgpa3">Semester 3 SGPA: </label><br>
        <input type="number" id="sgpa3" name="sgpa3" min="0.00" max="10.00" step="0.01"><br>
        <label for="sgpa4">Semester 4 SGPA: </label><br>
        <input type="number" id="sgpa4" name="sgpa4" min="0.00" max="10.00" step="0.01"><br>
        <label for="sgpa5">Semester 5 SGPA: </label><br>
        <input type="number" id="sgpa5" name="sgpa5" min="0.00" max="10.00" step="0.01"><br>
        <label for="sgpa6">Semester 6 SGPA: </label><br>
        <input type="number" id="sgpa6" name="sgpa6" min="0.00" max="10.00" step="0.01"><br>
        <label for="sgpa7">Semester 7 SGPA: </label><br>
        <input type="number" id="sgpa7" name="sgpa7" min="0.00" max="10.00" step="0.01"><br>
        <label for="sgpa8">Semester 8 SGPA: </label><br>
        <input type="number" id="sgpa8" name="sgpa8" min="0.00" max="10.00" step="0.01">
      </section><br>

      <label for="cgpa">CGPA: </label><br>
      <input type="number" id="cgpa" name="cgpa" min="0.00" max="10.00" step="0.01"><br><br>

      Hobbies: <div>
        <textarea name="hobbies" rows="4" form="details"></textarea>
      </div><br>

      <label for="stay">Hosteller or Day Scholar? </label><br>
      <input type="radio" id="hostel" name="stay" value="hostel"><label for="hostel">Hosteller</label><br>
      <input type="radio" id="dayscholar" name="stay" value="dayscholar"><label for="dayscholar">Day Scholar</label>
      <br><br>

      References: <div>
        <textarea name="references" rows="5" form="details"></textarea>
      </div><br>

      <input type="submit" value="Submit"> <input type="reset">

    </form>

  </section>
  <br>
  <hr>
  <br>

  <section id="search" style="text-align: center;"><u>SEARCH BY ROLL NUMBER</u><br><br>
    <form id="/list.php">
      <labelfor="rollnosearch">Enter roll number to be searched: </label><input type="search" id="rollnosearch" name="rollnosearch"> <input type="submit" value="Submit">
      <!--<label for="search"> Search</label> <input type="search" id-"search" name="search">-->
   </form><br>
  </section>
  <br>
  <hr>
  <br>

  <section id="redirect" style="text-align: center;">You have reached the end of the page. <br>To go back on top <a href="#navigation"> click here</a><br>Thank You </section>
</body>
</html>
