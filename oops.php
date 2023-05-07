<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPS</title>
</head>
<body>
<?php
        /* creating an oject
          consider a class of students 1>now we can consider some properties such as
                                            a>weight, height, color etc
                                            b>male and female(another classes of students)
                                            c>class also include functions such as
                                              c1>eat(),sit(),etc
                                        2>hence consider a student named prerak of class student and class male 
                                        with properties such as height,weight etc
                                        3>threfore in oops terms we consider prerak as object of class male and 
                                        student. */
        /* inheritence
        1> inherents of properties of another class to another class
        for example properties of student class can we inhereted to male/female classes
            Abstraction
        1>same concept of ADT (abstract data types)
            encapsulisation
        1>binding data and code together 
        */

    //creating first object

 class myClass {
 //code will go here
 }
 $object1 = new myClass();
 //echo "$object1 is an ".gettype($object1).".<br/>";

 if (is_object($object1)) {
 echo "Really! I swear \$object1 is an object!";
 }
 ?>

<?php
    /*properties of object
    1>variables decleared inside an object are called properties*/
    class mycar {
        public$color="silver"; // public represents that variable can be accessed everywhere
        public$make="toyota"; //protected represents that variable can only be used in inhereted class
        public$model="v5"; //private represents that varaible can be accessed ony by the class itself
    }
$car= new mycar(); // to make new object
echo "I drive a: ".$car -> color." ".$car -> make." ".$car -> model;
echo "<br>";
# changing object properties
    class mycar1 {
        public$color ="silver";
        public$make="Toyota";
        public$model="V5";
    }

    $car=new mycar1(); //to make new object
    $car->color="Steel Black";
    $car->make="Maruti";
    $car->model="M5";

    echo "I Drive a :" .$car->color ." ". $car->make . $car->model;
    echo "<br>";
    // hence we can see that we can change properties of a class after declearing it also
    echo "<br>";
    // object methods
    class myclass1 {
        function sayhello()
        {
            echo "Hello";
        }
    }
    // a method look like a normal function but is defined within the framework of a class 
    // the -> operator is used to call the object method in context to your script
    $object1= new myclass1();
    $object1->sayhello();

    //accessing class properties withen a ethod 
    class myclass2 {
        public$name="Prerak Gupta";
        function sayhello1(){
            echo "hello dear ". $this->name; // $this is used to refer the currently initiatd object. anytime an object refers to itself, you must use the $this variable
            // using the $this variable in conjunction with the -> operator enables you to access any property or method in a class, within the class itself
        }
    }
    $object2=new myclass2();
    $object2->sayhello1();

// changing the value of a property from withen a method
    class myclass3 {
        public$name1="Vipul";
        function setname($n) {
            $this->name1=$n;
        }
        function sayhello2(){
            echo "hello !" . $this->name1;
        }
    }

    $object3=new myclass3();
    $object3->setname("prerak gupta");
    $object3->sayhello2();

/* Constructors
A constructor is a function that lives withen a class and, given the same name as the class,
is automatically called when a new instance of the class is created using new classname */
   echo "<br>";
    class myclass4{
        public$name2="prerak";
        function myclass4($n){
            $this->name2=$n;
        }
        function sayhello3() {
            echo "hello" .$this->name2;
        }
    }
    class childclass extends myclass4{
        //code here
    }
$object4=new childclass();
$object4->myclass4("gupta");
$object4->sayhello3();
/* In PHP, the extends clause is used to create a class that is a child or a subclass of another
class. It is used in object-oriented programming (OOP) to define a class that inherits properties 
and methods from a parent class */

// The method of a child class overriding That of its parent
class myclass5 {
    public$name3="prerak";
    function myclass5($n){
        $this->name=$n;
    }
    function sayhello4(){
        echo "hello "." ".$this->name; 
    }
}
    class childclass1 extends myclass5 {
        function sayhello4(){
            echo "hello from child class "; 
    }
}

    $object5=new childclass1();
    $object5->sayhello4();

?>
</body>
</html>