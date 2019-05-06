<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <link rel="icon" href="<?=base_url('/assets/img/Untitled-1.ico')?>">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Sign-up | Koperasi Simpan Pinjam</title>
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
            <div class="row text-center">
                <div class="col-md-12 p-4">
                    <div class="image">
                        <img src="<?=base_url('/assets/img/Untitled-2.jpg')?>" width="80px" height="80px" alt="koperasi">
                    </div>
                    <h4 class="title">Koperasi Simpan Pinjam</h4>
                    <!-- <small class="text-muted">v.1.0.0</small> -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mx-auto text-center p-3">
                    <div class="card rounded shadow-sm">
                        <div class="card-body">
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Daftar Gagal!</strong>
                            </div>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Daftar Berhasil!</strong>
                            </div>
                            <div class="login-title">
                                <h5>Sign-Up</h5>
                            </div>
                            <div class="login-form mt-4">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-12 p-0">
                                            <input id="nama" name="nama" placeholder="Nama Lengkap" class="form-control" type="text">
                                        </div>
                                        <div class="form-group col-md-12 p-0">
                                            <input id="user" name="user" placeholder="Username" class="form-control" type="text">
                                        </div>
                                        <div class="form-group col-md-12 p-0">
                                            <input id="alamat" name="alamat" placeholder="Alamat" class="form-control" type="text">
                                        </div>
                                        <div class="form-group col-md-12 p-0">
                                            <input id="notlp" name="notlp" placeholder="Nomor Telpon" class="form-control" type="number">
                                        </div>
                                        <div class="form-group col-md-12 p-0">
                                            <input id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" type="text">
                                        </div>
                                        <div class="form-group col-md-12 p-0">
                                            <input id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" class="form-control" type="date">
                                        </div>
                                        <div class="form-group col-md-12 p-0">
                                            <select class="custom-select" name="gender">
                                                <option value="">- Jenis Kelamin - </option>
                                                <option value="L">Laki - Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 p-0">
                                            <input type="password" class="form-control" id="pass" placeholder="Password">
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group text-right w-100">
                                            Sudah punya akun <a href="<?=site_url('login/')?>">Login?</a>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <button type="button" class="btn btn-danger btn-block">Daftar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pt-4 pb-4 text-center mb-4">
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