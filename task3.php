<?php
// Question 1
define("EMPLOYEE_CODE", "001");
define("EMPLOYEE_NAME", "ABC");
define("EMPLOYEE_SALARY", 25000);
define("WORKING_HOURS", 7.5);

echo "<h1>Employee Details</h1>";
echo "Employee Code is: " . EMPLOYEE_CODE . "<br>";
echo "Employee Name is: " . EMPLOYEE_NAME . "<br>";
echo "Employee Salary is: " . EMPLOYEE_SALARY . "<br>";
echo "Working Hours are: " . WORKING_HOURS . "<br>";

// Question 2
$employee_code = 001;
$employee_name = "ABC";
$employee_salary = 25000;
$working_hours = 7.5;

echo "<h1>Employee Details</h1>";
echo "Employee Code is: " . $employee_code . "<br>";
echo "Employee Name is: " . $employee_name . "<br>";
echo "Employee Salary is: " . $employee_salary . "<br>";
echo "Working Hours are: " . $working_hours . "<br>";


// Question 3
/* You make a constant name case insensitive by setting the third parameter of define to true.
    eg. define("EMPLOYEE_CODE", "001", true);
*/

// Question 4
/* How to declare a constant:
    define("CONSTANT_NAME", "value");
*/  

// Question 5
$gr_no = 001;
$name = 'Michael';
echo "My name is $name and my GR number is $gr_no";
print "My name is $name and my GR number is $gr_no";
?>