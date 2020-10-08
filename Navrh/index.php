<?php
// spuštění aplikace
$app = new Application();
$app->launch();

/**
 * Vstupní bod("Rozcestník") aplikace
 *
 * @author Martin Jakubašek
 * @since 7.10.2020
 * @version alpha
 */
class Application
{

    public function __construct()
    {
        require_once("settings.inc.php");
        require_once("Controllers/IController.interface.php");
    }

    public function launch()
    {
        $pageKey = DEFAULT_WEB_PAGE_KEY;
        if (isset($_GET["page"]) && array_key_exists($_GET["page"], WEB_PAGES))
            $pageKey = $_GET["page"];
        ;
        $pageInfo = WEB_PAGES[$pageKey];
        require_once("Controllers/" . $pageInfo["file_name"]);

        $controller = new $pageInfo["className"];
        echo $controller->show($pageInfo["title"]);
    }
}