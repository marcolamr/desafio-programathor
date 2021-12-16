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
     *
     */
    public function lotery()
    {
        $sortNumbers = array();

        for ($i = 1; $i <= 20; $i++) {
            array_push($sortNumbers, random_int(1, 10));
        }

        $array = implode(", ", $sortNumbers);
        $uniques = array();

        foreach (array_count_values($sortNumbers) as $key => $value) {
            if ($value == 1) {
                array_push($uniques, $key);
            }
        }

        asort($uniques);
        $uniques = implode(", ", $uniques);

        $json["array"] = "Array sorteado = [${array}]";
        $json["uniques"] = "Os números que não se repetem são: ${uniques}";
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