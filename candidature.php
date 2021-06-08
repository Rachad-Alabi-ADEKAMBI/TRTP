<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=trtp;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO jobs
(date_inscription, first_name ,second_name, last_name,
 adress, city, zip, email, phone_code, phone, job, 
 contrat, availability_date)');


$first_name = $_POST["first-name"];
	$middle_name = $_POST["middle-name"];
	$last_name = $_POST["last-name"];
	$adress = $_POST["adress"];
	$adress_plus = $_POST["adress-plus"];
	$city = $_POST["city"];
	$zip = $_POST["zip"];
	$email = $_POST["email"];
	$phone_code = $_POST["phone-code"];
	$phone = $_POST["phone"];
	$zip = $_POST["zip"];
	$job = $_POST["job"];
	$contract = $_POST["contract"];
	$availability_date = $_POST["availability-date"];   


$req->execute(array(

	


	'date_inscription' => NOW(),
	'first_name' => $first_name,
	'second_name' => $second_name,
	'last_name' => $last_name,
	'adress' => $adress,
	'city' => $city,
	'zip' => $zip,
	'email' => $email,
	'phone_code' => $phone_code,
	'phone' => $phone,
	'job' => $job,
	'contrat' => $contract,
	'availability_date' => $availability_date));

	echo 'Le jeu a bien été ajouté !';
?>