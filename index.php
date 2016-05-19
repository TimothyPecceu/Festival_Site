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
            $result = DatabaseConnector::selectFromTableOrderBy("news", "date", "DESC");
            
            if($result->num_rows > 0){
                while($newsItem = $result->fetch_object()){
                    echo "<h2> $newsItem->title </h2>";
                    echo "<p> $newsItem->text </p>";
                }
            }
        ?>
    </body>
</html>
