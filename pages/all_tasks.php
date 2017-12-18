<?php include 'header.php';?>

<main role="main" class="container">

    <div class="starter-template">
        <?php
        //this is how you print something

        if ($data == false){
            echo '<p>you don\'t have any tasks</p>';
        }else{
            print utility\htmlTable::genarateTableFromMultiArray($data);
        }


        ?>
    </div>

</main><!-- /.container -->


<?php include 'footer.php';?>

