<html>
    <?php
        include './fragments/head.php';
    ?>
    <body>
        <?php
            include './fragments/menu.php';
        ?>  
        <h1>Bestel tickets</h1>
        <h2>Selecteer </h2>
        <form action="login.php" method="POST">
            <fieldset class="form-group">
                <label for="email">zaterdag: </label>
                <input type="number" name="email" id="email" class="form-control">
            </fieldset>
            <fieldset class="form-group">
                <label for="pass">zondag: </label>
                <input type="number" name="password" id="pass" class="form-control">
            </fieldset>
            <fieldset class="form-group">
                <label for="confirm">combi: </label>
                <input type="number" name="confirm" id="confirm" class="form-control">
            </fieldset>
            <input type="submit" name="register" value="bestel" class="btn btn-primary"/>
        </form>
    </body>
</html>

