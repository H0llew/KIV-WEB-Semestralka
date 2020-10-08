<?php

require_once("PageTemplate.class.php");
$blueprint = new PageTemplate();

$blueprint->getTop();
$blueprint->getNavbar();

?>
    <div class="container">
        <form>
            <label for="login_name">Login:</label><br>
            <input type="text" id="login_name" name="login_name"><br>

            <label for="password">Login:</label><br>
            <input type="password" id="password" name="password"><br>

            <label for="password2">Login:</label><br>
            <input type="password" id="password2" name="password2"><br>

            <input type="submit" value="Submit">
        </form>
    </div>
<?php

$blueprint->getFooter();
$blueprint->getBottom();