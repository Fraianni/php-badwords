<!-- 
    Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->


 <?php

    $word = $_GET["word_to_delete"];

    $text = 'Ciao, come stai? Una domanda a cui io non rispondo mai Ciao, come stai? Una domanda a cui io non rispondo mai ' ;
    $new_text = str_replace($word, '***', $text);


?>
 <p> <?php echo $text ?> </p>

<p> <?php echo $new_text ?> </p>



