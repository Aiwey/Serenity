<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('homepage'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('homepage', 'HomepageCtrl');
Utils::addRoute('admin', 'adminCtrl');
Utils::addRoute('adminUsers', 'adminCtrl');
Utils::addRoute('adminAlbums','adminCtrl');
Utils::addRoute('adminLabels','adminCtrl');
Utils::addRoute('adminArtists','adminCtrl');
Utils::addRoute('adminComments','adminCtrl');
Utils::addRoute('adminBands','adminCtrl');

Utils::addRoute('browseBands','mainCtrl');
Utils::addRoute('browseAlbums','mainCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
