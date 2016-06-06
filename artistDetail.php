<html>
    <?php
        include './fragments/head.php';
    ?>
    <body>
        <?php
            include './fragments/menu.php';
          
            $result=  DatabaseConnector::selectEquals("artist","id",$_GET["id"]);
            
             if($result->num_rows > 0){
                 $artist = $result->fetch_object();
             
        ?>
        <h1><?php echo $artist->name;?></h1>
        <p>
        <img src="./images/<?php echo $artist->image;?>" height=35% width=15% align="left"/>
        <?php echo $artist->description;?></p>
             <?php }?>
  </body>
</html>
