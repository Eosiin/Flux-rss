<?php
require('../data/data.php');


try{
	$rss = recupXML($array['mobil']);
	$animes = $rss->channel->item;
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