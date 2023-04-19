<link rel="stylesheet" href="assets/css/bootstrap.min.css">


<div class="login-container " id='login'>
    <div class="auth mx-4">
        <div class="card py-3 mt-5 col-12 col-sm-12 col-md-6 col-lg-4" style="margin: auto;">
            <div class="card-body">
                <form name="f1" action="index.php" onsubmit="validation()" method="POST">
                    <div class="text-center pb-2">
                        <h5 class="m-0 pb-3"> Login to the NotesMarket</h5>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" id="user" name="user"  autocomplete='off' placeholder="Enter Username" />
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass"  autocomplete='off' placeholder="Enter Password" />
                    </div>
                    <div class="text-center">
                        <button type="submit" id="btn" value="Login" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- // validation for empty field -->
<script>
    function validation() {
        var id = document.f1.user.value;
        var ps = document.f1.pass.value;
        if (id.length == "" && ps.length == "") {
            alert("User Name and Password fields are empty");
            return false;
        } else {
            if (id.length == "") {
                alert("User Name is empty");
                return false;
            }
            if (ps.length == "") {
                alert("Password field is empty");
                return false;
            }
        }
    }
</script>