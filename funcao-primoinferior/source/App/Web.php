<?php

namespace Source\App;

use Source\Core\Controller;

/**
 * Web Controller
 * @package Source\App
 */
class Web extends Controller
{
    /**
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    /**
     * SITE HOME
     */
    public function home(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("home", [
            "head" => $head
        ]);
    }

    /**
     * @param array $data
     */
    public function primes(array $data)
    {
        $primeNumbers = array();
        $initialNumber = $data["initialNumber"];
        $finalNumber = $data["finalNumber"];
        $controller = false;

        for ($i = $initialNumber + 1; $i < $finalNumber ; $i++) {
            for ($j = 2; $j < $i; $j++) {
                if($i % $j == 0){
                    $controller = false;
                    break;
                }else{
                    $controller = true;
                }
            }
            if($controller) {
                array_push($primeNumbers, $i);
            }
        }

        $totalNumbers = count($primeNumbers);
        $listNumbers = implode(", ", $primeNumbers);
        
        $json["message"] = "Numero Inicial = ${initialNumber} <br> Número Final = ${finalNumber} <br> Resposta: Encontrados ${totalNumbers} números primos, são eles: ${listNumbers}.";
        echo json_encode($json);
    }

    /**
     * SITE NAV ERROR
     * @param array $data
     */
    public function error(array $data): void
    {
        var_dump($data);
    }
}