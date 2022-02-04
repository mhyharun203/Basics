<?php


class Student
{

    public $first_name;
    public $last_name;
    public $country = 'None';


    function say_hello() {
        return "Hello world";
    }


    function full_name() {
        return $this->first_name ." " . $this->last_name;
    }

}

$student1 = new Student;
$student1->first_name = "Lucy";
$student1->last_name = 'Ricardo';


$student2 = new Student;
$student2->last_name = 'baum';
$student2->first_name = 'Banane';

echo $student2->full_name() . "<br />";
echo $student2->say_hello() . "<br />";



$class_methods = get_class_methods('Student');
echo "Class methods :" . implode(",", $class_methods). "<br/>";



if (method_exists('Student', 'say_hello')) {
    echo "method say_hello() exists. <br/>";
} else {
    echo "method say_hello() does not exists.. <br/>";
}



