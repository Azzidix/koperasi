<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <link rel="icon" href="<?=base_url('/assets/img/Untitled-1.ico')?>">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Aktifasi Akun | Koperasi Simpan Pinjam</title>
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
            <!-- Header -->
            <div class="row text-center">
                <div class="col-md-12 p-4">
                    <div class="image">
                        <img src="<?=base_url('/assets/img/Untitled-2.jpg')?>" width="80px" height="80px" alt="koperasi">
                    </div>
                    <div class="title pt-4">
                        <h4 class="title mb-0">Koperasi Simpan Pinjam</h4>
                        <!-- <small class="text-muted">v.1.0.0</small> -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- ================== -->
            <!-- Form Aktifasi -->
            <div class="row">
                <div class="mx-auto text-center p-3 signup">
                    <div class="card rounded shadow-sm border-top-green">
                        <div class="card-body">
                            <?php
                            if ($this->session->userdata('message') == 'gagal') {
                                echo '<div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Aktifasi Gagal!</strong>
                                    </div>';
                            }  else if ($this->session->userdata('message') == 'berhasil') {
                                echo '<div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong>Aktifasi Berhasil!</strong>
                                    </div>';
                            }
                            ?>
                            <div class="login-title">
                                <h5>Aktifasi Akun</h5>
                            </div>
                            <div class="login-form mt-4">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-12 p-0 text-left">
                                            <input id="nama" name="nama" placeholder="Nama Lengkap" class="form-control" type="text">
                                            <span class="text-danger err-msg-1 small"><i> Masukan Nama Anda</i></span>
                                        </div>
                                        <div class="form-group col-md-12 p-0 text-left">
                                            <input id="user" name="user" placeholder="Username" class="form-control" type="text">
                                            <span class="text-danger err-msg-2 small"><i> Masukan Username Anda</i></span>
                                        </div>
                                        <div class="form-group col-md-12 p-0 text-left">
                                            <input class="form-control" type="password" name="password"  placeholder="Password" id="pass">
                                            <span class="text-danger err-msg-3 small" ><i> Masukan Password Anda</i></span>
                                            <span class="show-pass text-muted" id="btnShowPass"><i class="fa fa-eye-slash"></i></span>
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12 text-right">
                                            Sudah aktivasi <a href="<?=site_url('login/')?>">Login?</a>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <button type="button" class="btn btn-green btn-block" id="btnAktifasi">Aktivasi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Aktivasi -->
            <!-- ================== -->
            <!-- Footer -->
            <div class="footer text-center">
                <div class="pt-4 pb-2">
                    <small class="text-muted">Powered By TIB-2</small>
                </div>
            </div>
            <!-- End Footer -->
            <!-- ================== -->
        </div>
    </div>
    <!-- Load javascript jquery -->
    <script src="<?=base_url('/assets/jquery/dist/jquery.min.js')?>"></script>
    <!-- Load javascript popper -->
    <!-- <script src="assets/popper/dist/popper.min.js"></script> -->
    <!-- Load javascript bootstrap -->
    <script src="<?=base_url('/assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- Load Javascript Script -->
    <script>
        $('#btnShowPass').on('click', function() {
            if($('#pass').attr('type') == 'password') {
                $('#pass').attr('type','text');
                if($('#btnShowPass').html('<i class="fa fa-eye"></i>'));

            } else {
                $('#pass').attr('type','password');
                if($('#btnShowPass').html('<i class="fa fa-eye-slash"></i>'));
            }
        });
        $('#nama').on('change input kydown', function() {
            if($('#nama').val() === '') {
                $('.err-msg-1').show();
                if($('#nama').css('border','1px solid red'));
            } else {
                $('.err-msg-1').hide();
                if($('#nama').css('border','1px solid #ced4da'));
            }
        });
        $('#user').on('change input kydown', function() {
            if($('#user').val() === '') {
                $('.err-msg-2').show();
                if($('#user').css('border','1px solid red'));
            } else {
                $('.err-msg-2').hide();
                if($('#user').css('border','1px solid #ced4da'));
            }
        });
        $('#pass').on('change input kydown', function() {
            if($('#pass').val() === '') {
                $('.err-msg-3').show();
                if($('#pass').css('border','1px solid red'));
            } else {
                $('.err-msg-3').hide();
                if($('#pass').css('border','1px solid #ced4da'));
            }
        });
        
        $('#btnAktifasi').on('click', function() {
            $('#btnAktifasi').html('<i class="fa fa-spinner fa-spin fs-25"</i>');
            setTimeout(function() {
                    $('#btnAktifasi').html('Aktifasi');
            }, 10000);
            
            
        });
    </script>
</body>

</html>