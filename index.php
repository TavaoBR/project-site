<?php

error_reporting(0);

require_once("vendor/autoload.php");

use App\Routers\WebMaster;

class Index{

    protected $webRota;
    protected $url;
    protected $metodo;

    public function __construct(){
       try{
          $this->webRota = new WebMaster;
          $this->url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
          $this->metodo = $_SERVER['REQUEST_METHOD'];
       }catch (Exception $e){
        error_log($e->getMessage(), 0);
        exit('Desculpe, ocorreu um erro interno.');
       }
    }

    protected function method($metodo)
    {
        if($this->webRota){
            switch($metodo)
            {
                    case 'Get':
                      case 'GET':
                        case 'get':
                        return $this->webRota->get($this->url);
                      break;

                        case 'Post':
                          case 'POST':
                            case 'post':
                             return $this->webRota->post($this->url);
                        break;
            }
        }
    }


    public function Rotas()
    {
      return $this->method($this->metodo);
    }
}


$index = new Index;
$index->Rotas();
