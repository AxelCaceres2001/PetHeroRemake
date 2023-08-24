<?php

namespace Controllers;

use DAO\UserDAO;
use Models\User as User;
use Others\Utilities;
use Controllers\MailController;

class HomeController
{

    public function __construct()
    {
    }

    public function Index($message = "", $type = "")
    {
        require_once(VIEWS_PATH . "home.php");
    }
}
