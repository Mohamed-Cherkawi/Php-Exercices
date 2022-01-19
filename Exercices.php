<?php
//     // Exercice 2
//  echo "Hello Youcode <br>" ;

//     // Exercice 3

    $monNom = " Cherkaoui <br>" ;
//    $monAge = 19 ; 
//    $monPrenom = "Mohamed" ;
//    echo "$monNom  $monPrenom  $monAge <br>" ; 
//    echo '$monNom  $monPrenom  $monAge <br>' ; 

   /*La difference ce que la deuxime ne prend pas en considération
   ces variables , il les considére comme une chaine de caracthère pa plus 
   */


    $str = <<<MYTEXT
    This is a
    demo message
    with heredoc $monNom
    MYTEXT;
    
    echo $str;

    $str2 = <<<'MYTEXT'
    This is a
    demo message
    with heredoc $monNom
    MYTEXT;
    
    echo $str2;

    // L'avantage d'utiliser HEREDOC ou bien NOWDOC c'est que on a pas besoin d'écrire chque fois le signe de passer \ , cette methode ne permet d'écrire directement sans problèmes.
 //   Heredoc strings are like double-quoted strings without escaping.
 //  Nowdoc strings are like single-quoted strings without escaping.

