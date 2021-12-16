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
    public function sequence()
    {
        $arrays = [
            [1, 3, 2, 1], [1, 3, 2], [1, 2, 1, 2], [3, 6, 5, 8, 10, 20, 15],
            [1, 1, 2, 3, 4, 4], [1, 4, 10, 4, 2], [10, 1, 2, 3, 4, 5], [1, 1, 1, 2, 3],
            [0, -2, 5, 6], [1, 2, 3, 4, 5, 3, 5, 6], [40, 50, 60, 10, 20, 30], [1, 1],
            [1, 2, 5, 3, 5], [1, 2, 5, 5, 5], [10, 1, 2, 3, 4, 5, 6, 1], [1, 2, 3, 4, 3, 6],
            [1, 2, 3, 4, 99, 5, 6], [123, -17, -5, 1, 2, 3, 12, 43, 45], [3, 5, 67, 98, 3]
        ];

        $array = $arrays[random_int(0, count($arrays) - 1)];
        $n = $array[0] - 1;
        $control = 0;
        $result = true;

        foreach ($array as $key => $number) {
            if (count($array) <= 3) {
                $result = true;
                break;
            }
            if ($control <= 1) {
                if ($number > $n) {
                    $n = $number;
                    $result = true;
                } else {
                    if ($key == 1) $n = $number;
                    $control += 1;
                    if (count($array) == $key) {
                        $result = true;
                    } else {
                        $result = false;
                    }
                }
            } else {
                $result = false;
            }
        }

        $json["sequence"] = "Sequência: [" . implode(", ", $array) . "]";
        $json["result"] = $result ? "True" : "False";
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