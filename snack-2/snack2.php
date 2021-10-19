Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

<?php 

$persona =[
    
    "name"=>$_GET['name'],
    "email"=>$_GET['email'],
    "age" =>$_GET['age'],
];

if(!empty ($persona)){
    if( strlen($persona["name"]) > 4 && strpos( $persona["email"], "@")  && strpos( $persona["email"], ".") && is_numeric($persona["age"]) ){
        echo "accesso riuscito";
    }else{
        echo "accesso negato";
    }
}

?>