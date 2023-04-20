<?php

namespace app\controllers;

use core\Controller;
use RedBeanPHP\R;

/**@property Main $model */
class MainController extends Controller
{
    function indexAction()
    {
        $this->setMeta('Главная страница', 'Description..', 'Keywords...');
        $names = $this->model->get_names();
        $one_name = R::getRow( 'SELECT * FROM name WHERE id = 2 ');
    }

}