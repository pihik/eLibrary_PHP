<!DOCTYPE html>
<html lang="en">

<?php
include_once "assets/parts/header.php";
?>

<body>

    <?php
    include_once "assets/parts/nav.php";
    include_once "assets/parts/modal.php";
    ?>
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-3 order-lg-last">
                            <img class="img-fluid" src="./assets/new_img/Silmarillion_BOOK.jpg" alt="Silmarillion">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>The Silmarillion</b></h1>
                                <h3 class="h2">JRR Tolkien</h3>
                                <p>
	                                The Silmarillion is an account of the Elder Days, of the First Age of Tolkien’s world.
	                                It is the ancient drama to which the characters in The Lord of the Rings look back,
	                                and in whose events some of them such as Elrond and Galadriel took part. The tales of The Silmarillion are set in an age when Morgoth,
	                                the first Dark Lord, dwelt in Middle-Earth, and the High Elves made war upon him for the recovery of the Silmarils,
	                                the jewels containing the pure light of Valinor.</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-3 order-lg-last">
                            <img class="img-fluid" src="./assets/new_img/The_Witcher_Sword_of_destiny_BOOK.jpg" alt="Sword of destiny">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
	                            <h1 class="h1"><b>Sword of Destiny</b> The Witcher</h1>
                                <h3 class="h2">Andrzej Sapkowski</h3>
                                <p>
	                                Geralt the Witcher battles monsters, demons and prejudices alike in Sword of Destiny,
	                                the second collection of adventures in Andrzej Sapkowski’s groundbreaking epic fantasy series that inspired
	                                the Netflix show and the hit video games.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-3 order-lg-last">
                            <img class="img-fluid" src="./assets/new_img/Murder_on_orient_express_BOOK.jpg" alt="Murder on Orient Express">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
	                            <h1 class="h1"><b>Murder on Orient Express</b></h1>
                                <h3 class="h2">Agatha Christie</h3>
                                <p>
	                                Just after midnight, a snowdrift stops the famous Orient Express in its tracks as it travels through the mountainous Balkans.
	                                The luxurious train is surprisingly full for the time of the year but, by the morning, it is one passenger fewer.
	                                An American tycoon lies dead in his compartment, stabbed a dozen times, his door locked from the inside.</p><br>

	                            <p> One of the passengers is none other than detective Hercule Poirot. On vacation.</p><br>

	                            <p> Isolated and with a killer on board, Poirot must identify the murderer—in case he or she decides to strike again.</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>
                    Most popular categories of this month, choose your favorite one.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="shop.php?genre=Fantasy"><img src="./assets/new_img/gener_fantasy1.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Fantasy</h5>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="shop.php?genre=Detective"><img src="./assets/new_img/gener_detective.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Detective</h2>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="shop.php?genre=Sci-fi"><img src="./assets/new_img/gener_scifi.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Sci-fi</h2>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
	                    Wherever you are, whatever you do, however your mood is, this books will make your day better.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-3 m-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="./assets/new_img/hobbit_BOOK.jpg" height="400" class="card-img-top img-thumbnail" alt="Hobbit book cover">
                        </a>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">14.99€</li>
                            </ul>
                            <a href="#" class="h2 text-decoration-none text-dark">The Hobbit</a>
                            <p class="card-text">
	                            In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell,
	                            nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort.
                            </p>
	                        <p class="text-black h3 mt-auto"><b>JRR Tolkien</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 m-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="./assets/new_img/Verne_Tour_du_Monde.jpg" height="400" class="card-img-top img-thumbnail" alt="Arround the World in 80 days book cover">
                        </a>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">27.00€</li>
                            </ul>
                            <a href="#" class="h2 text-decoration-none text-dark">Around the World in 80 days</a>
                            <p class="card-text">
	                            One night in the reform club, Phileas Fogg bets his companions that he can travel across the globe in just eighty days.
	                            Breaking the well-established routine of his daily life, he immediately sets off for Dover with his astonished valet Passepartout.
                            </p>
	                        <p class="text-black h3 mt-auto"><b>Jules Verne</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 m-4">
                    <div class="card h-100">
                        <a href="#">
                            <img src="./assets/new_img/A_caribbean_mystery_BOOK.jpg" height="400" class="card-img-top img-thumbnail" alt="A Caribbean mystery book cover">
                        </a>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">18.99€</li>
                            </ul>
                            <a href="#" class="h2 text-decoration-none text-dark">A Caribbean mystery</a>
                            <p class="card-text">
	                            Miss Marple is drawn into a case of intrigue and black magic when a Major who bragged
	                            of owning a photo of a murderer dies under mysterious circumstances.
                            </p>
	                        <p class="text-black h3 mt-auto"><b>Agatha Christie</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

    <?php
    include_once "assets/parts/footer.php";
    include_once "assets/parts/scripts.php";
    ?>
</body>

</html>