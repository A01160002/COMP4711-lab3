<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include('Student.php'); 
            $students = array(); 
            
            $first = new Student(); 
            $first->surname = "Doe"; 
            $first->first_name = "John"; 
            $first->status = "freshman";
            $first->add_email('home','john@doe.com'); 
            $first->add_email('work','jdoe@mcdonalds.com'); 
            $first->add_grade(65); 
            $first->add_grade(75); 
            $first->add_grade(55); 
            $students['j123'] = $first; 

            $second = new Student(); 
            $second->surname = "Einstein"; 
            $second->first_name = "Albert"; 
            $second->status = "sophomore";
            $second->add_email('home','albert@braniacs.com'); 
            $second->add_email('work1','a_einstein@bcit.ca'); 
            $second->add_email('work2','albert@physics.mit.edu'); 
            $second->add_grade(95); 
            $second->add_grade(80); 
            $second->add_grade(50); 
            $students['a456'] = $second;
            
            $third = new Student(); 
            $third->surname = "Liu"; 
            $third->first_name = "Chang"; 
            $third->status = "junior";
            $third->add_email('home','3395097772@qq.com'); 
            $third->add_email('work1','liuchang@bcit.ca'); 
            $third->add_email('work2','liuchang@physics.mit.edu'); 
            $third->add_grade(60); 
            $third->add_grade(60); 
            $third->add_grade(60); 
            $students['A01160002'] = $third;
            
            $fourth = new Student(); 
            $fourth->surname = "ak"; 
            $fourth->first_name = "66"; 
            $fourth->status = "senior";
            $fourth->add_email('home','12487964551@qq.com'); 
            $fourth->add_email('work1','Mr.ak@bcit.ca'); 
            $fourth->add_email('work2','AK47@physics.mit.edu'); 
            $fourth->add_grade(70); 
            $fourth->add_grade(80); 
            $fourth->add_grade(90); 
            $students['A01160003'] = $fourth;
            
            ksort($students); // one of the many sort functions
            
            
            foreach($students as $student) 
                echo $student->toString(); 
        ?>
    </body>
</html>

