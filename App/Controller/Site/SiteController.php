<?php

namespace App\Controller\Site;
use App\Controller\Template\TemplateController;

class SiteController extends TemplateController{

    public function homePage()
    {
       $this->view("site/principal", ["title" => "Home"]);
    }

    public function homePage2()
    {
        echo "Aqui";
    }

}

