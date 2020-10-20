<?php
session_start();
include("header.php");
include "helper.php";
?>

<?php
$user=array();
$error=array();
require ('mysqli_connect.php');

if (isset($_SESSION['SBUser'])){
    $user = get_user_info($con,$_SESSION['SBUser']);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require ('login-process.php');
}
?>

<section id="login-form">
    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">
            <div class="text-center pb-5">
                <h1 class="login-title text-light mt-5">Hyr</h1>
                <p class="font-ubuntu text-white-50 p-1 m-0">Dëshironi të blini diçka? Hyni në faqen tonë!</p>
                <span class="font-ubuntu text-light">Nuk keni një llogari? <a href="register.php">Regjistrohu</a></span>
            </div>
            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                        <img class="img rounded-circle camera-icon" style="width: 300px; height: 300px"; src="<?php echo isset($user['email'])? $user['profileImage']: './assets/profile/profile.jpg'; ?>" alt="defaultProfile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="login.php" method="post" enctype="multipart/form-data" id="log-form">
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="email" name="email" id="email" class="form-control" required placeholder="Email*">
                        </div>
                    </div>
                    <div class="form-row my-4">
                        <div class="col">
                            <input type="password" name="password" id="password" class="form-control" required placeholder="Fjalëkalimi*">
                        </div>
                    </div>
                    <div>
                        <?php
                            echo display_errors($error);
                        ?>
                    </div>
                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn reg-btn px-5">Hyr</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
include("footer.php");
?>
