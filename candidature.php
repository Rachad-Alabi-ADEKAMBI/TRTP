<?php
if (isset($_POST) AND isset($_POST['f_name']) AND isset($_POST['l_name']) AND isset($_POST['email_job']) AND isset($_POST['job_title_job']))
{
   extract($_POST);
   if(!empty($f_name) AND !empty($l_name) AND !empty($email_job) AND !empty($job_title))
   {  
      $receiver= "momo3344@hotmail.fr ";
      $query="Candidature";
      $message="Une nouvelle candidature \n
      Prenom: $f_name \n
      Second_prenom: $m_name \n
      Nom: $l_name \n
      Email: $ \n
      Objet: $user_query \n
      Titre du poste: $job_title_job \n
      Contrat: $contract_job \n
      Disponibilite: $availability_date_job \n
      $heading="From: $email_job \n Reply-To $email_job";
      mail($receiver, $query, $message, $heading);
      echo"Candidature envoyé.";
   }
   else{
      echo"Vous n'avez pas rempli tous les champs !!!";
   }
}

?>