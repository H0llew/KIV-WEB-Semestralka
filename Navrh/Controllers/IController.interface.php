<?php

/**
 * Rozhraní pro všechny ovladače
 */
interface IController{

    /**
     * Zajišťuje kód příslušné stránky
     *
     * @param string $pageTitle Titulek stránky.
     * @return string HTML5 kód stránky.
     */
    public function show(string $pageTitle) : string;
}