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
        ?>
                    <h2><?php echo $newsItem->title; ?></h2>
                    <p> <?php echo $newsItem->text; ?></p>
                    <p> <?php echo $newsItem->date; ?></p>
        <?php
                }
            }
        ?>
    </body>
</html>
