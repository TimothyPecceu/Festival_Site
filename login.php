<html>
    <?php
        include './fragments/head.php';
    ?>
    <body>
        <?php
            include './fragments/menu.php';
        ?>
        <form action='<?php echo $_SERVER["PHP_SELF"]?>' method="POST">
            <fieldset class="form-group">
                <label for="email">e-mail: </label>
                <input type="email" name="email" id="email" class="form-control" required="true">
            </fieldset>
            <fieldset class="form-group">
                <label for="pass">wachtwoord: </label>
                <input type="password" name="password" id="pass" class="form-control" required="true">
            <input type="submit" name="login" value="Log in" class="btn btn-primary"/>
        </form>
        <a href="register.php">Nog geen account?</a>
  </body>
</html>

