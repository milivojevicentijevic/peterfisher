<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intro</title>
</head>
<body>
<?php
    require 'Employee.php';
    $person1 = new Person('Nada','Blam','w');
    echo $person1->sayHello();
    $employee1 = new Employee("Backend Developer","Nada", "Blam", "w");
    $employee1->jobTitle = "tester";
    $employee1->jobNumber = 5;
    echo $employee1->jobTitle."<br>";
    echo $employee1->jobNumber;
    echo "<br>";
    echo $employee1->getGender();
    echo $employee1->sayHello();
?>   
</body>
</html>





<!-- 
Hello, my name is Nada Blam
Tester
5
w
Hello, I'm an employee. My name is Nada Blam
-->