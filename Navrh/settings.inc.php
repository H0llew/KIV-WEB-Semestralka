<?php
//**** GLOBÁLNÍ NASTAVENÍ APLIKACE ****//

//__ dostupné stránky webu __//

//__ adresáře
/** Adresář ovladačů */
const DIR_CONTROLLERS = "Controllers";
/** Adresář šablon */
const DIR_VIEWS = "Views";
/** Adresář modelů */
const DIR_MODELS = "Models";

//__ webové stránky
const WEB_PAGES = array(
    // úvodní stránka
    "uvod" => array("file_name" => "IntroductionController.class.php",
                    "className" => "IntroductionController",
                    "title" => "TEST"),

    "prihlaseni" => array("file_name" => "LoginController.class.php",
                          "className" => "LoginController",
                          "title" => "TEST | LOGIN"),

    "registration" => array("file_name" => "RegistrationController.class.php",
    "className" => "RegistrationController",
    "title" => "TEST | LOGIN")
);

/** klíč defaultní webové stránky */
const DEFAULT_WEB_PAGE_KEY = "uvod";
