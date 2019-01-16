<?php
$user=['name'=>'tsatsalas',
        'email'=> 'tsa@gmail.com',
        'age'=>35
];

$user=serialize($user);

setcookie('user',$user,time()+86400);

$user= unserialize($_COOKIE['user']);


echo $user['name'];
?>