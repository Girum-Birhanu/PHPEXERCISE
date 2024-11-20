
<!-- <?php

 //Local Variable in local scope

// function local_var(){
//     $num=45;//local variable
//     echo"Local variabel declared inside function is ".$num;
// } 
// local_var();

//----------------------------------------------
?> -->

<!-- <?php
//Global Variabel Declaration

// $Test= "Hi girum";

// function mytest()
// {
//     Global $Test;
//     echo"Web development language:".$Test;
// }
// //mytest();
// echo $Test;
// echo "</br>";

//------------------------------------------------
?> -->

<!-- <?php
// function hello(){
//     $Girum="will be free today for ever";
//     echo "YES it is True HE will BE".$Girum;
// }
// hello();

//--------------------------------------------------
?> -->


<!-- <?php 
// $num1=45;
// $num2=10;
// $sum=0;

// function test(){

//     $sum = $GLOBALS ['num1'] + $GLOBALS['num2'];
//     echo "These is the Sum of two number".$sum;
// }

// echo $sum;
//-----------------------------------------------------
?> -->

<!-- <?php
//------------------------------------------------------
// function static_var(){

//     static $num1=4;
//     $num2=6;

//     $num1++;
//     $num2++;

//     echo "num1 will be :.$num1.</br>";
//     echo  "num2 will be : .$num2.</br>";

// }
    // static_var();
    // static_var();
   
    //output

    // num1 will be :.5.
    // num2 will be : .7.
    // num1 will be :.6.
    // num2 will be : .7.

    
?> -->

<!-- 
<?php
//---------------------------------------------------- 

//     $name="Cat";
//     ${$name}="Dog";
//    ${${$name}}="Monkey";
   
//    echo $name."</br>";
//    echo ${$name}."</br>";
//    echo ${${$name}}."</br>";
//    echo $Dog."</br>";
 
  // output

// Cat
// Dog
// Monkey
// Monkey

?>
 -->

 <!-- <?php
 //--------------------------------------------------------------------
//  define("MESSAGE","Hello Girum PHP",true); // Not case-sensitive
//     echo MESSAGE,"</br>";
//     echo message; 
 
//     define("MESSAGE","Hello Girum PHP",false);//case-snsitive
//     echo MESSAGE;
//     echo message; 
//===========================================================
 ?> -->

<?php
//===========================================================
// const MESSAGE="hello guys";
// echo MESSAGE;

// define("MESSAGE","My name is Girum birhanu");
// echo MESSAGE;
// echo constant("MESSAGE");

?>

<!-- <?php
//===========================================================
echo "<h3>Example __FILE__</h3>";
//print full path of files with .php extension

echo __FILE__;

//output
// Example __FILE__
// C:\xampp\htdocs\phpExercise\index.php

?> -->


<!-- <?php

//==============================================================

// echo "<h3>Example for_DIR_</h3>";
     //print full path of director Where script will be placed
// echo __DIR__."<br><br>";
    //below output will equivalent to above one.
// echo dirname(__FILE__)."<br><br>";// dirname(_FILE_) THE SAME US _DIR_ 

//output

// Example for_DIR_
// C:\xampp\htdocs\phpExercise

// C:\xampp\htdocs\phpExercise


?> -->

<?php
//===========================================================

// echo "<h3>Example for_FUNCTION_</h3>";
 //using magic constant inside function.

// function test(){
 //print the function name i.e; test.
// echo 'The function name is '.__FUNCTION__."<br><br>";
    
// }

// test();
//output

//Example for_FUNCTION_
//The function name is test

// function test2(){
//     echo "calling function name outside the scope";

// }
// test2();
// echo "is this will give blackout put".__FUNCTION__."<br><br>";
// if we wants the function Name, we need to call it inside the function.
//==================================================================
?>


<!-- 
<?php
//===================================================================

// echo "<h3>Example for_CLASS_</h3>";

//     class JTP
//     {
//         public function _consrtuct(){
//             ;
//         }
//       function getClassName(){
//         //print name of the class JTP.
//         echo __CLASS__;
//       }  
//     }

//     $t=new JTP;
//     $t->getClassName();
//output

// Example for_CLASS_
// JTP    

    //in case of multiple classes

        // class base {
        //     function test_first(){
                 //will alawys print parent class which is base here.
        //         echo __CLASS__."<br><br>";
        //     }
        // }

            // $f=new base;       //if i need the Name of these class(base class)
            // $f->test_first(); //if i need the Name of these class(base class)
        
        // class child extends base{
        //     public function _construct(){
        //             ;
        //     }
        // }    
        //     $t=new child;
        //     $t->test_first();
    //output
    
    //Example for_CLASS_
    //JTPbase        
//==========================================================================
?> -->

<!-- <?php
//===========================================================================

// class Birhanu{
//    public function _humble(){
//         echo "good character"."</br>";
//         echo __CLASS__."</br>";
//     }
// }
//      $t=new Birhanu;
//      $t->_humble();

//     class child extends Birhanu{
//       public  function _humble(){
//             echo "from my father"."</br>";
//             echo __CLASS__;
//         }
//     }

//     $t=new child();
//     $t->_humble();

    //output
    
// good character
// Birhanu
// from my father
// child    

//======================================================================
?> -->

<!-- <?php
 //===============================================================
// trait created_trait{
//     function jtp(){
        //will print name of the traite i.e created_trait
//         echo __TRAIT__;
//     }
// }
//  class Company{
//     use created_trait;
//  }
//  $a=new Company;
//  $a->jtp();

 //output

 //created_trait

//=================================================================
?> -->

<!-- <?php
//==================================================================

    // class method{

    //  public function test(){
    //     echo "try these method function";
    //     echo __METHOD__."<br><br>";
    //     }
        
    //     public function meth_fun(){
    //         //print method function
    //         echo __METHOD__;
    //     }
    // }
       

    //     $a=new method;
    //     $a->meth_fun();
//output
// method::meth_fun

//====================================================================       
?> -->

<!-- <?php 

// class name{
//     public function test(){
//         echo "This line will print on calling namespace";

//     }
// }
//     $class_name= __NAMESPACE__.'\name';
//     $a = new class_name;
   //output
 
// This line will print on calling namespace // in my case i don't have namespace type so it will be empty.   

?> -->

<!-- 
<?php
//===================================================

// namespace Technical_Port;
// echo "<h3>Example for CLASSNAME::CLASS</h3>";
//     class girum{

//     }
//     echo girum::class;

//output

//Example for ClassName::class
//Technical_Port // in my case these doesnot work bc it is not oop ;

//=======================================================================
?> -->

<!-- <?php
 //Arrays
//========================================================================

// $bake=array("modernBike","OldBike","StolenBike");
// var_dump($bake); //The var_dump function returns the datatype and the values
// echo "</br>";
// echo "1st bike".$bake[0];
// echo "</br>";
// echo "2nd bike".$bake[1];
// echo "</br>";
// echo "3rd biek".$bake[2];

//output

// array(3) { [0]=> string(10) "modernBike" [1]=> string(7) "OldBike" [2]=> string(10) "StolenBike" }
// 1st bikemodernBike
// 2nd bikeOldBike
// 3rd biekStolenBike
//======================================================================
?> -->
<!-- 
<?php
//======================================================================
//Object creation on php

    // class shoes{
    //     function model(){
    //         $model_name="Nike";
    //         echo "shoes model ".$model_name;
    //     }
    // }
    //     $obj=new shoes;
    //     $obj->model();
//output
//shoes model Nike
//============================================================================
?> -->

<?php
//array_slice
// $car=array("tesela","BMW","Volvo","Lambargine","Jeep","Toyota");
// print_r(array_slice($car,1,2));

//output

//Array ( [0] => BMW [1] => Volvo )

// $car=array("tesela","BMW","Volvo","Lambargine","Jeep","Toyota");
// print_r(array_slice($car,2,-1));

//output

//Array ( [0] => Volvo [1] => Lambargine [2] => Jeep )


// $car=array("tesela","BMW","Volvo","Lambargine","Jeep","Toyota");
//  print_r(array_slice($car,2,-1,true));

 //output

// Array ( [2] => Volvo [3] => Lambargine [4] => Jeep )
//=================================================================================
?>
<!-- 
<?php
//=============================================================================
//Array slice Exercise

// $subject=array('java','c++','OS','DBMS');

// $result=array_slice($subject,3,true);
// print_r($result);
// echo "</br>";

// $result=array_slice($subject,-2,1,true);
// print_r($result);
// echo "</br>";

// $result=array($subject,0,4,true);
// print_r($result);
// echo "</br>";

//output

// Array ( [0] => DBMS )
// Array ( [2] => OS )
// Array ( [0] => Array ( [0] => java 
                                    // [1] => c++ 
                                    // [2] => OS 
                                    // [3] => DBMS ) 
                                    // [1] => 0 
                                    // [2] => 4 
                                    // [3] => 1 )


?> -->

<!-- <?php
//=============================================
// Nested IF Else Statement.

    //     $age=20;
    // $nationality="Ethiopian";
    // if($nationality=="Ethiopian"){
    //     if($age==20){
    //         echo"Eligibel to Vote";
    //     }
    //     else{
    //         echo"You are not Eligibel To Vote";
    //     }
    // }    
//output
//Eligibel to Vote

//=================================================================
?> -->

<?php
//==================================================================

// $age=20;
// $nationality="Ethiopian";

//     switch($age==20 && $nationality=="Ethiopian"){
        
//         case 1:
//             echo "You can Vote";
//                 break;
//         case 2:
//             echo "you can't Vote";
//             break;        
//     }

// $a=80; $b=30; $c=40; $d=40;

// if($a>$b){
//     if($b<$d){
//         echo"good job"."</br>";
        
//     }
//     else{
//         echo"not good";
//     }
   
        
// }
//output

//echo "nested loop"

//===========================================================
?>

<?php
//===========================================================
//Switch Statement
// $num=60;

// switch($num){
//     case 40:
//         echo "You not get the number";
//         break;
//      case 45:
//         echo "You Missed the number";
//         break;
//       case 20:
//         echo "Your  get the number";
//         break;

//             default:
//             echo "Your not lucky";
// }
       
     

?>
<?php
// for($i=1; $i<9; $i++){
//     echo $i;
// }

//output

//12345678

// for($i=1; $i<=3; $i++){
//     for($j=1; $j<=3; $j++){
//             echo"$i $j<br/>";
//     }
// }

//output

// 1 1
// 1 2
// 1 3
// 2 1
// 2 2
// 2 3
// 3 1
// 3 2
// 3 3
//==============================================================
?>

<?php

//================================================================

// foreach loop

// $season=array("Summer","Winter","Spring","Autumn");
// foreach($season as $arr){
//     echo "Season is : $arr <br/>";
// }

//output

// Season is : Summer
// Season is : Winter
// Season is : Spring
// Season is : Autumn

// $employee=array(
//     "Name"=>"Girum ",// Name is key and Girum is value
//     "Age"=>"20 ",
//     "Email"=>"birhanugirum703@gmail.com ",
//     "degree"=>"1 ",
//     "Gender"=>"Male "
// );

// foreach($employee as $key=>$value){
//     echo $key." employee is : ".$value;
//     echo "</br>";
// }
//output

// Name employee is : Girum
// Age employee is : 20
// Email employee is : birhanugirum703@gmail.com
// degree employee is : 1
// Gender employee is : Male

//------------------------------------------------------------

//2D Array

// $a=array();
//     $a[0][0]="Girum ";
//     $a[0][1]="Kalab ";
//     $a[1][0]="Minase ";
//     $a[1][1]="Bahiru ";

//     foreach($a as $i){
//         foreach($i as $j){
//             echo "$j\n";
//         }
        
//     }

    //output

  //  Girum Kalab Minase Bahiru   

  //Dynamic array

//   foreach(array('G','i','r','u','m',' ','B','i','r','h','a','n','u') as $value){
//     echo "$value\n";
//   }
  //output

  //G i r u m B i r h a n u

//========================================================================

?>

<?php

//===================================================
// $a=23;
// ${$a}=-18;
// echo $a + ${$a};

//outoput

//5
//==============================================================
?>

<?php

//==============================================================
// function man($men,$age){
//     echo "man is $men";
//     echo "he is $age years old ";
// }
// man("Girum ","25");
// echo "</br>";
// man("Birhanu ","33");
// echo "</br>";
// man("Kalab ","45");
// echo "</br>";
// man("Minase ","77");

//output

// man is Girum he is 25 years old
// man is Birhanu he is 33 years old
// man is Kalab he is 45 years old
// man is Minase he is 77 years old

//======================================================================

?>

<?php
//======================================================================

// function adder(&$str2){
//     $str2.='call by reference ';
// }
// $str='hello ';
// adder($str);//both of them $str and $str to referece to the same address location.
// echo $str;//there that are stored on the same location.


// function sayhello($name="Girum"){
//     echo "Hello $name<br/>";
// }

// sayhello("Birhanu");
// sayhello();
// sayhello("Kalab");

//output

// Hello Birhanu
// Hello Girum
// Hello Kalab
//======================================================================
?>
<?php
//=====================================
//return value

// function cube($n){
//     return $n*$n*$n;
// }
// echo " cube value of three is :".cube(3);
//output

//cube value of three is :27
//=====================================================
?>

/*
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameter Addition and subtraction Example</title>
</head>
<body>
    <?php
    //add two numbers
    // function add($x,$y){
    //     echo "Sum of the two values is ".$sum=$x+$y."</br>";
    // }
    // add(45,45);
    // function sub($a,$b){
    //     echo "subtraction of the two value will be: ".$subtract=$a-$b."</br>";
    // }
    // sub(100,20);
    
    ?>
    
</body>
</html> -->

*/

<?php
 //=====================================================================
// function add($a,$b){
//     echo "sum of a and b will be : ".$sum=$a+$b;
// }

// function sub($a,$b){
//     echo "The Difference of the two values will be : ".$diff=$a-$b;
// }
// //call function, get two argumet through input box and click on add or sub button

// if(isset($_POST['add'])){
// //call add() function
// add($_POST['first'],$_POST['second']);    
// }
// if(isset($_POST['sub'])){
//     sub($_POST['first'],$_POST['second']);
// }

?>
<!-- 
<form method="Post">

Enter first number: <input type="number" name="first"/><br><br>
Enter second number: <input type="number" name="second"/><br><br>
<input type="submit" name="add" value="ADDITION"/>
<input type="submit" name="sub" value="SUBTRATION"/>

</form> --> -->

<!-- 
<?php
// function dimr($a,$b){
//     echo "sum of the numbers will be : ".$sum=$a+$b;
// }

// function mkns($a,$b){
//     echo "The difference of the two numbers will be : ".$d=$a-$b;
// }

// if(isset($_POST['dimr'])){
//    dimr($_POST['first'],$_POST['second']);

//  if(isset($_POST['mkns'])){
//    mkns($_POST['first'],$_POST['second']);
//  }   
// }

// ?>
<form method="POST">

Enter Number first: <input type="number" name="first"/><br><br>
Enter Second Number:<input type="number" name="second"/><br><br>
<input type="submit" name="dimr" value="ADDITION"/>
<input type="submit" name="mkns" value="SUBTRATION"/>

</form> -->

<!-- <form action="index.php" method="get">
//=============================================================================
Name: <input type="text" name="name"/>
<input type="submit" value="visit">

</form> -->

<?php
// $name=$_GET['name'];
// echo"Welcome,$name";
//===============================================================================
?>

<!-- <form action="index.php" method="post">

<table>
<tr><td>Name</td><td><input type="name" name="name"></td></tr>
<tr><td>Password</td><td><input type="password" name="password"></td></tr>
<tr><td><input type="submit" value="Login"></td></tr>
</table>

</form> -->

<?php
// $name=$_POST["name"];
// $password=$_POST["password"];
// echo "Here is your login information $name,$password";

//Here is your login information John,345
?>

<!-- <?php require("menu.html");?>
<h2>This is the Main Page</h2> -->

?>

<?php
//setcookie("user","Girum");
//output
//sorry, cookie is not found!
?>
<!-- <html>
    <body>
        <!-- <?php
        // if(!isset($_COOKIE['user'])){
        //     echo "sorry, cookie is not found!";
        // }else{
        //     echo "<br/>Cookie value:".$_COOKIE["user"];
       // } -->
        
        ?>
    </body>
</html> -->

