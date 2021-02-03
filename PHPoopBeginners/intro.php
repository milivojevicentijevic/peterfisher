<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intro</title>
</head>
<body>
<?php
    require 'Employee.php';
    $employee1 = new Employee("Backend Developer","Nada", "Blam", "w");
    echo "<br>";
    echo Employee::COMPANY_NAME."<br>";
    echo Employee::EYE_COLOR."<br>";
?>   
</body>
</html>





<!-- 
ACMEbrownbrown  /// from constructors
ACME
brown
-->