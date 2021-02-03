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
    echo $employee1->getJobTitle();
    echo $employee1->getGender();
?>   
</body>
</html>





<!-- 
Hello, my name is Nada Blam
Backend Developer
w
-->