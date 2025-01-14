<?php

//1-Get a Date:
//the first three print the full date ,but the last one print a day of a week
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";

//2-Get a Time:
//print the time , a : to show am or pm
echo "The time is " . date("h:i:sa") . "<br>";

//3-Get Your Time Zone:
//print the timezome of Spain and return the time with am or pm 
date_default_timezone_set("Europe/Madrid");
echo "The time is " . date("h:i:sa") . "<br>";

//4-Create a Date With mktime():
//returns the nnumbers below as date and time
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

//5-Create a Date From a String With strtotime():
//changes 10:30pm April 15 2014 into a timestamp and returns 2014-04-15 10:30:00 PM
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

?>