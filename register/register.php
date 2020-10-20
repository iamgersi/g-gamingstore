<?php
include("header.php");
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require ('register-process.php');
    }
?>

<section id="register">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-light mt-5">Regjistrohu</h1>
                <p class="font-ubuntu text-white-50 p-1 m-0">Regjistrohuni për të hyrë në botën e videolojërave</p>
                <span class="font-ubuntu text-light">Unë kam një llogari <a href="login.php">Hyr</a></span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img class="camera-icon" src="./assets/camera_icon.png" alt="camera">
                    </div>
                    <img src="./assets/profile.jpg" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                    <small class="form-text text-white-50">Zgjidh Foton</small>
                    <input class="form-control-file" form="reg-form" name="profileUpload" id="upload-profile" type="file">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['firstName'])) echo $_POST['firstName']; ?>" name="firstName" id="firstName" class="form-control" placeholder="Emër">
                        </div>
                        <div class="col">
                            <input type="text" value="<?php if (isset($_POST['lastName'])) echo $_POST['lastName']; ?>" name="lastName" id="lastName" class="form-control" placeholder="Mbiemër">
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" name="email" id="email" class="form-control" required placeholder="Email">
                            <small id="confirm_email_error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" name="password" id="password" class="form-control" required placeholder="Fjalëkalimi">
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" name="confirm_pwd" id="confirm_pwd" class="form-control" required placeholder="Konfirmo Fjalëkalimin">
                            <small id="confirm_error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="text" name="address" id="address" class="form-control" required placeholder="Adresa">
                            <small id="confirm_address_error" class="text-danger"></small>
                        </div>
                        <div class="col">
                            <input type="text" name="postalCode" id="postalCode" class="form-control" required placeholder="Kodi Postar">
                            <small id="confirm_postalcode_error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="agreement" class="form-check-input" required>
                        <label for="agreement" class="font-ubuntu form-check-label text-white-50">Unë jam dakord me <a
                                    href="#">termat, kushtet dhe politikën</a>.</label>
                    </div>
                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn reg-btn px-5">Regjistrohu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
include("footer.php");
?>
