<?php
require 'jwt.php';

$jwt = new JWT();

$token = $jwt->create(array("id_user"=>123, "nome"=>"Alfredo Stochiero")); 

echo "TOKEN: ".$token; // 