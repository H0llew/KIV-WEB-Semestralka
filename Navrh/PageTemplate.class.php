<?php

/**
 * Třída obsahující zákládní šablony každé stránky projektu
 * Šablony používají pro stylizaci bootstrap 4
 *
 * @author Martin Jakubašek
 * @since 7.10.2020
 * @version alpha
 */
class PageTemplate
{

    /**
     * Vytvoří hlavičku HTML5 stránky a zároveň vytvoří začátek těla stránky.
     * Hlavička a tělo splňují požadavky pro použití bootstrap 4
     */
    public function getTop()
    {
        ?>
        <!doctype HTML>
        <html lang="cs">
        <head>
            <title>TITLE</title>
            <meta charset="UTF-8">
            <!-- bootstrap -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        <body>
        </html>
        <?php
    }

    /**
     *  Vytvoří plně responzivní navigační lištu stránky
     */
    public function getNavbar()
    {
        ?>
        <nav class="navbar navbar-expand-md bg-light navbar-light">
            <!-- LOGO -->
            <a class="navbar-brand" href="#">LOGO</a>

            <!-- tlačítko pro kolaps -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navbar prvky -->
            <div class="collapse navbar-collapse" id="collNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">O NÁS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">TERMÍNY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ČLÁNKY</a>
                    </li>
                    <li class="nav-item">
                        <a href='index.php?page=prihlaseni'>LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a href='index.php?page=registration'>REGISTRACE</a>
                    </li>
                </ul>

                <form class="form-inline mx">
                    <button class="btn" type="button">REGISTRACE</button>
                    <button class="btn" type="button">PŘIHLÁŠENÍ</button>
                </form>
            </div>
        </nav>
        <?php
    }

    /**
     * Vytvoří plně responzivní zakončení stránky
     */
    public function getFooter()
    {
        ?>
        <footer class="fixed-bottom bg-light">
            <hr>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">O nás</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sponzoři</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Staň se adminem</a>
                </li>
            </ul>
        </footer>
        <?php
    }


    /**
     * Vytvoří zakončení stránky
     */
    public function getBottom()
    {
        ?>
        </body>
        </html>
        <?php
    }
}