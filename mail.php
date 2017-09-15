<?php



 //if(isset($_POST['button']))
 //{
 //if(!empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['Email']) AND !empty($_POST['Messages']))
 //{
 $header="MINE-Version: 1.0\r\n";
 $header.='From:"Gmail.com"<support@gmail.com>'."\n";
 $header.='Content-Type:text/html; charset="utf-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';

 $message='
 <html>
     <body>
           <div align="center">
             <u>Nom et Prénom de l\'exepéditeur :</u>'.$_POST['Nom'].' . '.$_POST['Prenom'].'<br/>
             <u>Mail de l\'exepéditeur :</u>'.$_POST['Email'].'<br/>
             '.$_POST['Messages'].'<br/>
           </div>
     </body>
   </html>
 ';

 mail("lamine.chowboy@gmail.com", "salut test de chowboy !", $message, $header);
 //echo "Votre message a bien été envoyé !";
 //}
 //else
 //{
 //$msg="Tous les champs doivent étre complétés !";
// }

 //}
  ?>
