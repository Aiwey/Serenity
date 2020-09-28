<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class HomepageCtrl {
    
    public function action_homepage() {
		        
        $variable = 1323;
        
        
       
            App::getMessages()->addMessage(new Message("Hello world message", Message::INFO));
        Utils::addInfoMessage("Or even easier message :-)");
        
            
        App::getSmarty()->assign("value",$variable);        
        App::getSmarty()->display("homepage.tpl");
        
        
    }
    
}
