<?php
    //$_SESSION["username"] = "Admin";
?>

<!DOCTYPE html>

<?php
include_once "assets/parts/header.php";
?>

<body style="min-height: 100vh;">
    <!-- Start Top Nav -->
    <?php
    include_once "assets/parts/nav.php";
    include_once "assets/parts/modal.php";
    ?>

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Filter:</h1>                             <!-- TO DO -->
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Categories
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
	                        <?php
		                        include_once "assets/parts/categories.php";
	                        ?>
	                        <li><a class="text-decoration-none" href="shop.php">All</a>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Sale
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Price
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
	                    <ul class="collapse show list-unstyled pl-3">
		                    <?php
			                    include_once "assets/parts/price_slider.php";
		                    ?>
		                    <!-- slider -->
	                    </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Choose wisely</h3><br>
                    </div>
                </div>
                <div class="row">
                    <?php
                    include_once "assets/admin/book_cards.php";
                    ?>
                </div><br><br><hr><br>
                <?php
                if (isset($_SESSION['username']))
                {
	                include_once "assets/admin/upload.php";
                }
?>

            </div>
        </div>
    </div>
    <!-- End Content -->

    <?php
    include_once "assets/parts/footer.php";
    include_once "assets/parts/scripts.php";
    ?>
</body>

</html>