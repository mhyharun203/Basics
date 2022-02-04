<?php
declare(strict_types=1);

class Student
{

    public string $first_name;
    public string $last_name;
    public string $country = 'None';


}

$student1 = new Student;
$student1->first_name = 2183;
$student1->last_name = 'Ricardo';


$student2 = new Student;
$student2->last_name = 'baum';
$student2->first_name = 'Banane';

echo $student2->first_name . " " . $student2->last_name . "<br />";

$class_vars = get_class_vars(Student::class);
echo "Class vars: <br />";
echo "<pre>";
print_r($class_vars);
echo "</pre>";


$object_vars = get_object_vars($student1);
echo "Object vars: <br />";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

if (property_exists('Student', 'first_name')) {
    echo "Property first name exists in student class. <br/>";
}else {
    echo "Property first name does not exists in student class. <br/>";
}



