<?php
	include_once "assets/includes/dbh.inc.php";
	if (isset($_GET["genre"]))
	{
		$sql = "SELECT * FROM books WHERE genre = '" . $_GET['genre'] . "' ORDER BY id DESC;";
	}
	else
	{
		$sql = "SELECT * FROM books ORDER BY id DESC;";
	}
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL statement failed!";
	} else {
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
	}
	while ($row = mysqli_fetch_assoc($result)) {
		echo
			'<div class="col-md-4 mb-5">
                <div class="card mb-4 product-wap rounded-0 h-100">
                    <div class="card rounded-0">
                        <img class="card-img img-fluid rounded-0 img-thumbnail w-100" style="height: 400px; object-fit: cover;" src="assets/new_img/book_covers/' . $row["imgName"] . '">';
                        if (isset($_SESSION["username"]))
						{ echo '
	                        <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-start justify-content-end">
	                            <ul class="list-unstyled">
	                                <li><a class="btn btn-danger text-black" href="assets/admin/delete.php?id=' . $row["id"] . '"><i class="far fa-window-close"></i></a></li><br> 
	                                <li><a class="btn btn-outline-light text-success" href="form_update.php?id=' . $row["id"] . '"><i class="fa fa-cogs"></i></a></li>
	                            </ul>
	                        </div>';
						}
						echo '
					</div>
	                    <div class="card-body w-100">
	                        <p class="h3 text-decoration-none text-capitalize"><b>' . $row["title"] . '</b></p>
	                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
	                            <li class="text-capitalize"><b>' . $row["author"] . '</b></li>
	                            <li class="pt-2">
	                                <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
	                                <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
	                                <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
	                                <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
	                                <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
	                            </li>
	                        </ul>
	                        <p class="h3 text-decoration-none text-capitalize text-black-75 text-center">' . $row["genre"] . '</p><hr>
	                        <ul class="list-unstyled d-flex justify-content-center mb-1">
	                            <li>
	                                <i class="text-warning fa fa-star"></i>
	                                <i class="text-warning fa fa-star"></i>
	                                <i class="text-warning fa fa-star"></i>
	                                <i class="text-muted fa fa-star"></i>
	                                <i class="text-muted fa fa-star"></i>
	                            </li>
	                        </ul>
							<p class="mb-0 text-center mx-auto">' . $row["price"] . '€</p><br>
							<div class="d-grid gap-2 col-6 mx-auto">
							  <a class="btn btn-success" href="shop-single.php?id=' . $row["id"] . '"">Buy</a>
							</div>
	                    </div>
	                </div>
	            </div>';
	}
?>