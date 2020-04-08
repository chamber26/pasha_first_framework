<?php
//require __DIR__."/../vendor/autoload.php";
//
//use App\Database\SQL;
//use App\Database\Test;
//
//$sql = new SQL();
//$test = new Test("Джон", 34);

//var_dump( $sql->select(["name", "password", "login"])->from("users")->get() );

//echo count(["name", "id", "login"]);

//print_r ($sql);

//echo "</br>";
//echo "</br>";
//
//print_r ($test);
//
//echo "</br>";
//echo "</br>";
//
////$test->name="Archer";
////$test->age="3030";
//
//$test->getInfo();



$db_path = "mysql:host=localhost;dbname=aviatickets";
$db_user = "root";
$db_pass = null;
$db_options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    $db = new PDO ($db_path, $db_user, $db_pass, $db_options);


$try = $db->query("SELECT login FROM users ORDER BY name LIMIT 12");
$try_result = $try->fetchAll(PDO::FETCH_ASSOC);

print_r($try_result);