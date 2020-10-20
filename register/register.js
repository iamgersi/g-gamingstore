$(document).ready(function (e) {

    let $uploadfile = $('#register .upload-profile-image input[type="file"]');

    $uploadfile.change(function () {
        readURL(this);
    });

    $("#reg-form").submit(function (event) {
        let $password = $("#password");
        let $confirm = $("#confirm_pwd");
        let $email = $("#email");
        let $address = $("#address");
        let $postalCode = $("#postalCode");
        let $error = $("#confirm_error");
        let $emailError = $("#confirm_email_error");
        let $postalcodeError = $("#confirm_postalcode_error");
        let $addressError = $("#confirm_address_error");

        if($password.val() === $confirm.val()){
            return true;
        }else{
            $error.text("Fjalëkalimi nuk përputhet!");
            event.preventDefault();
        }
        if ($email.val() === null){
            $emailError.text("Ju lutemi vendosni emailin tuaj!");
            event.preventDefault();
        }
        if ($address.val() === null){
            $addressError.text("Ju lutemi vendosni adresën tuaj!");
            event.preventDefault();
        }
        if($postalCode.val()===null) {
            $postalcodeError.text("Ju lutemi vendosni kodin tuaj postar!");
            event.preventDefault();
        }
    });
});

function readURL(input) {
    if(input.files && input.files[0]){
        let reader = new FileReader();
        reader.onload = function (e) {
            $("#register .upload-profile-image .img").attr('src', e.target.result);
            $("#register .upload-profile-image .camera-icon").css({display: "none"});
        }

        reader.readAsDataURL(input.files[0]);

    }
}