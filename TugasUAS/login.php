<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-4">
            <div class="card" style="top: 150px; ">
                <div class="card-body bg-dark">
                    <h4 class="text-center" style="color: white;"><b>Login</b></h4>
                    <hr>
                    <form method="POST" action="login_proses.php">
                        <div class="form-group">
                            <label style="color: white;">Email</label>
                            <input type="text" class="form-control" name="user" placeholder="Username Anda">
                        </div>
                        <div class="form-group">
                            <label style="color: white;">Password</label>
                            <input name="pass" type="password" class="form-control" placeholder="Password Anda">
                        </div>
                        <button type="submit" name="b_login" class="btn btn-outline-light"><b>Login</b></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>