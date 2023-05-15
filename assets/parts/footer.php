<footer class="bg-dark" style="position: sticky; top: 100%;" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">eLibrary</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        Trieda Andreja Hlinku 1, 949 74 Nitra-Chrenová
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none" href="tel:+421-915-847-127">+421 915 847 127</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:adrian.pazicky@student.ukf.sk">adrian.pazicky@student.ukf.sk</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Genres</h2> <!-- TO DO -->
                <ul class="list-unstyled text-light footer-link-list">
	                <?php
		                include "assets/parts/categories.php";
	                ?>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="index.php">Home</a></li>
                    <li><a class="text-decoration-none" href="about.php">About Us</a></li>
                    <li><a class="text-decoration-none" href="shop.php">Shop</a></li>
                    <li><a class="text-decoration-none" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                        Copyright &copy; 2021 Company Name
                        | Designed by <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>