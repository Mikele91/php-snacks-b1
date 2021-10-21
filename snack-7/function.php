<?php


function media($voti){
        $somVoto= 0;
        foreach($voti as $voto){
            
            $somVoto =  $somVoto + $voto;
        }
        // var_dump($voti);
        // var_dump($somVoto);
        $media = round( $somVoto / count($voti), 2) ;
        

        return $media;
}
    