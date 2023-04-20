<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .pass-text {
        position: absolute;
        top: 61%;
        right: 13%;
    }

    .login-container {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999 !important;
        width: 100%;
        background-color: #ddd;
    }

    .auth {
        display: flex;
        height: 100vh;
        align-items: center;
    }

    .login-container .auth {
        justify-content: center;
    }

    #main_content {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        -ms-flex-pack: center;
        justify-content: center;
        min-height: 100%;
    }
</style>
<div id="main_content">
    <div class="login-container" id='login' style="display: block;">
        <div class="auth mx-4">
            <div class="card py-3 py-3 col-12 col-sm-6 col-md-5 col-lg-4">
                <div class="card-body">
                    <form name="f1" action="index.php" onsubmit="return validation()" method="POST">
                        <div class="text-center pb-2">
                            <h5 class="m-0 pb-3">Login to the NotesMarket</h5>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" id="user" name="user" autocomplete='off' placeholder="Enter Username" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass" autocomplete='off' placeholder="Enter Password" />
                            <!-- <i class="fa fa-eye" id="togglePassword" onclick="myFunction()" style="position:absolute; top:61%;right:13%; cursor: pointer;"></i> -->
                            <span class="pass-text" onclick="password_show_hide();">
                                <i class="fa fa-eye d-none" id="hide_eye" ></i>
                                <i class="fa fa-eye-slash " id="show_eye"></i>
                            </span>
                        </div>
                        <div class="text-center">
                            <button type="submit" id="btn" value="Login" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // validation for empty field login -->
<script>
    function validation() {
        var id = document.f1.user.value;
        var ps = document.f1.pass.value;
        if (id.length == "" && ps.length == "") {
            alert("User Name and Password fields are empty");
            console.log(id.length);
            return false;
        } else {
            if (id.length == "") {
                alert("User Name is empty");
                console.log(ps.length);
                return false;
            }
            if (ps.length == "") {
                alert("Password field is empty");
                console.log(id.length);
                return false;
            }
        }
    }
    // for password show/hide
    function password_show_hide() {
        var x = document.getElementById("pass");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }
    // function myFunction() {
    //     var x = document.getElementById("pass");
    //     if (x.type === "password") {
    //         x.type = "text";
    //     } else {
    //         x.type = "password";
    //     }
    // }
</script>