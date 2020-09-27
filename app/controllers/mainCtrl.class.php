<?php

namespace app\controllers;

use core\App;


class mainCtrl {
    
    public function action_browseBands() {
	$records = App::getDB()->select("band",
            ["idBand","BandName","DateCreated","DateEnded"]
        );
         App::getSmarty()->assign("band", $records);
         App::getSmarty()->display("browseBands.tpl");	        
        
    }
    
    public function action_browseAlbums() {
        $records = App::getDB()->select("album",
//                [
//            "[<>]label" =>["Label_idLabel",'idLabel']
//        ],[
//            "[<>]band" =>["Band_idBand",'idBand']
//        ],
            ["idAlbum","AlbumName","AlbumGenre","AlbumDescription","AlbumReleaseDate","AlbumCoverPath","Label_idLabel","Band_idBand"]
        );
         App::getSmarty()->assign("album", $records);
         App::getSmarty()->display("browseAlbums.tpl");
    }
    
}
