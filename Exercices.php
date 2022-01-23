<?php
//     // Exercice 2
echo "Hello Youcode <br>";

// Exercice 3

$monNom = " Cherkaoui <br>";
$monAge = 19;
$monPrenom = "Mohamed";
echo "$monNom  $monPrenom  $monAge <br>";
echo '$monNom  $monPrenom  $monAge <br>';

/*La difference ce que la deuxime ne prend pas en considération
   ces variables , il les considére comme une chaine de caracthère pa plus 
   */


$str = <<<MYTEXT
    This is a
    demo message
    with heredoc $monNom
    MYTEXT;

echo $str;

$str2 = <<<'MYTEXT'
    This is a
    demo message
    with heredoc $monNom 
    MYTEXT;

echo $str2 . "<br>";

// L'avantage d'utiliser HEREDOC ou bien NOWDOC c'est que on a pas besoin d'écrire chque fois le signe de passer \ , cette methode ne permet d'écrire directement sans problèmes.
//   Heredoc strings are like double-quoted strings without escaping.
//  Nowdoc strings are like single-quoted strings without escaping.
$myBool = false;

var_dump(+$myBool);
// Converting a boolean to an int
$number = 11;

$string = strval($number);

echo $string;

echo "<br>";

var_dump($string);
// Converting an int to a string
$ageX = 20;
$money = 1000;
$eyesColor = "red";

if ($ageX > 30 || $money > 50) {
    echo "<br>Lol <br>";
}


$name1 = '';

$name2 = null;

echo 'checking $name1 : ';
var_dump(isset($name1));

echo '<br>';

echo 'checking $name2: ';
var_dump(isset($name2));

echo '<br>';

echo 'checking undeclared variable $name3: ';
var_dump(isset($name3));

echo "<br>";

// Arrays :

$students = array("Mohamed", "Badr", "Yasser", "Salima");
echo "<pre>";
print_r($students);
echo "</pre>";

foreach ($students as $val) {
    echo $val . "<br>";
}
echo "<br>";

$contries = array(

    array(
        'Ma' => 'Morocco',
        'Al' => ' Algerie',
        'Tu' => 'Tunisie'
    ),
    array(
        'Ma' => 'Morocco',
        'Al' => ' Algerie',
        'Tu' => 'Tunisie'
    )

);
$contriesLength =  count($contries);

for ($index = 0; $index < $contriesLength; $index++) {
    foreach ($contries[$index] as  $value) {
        echo $value;
    }
}

for ($i = 6; $i <= 60; $i += 6) {

    echo $i;
}

for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuz";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } else {
        echo "\n";
    }
}
function sayHi($name, $age)
{
    echo "<br> Hi " . $name . "Your Age is " . $age;
}
sayHi("mohamed ", 19);

function funcValue1()
{
}
function funcValue2()
{
    return;
}
function funcValue3()
{
    return null;
}
echo "<br>";
var_dump(funcValue1(), funcValue2(), funcValue3());

echo "<br>";

$tasks = array(
    'title' => 'Creer Le landing Page',
    'due' => '10/05/22',
    'assigned_to' => 'Mohamed',
    'done' => true
);
echo "<ul>";


if ($tasks['done'] == true) {
    $tasks['done'] = "Done";
} else {
    $tasks['done'] = "Doing";
}
foreach ($tasks as $key => $v) {

    echo "<li> $key : $v  </li>";
}

echo "</ul>";

$tasksX = array(
    array(
        'title' => 'Creer Le landing Page',
        'due' => '10/05/22',
        'assigned_to' => 'Mohamed',
        'done' => true,
    ),
    array(
        'title' => 'Creer Le landing Page',
        'due' => '10/05/22',
        'assigned_to' => 'Reda',
        'done' => false,
    ),
    array(
        'title' => 'Creer Le landing Page',
        'due' => '10/05/22',
        'assigned_to' => 'sali',
        'done' => false,
    ),
    array(
        'title' => 'Creer Le landing Page',
        'due' => '10/05/22',
        'assigned_to' => 'Mohamed',
        'done' => true,
    ),
    array(
        'title' => 'Creer Le landing Page',
        'due' => '10/05/22',
        'assigned_to' => 'Firfir',
        'done' => false,
    ),
   
);
$length = count($tasks) +1 ;

for($i= 0 ; $i< $length; $i++){

foreach ( $tasksX[$i] as $val) {
    if($tasksX[$i]['done'] == false){
    echo $val ;
    }

}

}