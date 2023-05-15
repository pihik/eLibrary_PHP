<!DOCTYPE html>
<html lang="en">

<?php
	include_once "assets/includes/dbh.inc.php";

	$result = mysqli_query($conn, "SELECT * FROM books WHERE id='" . $_GET['id'] . "'");
	$row = mysqli_fetch_array($result);


	include_once "assets/parts/header.php";
?>

<body>
    <!-- Start Top Nav -->
    <?php
    include_once "assets/parts/nav.php";
    include_once "assets/parts/modal.php";
    ?>

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid img-thumbnail w-100" src="assets/new_img/book_covers/<?php echo $row["imgName"]; ?>" style="height: 600px; object-fit: contain;" alt="Book cover" id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2 text-capitalize"><?php echo $row["title"]; ?></h1>
                            <p class="h3 py-2"><?php echo $row["price"]; ?>€</p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>
	                        <ul class="list-inline">
		                        <li class="list-inline-item">
			                        <h6>Author:</h6>
		                        </li>
		                        <li class="list-inline-item">
			                        <p class="text-capitalize"><strong><?php echo $row["author"]; ?></strong></p>
		                        </li>
	                        </ul>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Category:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p><strong><?php echo $row["genre"]; ?></strong></p>
                                </li>
                            </ul>

                            <h6>Description:</h6> <!-- TO DO -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once "assets/parts/footer.php";
    include_once "assets/parts/scripts.php";
    ?>

</body>

</html>