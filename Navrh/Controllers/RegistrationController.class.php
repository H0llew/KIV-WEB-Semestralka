<?php

require_once("IController.interface.php");

class RegistrationController implements IController {

    public function show(string $pageTitle): string
    {
        ob_start();
        require_once(DIR_VIEWS ."/RegistrationTemplate.tpl.php");
        return ob_get_clean();
    }
}