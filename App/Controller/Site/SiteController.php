<?php

namespace App\Controller\Site;
use App\Controller\Template\TemplateController;

class SiteController extends TemplateController{

    public function homePage()
    {
       $this->view("site/principal", ["title" => "Home"]);
    }

}

