<?php

//login to database
if (isset($_POST["submit"])) {

        $serveur = "localhost";
        $login = "root";
        $pas = "";
                echo("iixii");
      /*
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


        $connexion=new PDO("mysql:host=$serveur;dbname=trtp", $login, $pas);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $req = $connexion->prepare("INSERT INTO jobs
         (date_inscription, first_name ,second_name, last_name, adress, city, zip, email,
         phone_code, phone, job, contrat, availability_date)VALUES (NOW(), :first_name, 
         :middle_name, :last_name, :adress, :city, :zip, :email, :phone_code, :phone, :job,
         :contrat, :availability_date)


$req->bindParam(':first_name', $first_name);
$req->bindParam(':middle_name', $middle_name);
$req->bindParam(':last_name', $last_name);
$req->bindParam(':adress', $adress);
$req->bindParam(':city', $city);
$req->bindParam(':zip', $zip);
$req->bindParam(':email', $email);
$req->bindParam(':phone_code', $phone_code);
$req->bindParam(':phone', $phone);
$req->bindParam(':job', $job);
$req->bindParam(':contrat', $contract);
$req->bindParam(':availability_date', $availability_date);


$req->execute();

echo:"envoye";
         }
         */
?>