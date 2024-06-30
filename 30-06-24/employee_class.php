<?php
class Employee {
    public $name="Rahmat";
    public $age;
    public $address;
    public function info(){
        $full="";
       $full.="Name :".$this->name;
       $full.="age :".$this->age;
       $full.="address :".$this->address;
       return $full;
    }//end of class
}

    $obj1 = new Employee;
     $obj1->name="Rahmat" ."<br>";
     $obj1->age=20 ."<br>";
     $obj1->address= "Mirpur" ."<br>";

     echo $obj1->info();




?>