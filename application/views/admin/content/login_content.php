<div class="content-wrapper" style="padding-top: 5%;">
    <div class="login-box" style="margin: 0 auto;">
        <div class="login-logo">
            <a href="<?= base_url('Welcome/show_home') ?>"><b><i class="fa fa-desktop" aria-hidden="true"></i> Abdul</b>Komputer</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Silahkan login</p>

            <form action="<?= base_url('Welcome/login')?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="rmb">
                            <label class="form-check-label" for="rmb">Remember me</label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-success btn-block">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="#">Saya lupa password</a><br>
            Belum memiliki akun? <a href="<?= base_url('Welcome/show_register') ?>" class="text-center">Daftar</a> sekarang
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
</div>
