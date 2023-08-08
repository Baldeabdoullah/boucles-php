<?php
// les boucles
// for ($i = 0; $i < 10; $i++) {
//     echo "nombre $i <br>";
// }

// echo "autre...";

// les while loop

// while(condition ) {
//     code...

// }

// $i = 0;
// while ($i < 10) {
//     echo "$i fois <br>";
//     $i++;
// }

// $i = 1;
// while ($i <= 12) {
//     echo " 9 x $i = " . 9 * $i . '<br>';
//     $i++;
// }

// boucles for
// foreach(arrays as array) {
//     code....

// }

$users = [
    [
        'nom' => 'kamdjou',
        'email' => 'kamdjou@gmail.com',
        'age' => 30
    ],

    [
        'nom' => 'duplex',
        'email' => 'duplex@gmail.com',
        'age' => 20
    ],

    [
        'nom' => 'doli',
        'email' => 'doli@gmail.com',
        'age' => 27
    ],

];


echo '<br>';
// foreach ($users as $user) {

//     echo $user['nom'] . "-" . $user['email'] . "-" . $user['age'] . "<br>";
// }

// format json
print_r(json_encode($users));
