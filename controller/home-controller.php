<?php
require('../data/data.php');


try{
	$mobile = recupXML($array['mobile']);
    $pc = recupXML($array['pc']);
    $ps5 = recupXML($array['PS5']);
    $wii = recupXML($array['wii']);
    $switch = recupXML($array['switch']);
    $rss = [
        'mobile' => $mobile->channel->item,
        'pc'=> $pc->channel->item,
        'ps5' => $ps5->channel->item,
        'wii' => $wii->channel->item,
        'switch' => $switch->channel->item
    ];
}catch(Exception $e){
    echo $e->getMessage();
}


function recupXML($url){
	if(!@$rss = simplexml_load_file($url)){
        throw new Exception('Flux introuvable');
    }else{
    	return $rss;
    }
}