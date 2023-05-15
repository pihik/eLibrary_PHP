<!DOCTYPE html>
<html lang="en">

<?php
include_once "assets/parts/header.php";
?>

<body>
    <!-- Start Top Nav -->
    <?php
    include_once "assets/parts/nav.php";
    include_once "assets/parts/modal.php";
    ?>
    <div class="container text-dark w-75 bg-light p-5 m-5 mx-auto rounded-1">
        <h1 class="fs-2"><b>Contact</b></h1><br><hr><br>
        <h4>I hope, I can answer all your questions and request</h4><br>
        <div class="border border-5 border-success rounded-4 p-3 w-50 mb-5">
            <p><b>Name:</b> Adrián Pažický</p>
	        <p><b>Email:</b> adrian.pazicky@student.ukf.sk</p>
            <p><b>Adress:</b> Bystričany - Chalmová, Gaštanová 656, 97245</p>
            <p><b>Number:</b> +421 915 847 127</p>
            <p><b>School:</b> UKF Nitra - aplikovaná informatika</p>
        </div>
        <hr>
    </div>
	<!--
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <h2>Contact us:</h2><br>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">Name</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Subject</label>
                    <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Message</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Let’s Talk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    -->

    <?php
    include_once "assets/parts/footer.php";
    include_once "assets/parts/scripts.php";
    ?>
</body>

</html>