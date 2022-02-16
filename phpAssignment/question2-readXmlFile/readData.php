<?php
$studentdata = simplexml_load_file('students.xml');
if(!$studentdata){
    echo 'Fail to load XML file';
}
else{
    foreach($studentdata as $student){
        echo 'Firstname: '.$student->firstname.'<br/>';
        echo 'Lastname: '.$student->lastname.'<br/>';
        echo 'Roll No: '.$student->rollNo.'<br/>';
        echo 'Class: '.$student->class.'<br/><br/>';
    }
}
?>    