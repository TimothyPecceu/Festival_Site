<html>
    <?php
        include './fragments/head.php';
    ?>
    <body>
        <?php
            include './fragments/menu.php';
        ?>
        <h1>Line-up</h1>
        <?php
            $result=  DatabaseConnector::selectFromTable("lineup");
            
            if($result->num_rows > 0){
                ?>
        <h2> Zaterdag </h2>
                <?php
                while($performance = $result->fetch_object()){
                    if($performance->day = "saturday"){
                        ?><p> 
                            <?php echo $performance->hour;?>   
                            <a href='./artists/'<?php echo $performance->artist;?>>
                            <?php echo $performance->artist; ?>
                            </a></p>
                        <?php
                    }
                }
            }
        ?>
    </body>
</html>

