<?php
if (isset($_POST) AND isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['subject']) AND isset($_POST['message']))
{
   extract($_POST);
   if(!empty($name) AND !empty($email) AND !empty($subject) AND !empty($user_message))
   {     
      $receiver= "momo3344@hotmail.fr ";
      $query="Formulaire de contact";
      $message="Une nouvelle question \n
      Nom: $name \n
      Email: $email \n
      Objet: $subject \n
      Message: $message";
      $heading="From: $name \n Reply-To $email";
      mail($receiver, $query, $message, $heading);
      echo"Le mail a bien été envoyé.";
   }
   else{
      echo"Vous n'avez pas rempli tous les champs !!!";
   }
}

?>