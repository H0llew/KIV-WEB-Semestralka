<?php

require_once("IController.interface.php");

class LoginController implements IController {

    public function show(string $pageTitle): string
    {
        ob_start();
        require_once(DIR_VIEWS ."/LoginTemplate.tpl.php");
        return ob_get_clean();
    }
}