<?php

error_reporting(0);

function encRSA($M){
    $data[0]=1; //inisiasi data[$i]=1
    
    for ($i=0; $i<=35; $i++){ //looping sejumlah kunci e=35
        $rest[$i]=$M%119; //inisiasi plainteks ($M)
        
        if($data[$i]>119){ /*jika data lebih dari n=119 maka kembalikan ke awal lagi (%119) */
            $data[$i+1]=$data[$i]*$rest[$i]%119; /*data baru merupakan perkalian data lama dengan plainteks sejumlah e=35 */
        } else {
            $data[$i+1]=$data[$i]*$rest[$i];
        }
    }
    
    $get=$data[35]%119;
    return $get;
}

function decRSA($E){
    $data[0]=1;
    
    for ($i=0; $i<=11; $i++){
        $rest[$i]=$E%119;
        
        if($data[$i]>119){
            $data[$i+1]=$data[$i]*$rest[$i]%119;
        } else {
            $data[$i+1]=$data[$i]*$rest[$i];
        }
    }
    
    $get=$data[11]%119;
    return $get;
}
    
?>