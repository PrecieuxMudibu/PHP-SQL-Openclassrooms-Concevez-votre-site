<?php
// $isAllowedToEnter = true;

// if ($isAllowedToEnter) {
//     echo "Bienvenue petit nouveau. :o)";
// }
// else {
//     echo "T'as pas le droit d'entrer !";
// }


// PREMIERE FACON DE FAIRE (LA DEUXIEE EST DANS LE FICHER CONDITIONS2.PHP)
$chickenRecipesEnabled = true;

if ($chickenRecipesEnabled) {
    echo '<h1>Liste des recettes à base de poulet</h1>';
}


// SWITCH
$grade = 10;

switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu es très mauvais";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Tu es mauvais";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>

