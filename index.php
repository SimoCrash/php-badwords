<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $first_title = 'Vai in fondo al paragrafo';
        $long_string = "«Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? [33] At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.»(IT)«Tuttavia, perché voi intendiate da dove sia nato tutto questo errore, di quelli che incolpano il piacere ed esaltano il dolore, io spiegherò tutta la questione, e presenterò le idee espresse dal famoso esploratore della verità, vorrei quasi dire dal costruttore della felicità umana. Nessuno, infatti, detesta, odia, o rifugge il piacere in quanto tale, solo perché è piacere, ma perché grandi sofferenze colpiscono quelli che non sono capaci di raggiungere il piacere attraverso la ragione; e al contrario, non c'è nessuno che ami, insegua, voglia raggiungere il dolore in sé stesso, soltanto perché è dolore, ma perché qualche volta accadono situazioni tali per cui attraverso la sofferenza o il dolore si cerca di raggiungere un qualche grande piacere. Concentrandoci su casi di piccola importanza: chi di noi intraprende un esercizio ginnico, se non per ottenerne un qualche vantaggio? E d'altra parte, chi avrebbe motivo di criticare colui che desidera provare un piacere cui non segua nessun fastidio, o colui che fugge un dolore che non produce nessun piacere?Al contrario, però, noi con indignazione denunciamo e riteniamo meritevoli di odio quelli che, rammolliti e corrotti dai piaceri del momento, accecati dal desiderio, non prevedono a quali dolori e a quali sofferenze andranno incontro, e uguale colpa hanno quelli che abbandonano i propri doveri per pigrizia d'animo, cioè per evitare le fatiche e i dolori. Certamente è facile e rapido distinguere questi casi. Infatti nel tempo libero, quando abbiamo tutta la nostra possibilità di scegliere e niente ci ostacola dal fare ciò che ci piace di più, bisogna accogliere ogni piacere e respingere ogni dolore. Ma in altri momenti, o nei doveri inevitabili o negli obblighi che ci vengono dalle circostanze, spesso accadrà che si debba respingere il piacere e accogliere il fastidio. E così il saggio si regola scegliendo tra questi atteggiamenti, facendo in modo che o – respingendo il piacere – ne ottenga di più grandi, o – sopportando il dolore – ne eviti di peggiori.»";
        $censored_word = $_GET['censored_word'];
        $second_title = "Nuovo testo con censura";
        $censored_string = str_ireplace($censored_word, ' *** ', $long_string);
    ?>
    

    
    <h1><?php echo $first_title ?></h1>
    <br>
    <br>
    <h2><?php echo $long_string . 'I caratteri totali sono: ' . strlen($long_string); ?></h2>
    <br>
    <br>
    <form action="" method="GET">
        <label for="censored_word"></label>
        <input type="text" name="censored_word" id="censored_word" placeholder="Inserisci una parola da censurare" style="width:300px">
        <button>Censura la Parola</button>
    </form>
    <p>Hai selezionato la parola = <?php echo $censored_word ?></p>
    <br>
    <br>
    <h2><?php echo $second_title . ' senza la parola:' . '<h1 style="color: red; text-transform: uppercase;">' . $censored_word . '</h1>' ?></h2>
    <br>
    <br>
    <h2><?php echo $censored_string ?></h2>

</body>
</html>