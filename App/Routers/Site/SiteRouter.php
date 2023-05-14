<?php

namespace App\Routers\Site;

use App\Controller\Site\SiteController;

class SiteRouter {

protected $siteController;

public function __construct()
{
      $this->siteController = new SiteController;
}

protected function get($url)
{
  switch($url)
  {
      case "/":
        return $this->siteController->homePage();
      break;
  }
}

public function renderGet($url)
{
  return $this->get($url);
}

}
