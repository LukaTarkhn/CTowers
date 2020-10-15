<img src="https://calligraphy-towers.com/public/images/grandmaison.png" style="width: 120px; height: 120px; margin-bottom: 20px;" alt="Logo">
<!-- /.login-logo -->
<div class="card">
    <?php if(isset($_SESSION['error'])): ?>


        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-ban"></i><?=$_SESSION['error']; unset($_SESSION['error']);?></h5>
        </div>
    <?php endif;?>
    <div class="card-body login-card-body">
        <form action="<?=ADMIN;?>/user/login-admin" method="post">
            <div class="input-group mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
</div>