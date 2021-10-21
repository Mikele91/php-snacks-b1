Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.


<?php 

    $studenti=[
        [

            "nome"=>"Michele",
            "cognome"=> "Amoruso",
            "voti"=> [ 5, 6, 7, 8, 9 , 10 ],
        ],
        [

            "nome"=>"laura",
            "cognome"=> "cubero",
            "voti"=> [ 8, 9, 7, 10, 9 , 10 ],
        ],

    ];

include __DIR__ . "/function.php"

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    
      <?php foreach ($studenti as $studente) {?>

         <ul>
             <li> <?php echo $studente["nome"]  ?></li>
             <li> <?php echo $studente["cognome"]  ?></li>
             <li> <?php echo  media($studente["voti"] )  ?></li>


         </ul>
        <?php } ?>
    </body>
</html>