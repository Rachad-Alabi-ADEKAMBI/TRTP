<?php
	if (isset($_POST["submit"])) {
        
        //definition des variables de connexion
        $serveur = "localhost";
        $login = "root";
        $pas = "";   

        //connexion à la base de données
        $connexion=new PDO("mysql:host=$serveur;dbname=trtp", $login, $pas);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     
        //preparation de la requete
		$req = $connexion->prepare('INSERT INTO jobs
        (date_inscription, first_name, middle_name, family_name, adress,
        adress_plus, city, zip, email, phone_code, phone, job, 
        contrat, availability_date, letter)
        VALUES
        
        (NOW(), :first_name, :middle_name, :family_name, :adress,
            :adress_plus, :city, :zip, :email, :phone_code, :phone, :job,
            :contrat, :availability_date,:letter )
        ');

        //definition des variables de la base de données
        $req->bindParam(':first_name', $_POST["first-name"]);
        $req->bindParam(':middle_name', $_POST["middle-name"]);
        $req->bindParam(':family_name', $_POST["family-name"]);
        $req->bindParam(':adress', $_POST["adress"]);
        $req->bindParam(':adress_plus', $_POST["adress-plus"]);
        $req->bindParam(':city', $_POST["city"]);
        $req->bindParam(':zip', $_POST["zip"]);
        $req->bindParam(':email', $_POST["email"]);
        $req->bindParam(':phone_code', $_POST["phone-code"]);
        $req->bindParam(':phone', $_POST["phone"]);
        $req->bindParam(':job', $_POST["job"]);
        $req->bindParam(':contrat', $_POST["contrat"]);
        $req->bindParam(':availability_date', $_POST["availability-date"]);
        $req->bindParam(':letter', $_POST["letter"]);
        $req->execute();

        //REDIRECTION
        echo"candidature envoyée";
         }
?>