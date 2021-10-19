Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

<?php 
// $random = rand(1,100);
$tappa1=[

    [
        "casa" => "Bisceglie",
        "puntCasa" => "60",
        "trasferta" => "Milano",
        "puntTrasferta" => "40",
    ],
    [
        "casa" => "Torino",
        "puntCasa" => "10",
        "trasferta" => "Firenze",
        "puntTrasferta" => "20",
    ],
    [
        "casa" => "Roma",
        "puntCasa" => "90",
        "trasferta" => "Napoli",
        "puntTrasferta" => "20",
    ],

];

// echo $tappa1[1]["casa"];
for( $i = 0; $i< count($tappa1); $i++){
    echo "  {$tappa1[$i]["casa"]} ";
    echo " vs {$tappa1[$i]["trasferta"]} ";
    echo "punteggio: {$tappa1[$i]["puntCasa"]} -";
    echo " {$tappa1[$i]["puntTrasferta"]} ";
}


?>