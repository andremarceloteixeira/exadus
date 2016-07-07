<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ob_start();
session_start();

//database credentials
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'data');

$db = new PDO("mysql:host=" . DBHOST . ";port=8889;dbname=" . DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//set timezone
date_default_timezone_set('Europe/London');


$stmt = $db->query('SELECT (name, age, job_title FROM exads_test ORDER BY id DESC');
try {

    while ($row = $stmt->fetch()) {

        echo '<p>' . $row['name'] . '</p>';
        echo '<p>' . $row['age'] . '</p>';
        echo '<p>' . $row['job_title'] . '</p>';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

try {

    //insert into database
    $job_title = "SENIOR PHP DEV";
    $age = 27;
    $name = "andre marcelo";
    $stmt = $db->prepare('INSERT INTO exads_test (name, age, job_title) VALUES (:name, :age, :job_title)');
    $stmt->execute(array(
        ':name' => $name,
        ':age' => $age,
        ':job_title' => $job_title
    ));

    exit;
} catch (PDOException $e) {
    echo $e->getMessage();
}




