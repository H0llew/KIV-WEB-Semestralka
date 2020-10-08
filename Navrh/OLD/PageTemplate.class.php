<?php

/**
 * @author Martin Jakubašek
 * @since 5.10.2020
 * @version alpha
 */
class PageTemplateOLD
{

    public function getHTMLHeader()
    {
        $this->getHTMLTop("test");
        $this->getHTMLNav();
    }

    public function getHMTLFoot()
    {
        $this->getHTMLFooter();
        $this->getHTMLBottom();
    }

    //

    private function getHTMLTop(string $pageTitle)
    {
        ?>
        <!doctype html>
        <html lang="cs">
        <head>
            <title><?php echo $pageTitle ?></title>
            <meta charset="UTF-8">

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        <body>
        <div class="container">
        <?php
    }

    private function getHTMLBottom()
    {
        ?>
        <p>ZÁKLADNÍ NÁVRH STRÁNKY</p>
        </div>
        </body>
        </html>
        <?php
    }

    private function getHTMLNav()
    {
        ?>
        <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
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
                </ul>

                <form class="form-inline mx">
                    <button class="btn" type="button">REGISTRACE</button>
                    <button class="btn" type="button">PŘIHLÁŠENÍ</button>
                </form>
            </div>
        </nav>
        <?php
    }

    private function getHTMLFooter()
    {
        ?>
        <footer class="fixed-bottom">
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

}

?>