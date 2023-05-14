<?php

namespace App\Routers;

use App\Routers\Site\SiteRouter;

class WebMaster{

    protected $site;

    public function __construct()
    {
      $this->site = new SiteRouter;
    }

    private function verificaRotaGetExiste($url)
    {
      $site = $this->site->renderGet($url);

      switch(true)
      {
          case (isset($site)):
            return $site;
          break;
      }
    }

    public function get($url)
    {
       return $this->verificaRotaGetExiste($url);
    }

    private function verificaRotaPostExiste($url)
    {

    }

    public function post($url)
    {
      return $this->verificaRotaPostExiste($url);
    }
}
