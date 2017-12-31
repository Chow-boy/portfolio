<?php

/***********************varibles********************************/
 $mot = null;
 $language = null;

if (isset( $_POST['word']) && isset($_POST['direction'])) {
  $mot = $_POST['word'];
  $language =  $_POST['direction'];
}




/***************************fonction******************************/
function translate($mot, $language){

  if ($language == "toEnglish") {
    $mot = strtolower($mot);
    $word = array("chien" => "dog", "fraise" => "strawberry", "eau" => "water", "boire" => "drink", "journal" => "newspaper");
    if(array_key_exists($mot, $word)){
      echo "<p>La traduction du mot <span>" . $mot . "</span> en anglais est <em>" . $word[$mot] . "</em>.</p>";
    }else{
     echo 'Le mot <span>'. $mot . '</span> est inconnu.';
   }

  }else if($language == 'toFrench'){
    $mot = strtolower($mot);
    $word = array("dog" => "chien", "strawberry" => "fraise", "water" => "eau", "drink" => "boire", "newspaper" => "journal");
    if(array_key_exists($mot, $word)){
      echo "<p>La traduction du mot <span>" . $mot . "</span> en français est <em>" . $word[$mot] . "</em>.</p>";
    }else{
     echo 'Le mot <span>'. $mot . '</span> est inconnu.';
   }
}

}
 ?>
