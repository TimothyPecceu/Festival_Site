<html>
    <?php
        include './fragments/head.php';
    ?>
    <body>
        <?php
            include './fragments/menu.php';
          
            $result=  DatabaseConnector::selectEquals("news","id",$_GET["id"]);
            
             if($result->num_rows > 0){
                 $artikel = $result->fetch_object();
             
        ?>
        <h1><?php echo $artikel->title;?></h1>

             <?php }?>
  </body>
</html>