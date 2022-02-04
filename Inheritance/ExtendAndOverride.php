<?php


class User
{


    var $first_name;
    var $last_name;
    var $username;


    function full_name()
    {
        return $this->first_name . " " . $this->last_name;
    }


}

class customer extends User
{
var $city;
var $state;
var $country;


function location() {
    return $this->city . ", " .$this->state. ", " . $this->country;
}

}

$u = new User;
$u->first_name = 'Jerry';
$u->last_name = 'seinfeld';
$u->username = ' JFseinfeld';

$c = new Customer;
$c->first_name = 'Tom';
$c->last_name = 'FeldsEin';
$c->username = ' TOMFISLÖD';
$c->city = 'New YOrk';
$c->state = 'New York';
$c->country = 'United States of America';



echo $u->full_name() . '<br/>';
echo $c->full_name() . '<br/>';

echo $c->location() . '<br/>';



echo get_parent_class($u) . '<br/>';
echo get_parent_class($c) . '<br/>';


if (is_subclass_of($c, 'User')) {
    echo "Instance is a subclass of User .<br/>";
}

$parents = class_parents($c);
echo implode(',', $parents) . "<br/>";