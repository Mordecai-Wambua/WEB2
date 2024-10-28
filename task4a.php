<?php
$studentName = $_POST['name'];
$studentGroup = $_POST['gr'];
$class = $_POST['class'];
$section = $_POST['section'];

echo `<h1> Information </h1> Name: ${studentName}\nGroup: ${studentGroup}\nClass: ${class}\nSection: ${section}`;
?>