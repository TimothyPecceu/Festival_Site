<html>
    <?php
        include './fragments/head.php';
    ?>
    <body>
        <?php
            include './fragments/menu.php';
            
            function test_input($data){
                 $data = trim($data);
                 $data = stripslashes($data);
                 $data = htmlspecialchars($data);
                 return $data;
            }
            
            $email = $pass = $first = $last = "";
            $emailErr = $passErr = $firstErr = $lastErr = "";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST["email"]) && !empty($_POST["email"])){
                    if((DatabaseConnector::exists("user", "email", $_POST["email"])->num_rows == 0)){
                        $email = test_input($_POST["email"]);
                    }else{
                        $emailErr= "email is reeds in gebruik!";
                    }
                }else{
                    $emailErr= "email is verplicht!";
                }
                if(isset($_POST["password"]) && !empty($_POST["password"])){
                    if($_POST["password"] == $_POST["confirm"]){
                        $pass = hash("sha256",test_input($_POST["password"]));
                    }else{
                        $passErr= "wachtwoorden zijn niet gelijk!";
                    } 
                }else{
                    $passErr= "wachtwoord is verplicht!";
                }
                if(isset($_POST["firstName"]) && !empty($_POST["firstName"])){
                    $first = test_input($_POST["firstName"]);
                }else{
                    $firstErr= "voornaam is verplicht!";
                }
                if(isset($_POST["lastName"]) && !empty($_POST["lastName"])){
                    $last = test_input($_POST["lastName"]);
                }else{
                    $lastErr= "naam is verplicht!";
                }
                if(empty($emailErr) && empty($passErr) && empty($firstErr) && empty($lastErr)){
                    $fields = "(`email`,`password`,`first_name`,`last_name`)";
                    $values = "('".$email."','".$pass."','".$first."','".$last."')";
                    DatabaseConnector::insert("user", $fields, $values);
                }
            }
            
        ?>
        <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>' method="POST">
            <fieldset class="form-group">
                <label for="email">e-mail: </label>
                <input type="email" name="email" id="email" class="form-control" required="true" value="<?php echo $email?>"><label><?php echo $emailErr?></label>
            </fieldset>
            <fieldset class="form-group">
                <label for="pass">wachtwoord: </label>
                <input type="text" name="password" id="pass" class="form-control" required="true"><label><?php echo $passErr?></label>
            </fieldset>
            <fieldset class="form-group">
                <label for="confirm">herhaal wachtwoord: </label>
                <input type="text" name="confirm" id="confirm" class="form-control" required="true">
            </fieldset>
            <fieldset class="form-group">
                <label for="firstName">voornaam: </label>
                <input type="text" name="firstName" id="firstName" class="form-control" required="true" value="<?php echo $first?>"><label><?php echo $firstErr?></label>
            </fieldset>
            <fieldset class="form-group">
                <label for="lastName">naam: </label>
                <input type="text" name="lastName" id="lastName" class="form-control" required="true" value="<?php echo $last?>"><label><?php echo $lastErr?></label>
            </fieldset>
            <input type="submit" name="register" value="registreer" class="btn btn-primary"/>
        </form>
  </body>
  <script>
      
  </script>
</html>