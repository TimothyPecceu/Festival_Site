<html>
    <?php
    include './fragments/head.php';
    ?>
    <body>
        <?php
        include './fragments/menu.php';
        ?>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>' method="POST">
            <fieldset class="form-group">
                <label for="email">e-mail: </label>
                <input type="email" name="email" id="email" class="form-control" required="true" >
            </fieldset>
            <fieldset class="form-group">
                <label for="firstName">voornaam: </label>
                <input type="text" name="firstName" id="firstName" class="form-control" required="true">
            </fieldset>
            <fieldset class="form-group">
                <label for="lastName">naam: </label>
                <input type="text" name="lastName" id="lastName" class="form-control" required="true" >
            </fieldset>
            <fieldset class="form-group">
                <label for="lastName">bericht: </label>
                <textarea name="message" id="message" class="form-control" rows="8"></textarea>
            </fieldset>
            <input type="submit" name="register" value="registreer" class="btn btn-primary"/>
        </form>
    </body>
</html>

