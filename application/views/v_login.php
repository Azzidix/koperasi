<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <link rel="icon" href="assets/img/Untitled-1.ico">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Login | Koperasi Simpan Pinjam</title>
    <!-- Load Bootstrap -->
    <link rel="stylesheet" href="<?=base_url('/assets/bootstrap/css/bootstrap.min.css')?>">
    <!-- Load Font Awesome -->
    <link rel="stylesheet" href="<?=base_url('/assets/font-awesome-4.7.0/css/font-awesome.min.css')?>">
    <!-- Load Custom Css -->
    <link rel="stylesheet" href="<?=base_url('/assets/style/style.css')?>">
</head>

<body>
    <div class="warper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pt-4 pb-4">
                     <div class="image">
                        <img src="<?=base_url('/assets/img/Untitled-2.jpg')?>" width="80px" height="80px" alt="koperasi">
                    </div>
                    <h4 class="title mb-0">Koperasi Simpan Pinjam</h4>
                    <!-- <small class="text-muted">v.1.0.0</small> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center p-3 mx-auto">
                    <div class="card rounded shadow-sm">
                        <div class="card-body">
                            <?php
                            if ($this->session->userdata('login_message') == 'gagal')
                            {
                                echo '<div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Login Gagal!</strong>
                                    </div>';
                            }
                            else if ($this->session->userdata('logout_message') == 'berhasil')
                            {
                                echo '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Logout Berhasil!</strong>
                                    </div>';
                            }
                            ?>
                            
                            
                            <div class="login-title">
                                <h5>Log-In</h5>
                            </div>
                            <div class="login-form mt-4">
                                <form method="POST" action="<?=site_url('login/cek_login/')?>">
                                    <div class="form-row">
                                        <div class="form-group col-md-12 p-0 text-left">
                                            <input class="form-control" type="text"  name="username" placeholder="Username" id="user">
                                            <span class="text-danger err-msg-1 small"><i> Masukan Username Anda</i></span>
                                        </div>
                                        <div class="form-group col-md-12 p-0 text-left">
                                            <input class="form-control" type="password" name="password"  placeholder="Password" id="pass">
                                            <span class="text-danger err-msg-2 small" ><i> Masukan Password Anda</i></span>
                                            <span class="show-pass text-muted" id="btnShowPass"><i class="fa fa-eye-slash"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group text-right w-100">
                                            <a href="<?=site_url('login/signup/')?>"><!-- Daftar Akun? --></a>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <a class="w-100"><button type="submit" class="btn btn-danger btn-block" id="btnLogin">
                                        	Masuk
                                        </button></a>
                                    </div>
                                </form>
                            </div>
                            <div class="login-forgot text-right mt-2">
                                <a href="#">Reset Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mb-4">
                <div class="p-4">
                    <small class="text-muted">Powered By Informatic</small>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Load javascript jquery -->
    <script src="<?=base_url('/assets/jquery/dist/jquery.min.js')?>"></script>
    <!-- Load javascript popper -->
    <!-- <script src="assets/popper/dist/popper.min.js"></script> -->
    <!-- Load javascript bootstrap -->
    <script src="<?=base_url('/assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- Load Javascript Script -->
    <script src="<?=base_url('/assets/js/script.js')?>"></script>
</body>

</html>