<html>
    <?php
        include './fragments/head.php';
    ?>
    <body>
        <?php
            include './fragments/menu.php';
        ?>
        <h1>Nieuws</h1>
        <?php
            $mysqli = new mysqli("localhost", "root", "root", "rockabilly");
            
            if($mysqli->connect_error){
                die('Connect Error (' . $mysqli->connect_errno . ')'
                        . $mysqli->connect_error);
            }
            
            $result = $mysqli->query("SELECT * FROM news ORDER BY date DESC");
            
            $mysqli->close();
            
            if($result->num_rows > 0){
                while($newsItem = $result->fetch_object()){
                    echo "<h2> $newsItem->title </h2>";
                    echo "<p> $newsItem->text </p>";
                }
            }
        ?>
    </body>
</html>
