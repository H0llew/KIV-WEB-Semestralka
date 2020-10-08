<?php

require_once("PageTemplate.class.php");
$blueprint = new PageTemplate();

$blueprint->getTop();
$blueprint->getNavbar();
$blueprint->getFooter();
$blueprint->getBottom();


