<?php require_once("../resources/config.php");?>
<?php require_once(TEMPLATE_FRONT.DS."header.php");?>
<div style="margin-left:2%;position:absolute;width:500px;">
<?php require_once(TEMPLATE_FRONT.DS."side_nav.php");?>
</div>
    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="">
            <h1 style="margin-left:15%;width:100%;height:100%;">Shop</h1>
        </header>

        <hr>

        <!-- Title -->
      
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <?php get_products_in_shop_page(); ?>

 

        </div>
        <!-- element en miniature -->
        <div class="row text-center">

            <?php get_products_in_shop_page_small(); ?>

 

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

<?php require_once(TEMPLATE_FRONT.DS."footer.php");?>