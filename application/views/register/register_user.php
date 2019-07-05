<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style type="text/css">
        body {
             background: url('<?= base_url('assets/register/') ?>Event-Survey.jpg') fixed;
            background-size: cover;

        }

        *[role="form"] {
            max-width: 730px;
            padding: 15px;
            margin: 0 auto;
            border-radius: 0.3em;
            background-color: #f2f2f2;
        }

        *[role="form"] h2 { 
            font-family: 'Open Sans' , sans-serif;
            font-size: 40px;
            font-weight: 600;
            color: #000000;
            margin-top: 5%;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 4px;
        }
    </style>
    <link href="<?= base_url('assets/register/') ?>4/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="<?= base_url('assets/register/') ?>4/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/register/') ?>4/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="<?= base_url('assets/register/') ?>3/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="<?= base_url('assets/register/') ?>3/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/register/') ?>3/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

<div class="container" style="margin-top: 100px;">
            <form class="form-horizontal" role="form" action="<?=  base_url('Auth_user/daftar_user') ?>" enctype="multipart/form-data" method="post" style="border: solid black 2px;">
                <h2>Register</h2>
                <div class="form-group">
                    <label for="nama" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                        <input name="nama" type="text" id="nama" placeholder="nama" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto" class="col-sm-3 control-label">Foto Diri</label>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input name="foto" type="file" class="file-input" id="customFile">
                          </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input name="email" type="email" id="email" placeholder="Email" class="form-control" name= "email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input name="username" type="text" id="username" placeholder="username" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input name="password" type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tahun lulus" class="col-sm-3 control-label">Tahun Lulus</label>
                    <div class="col-sm-9">
                        <input name="tahun_lulus" type="text" id="tahun_lulus" placeholder="tahun lulus" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Sudah Bekerja</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="radio-inline">
                                    <input onchange="bekerja('ya')" name="sudah_bekerja" type="radio" id="yaRadio" value="ya">Ya
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input onchange="bekerja('tidak')"  name="sudah_bekerja" type="radio" id="tidakRadio" value="tidak">Tidak
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group ketkerja" style="display: none;">
                    <label for="nama_perusahaan" class="col-sm-3 control-label">Nama Perusahaan</label>
                    <div class="col-sm-9">
                        <input name="nama_perusahaan" type="text" id="nama_perusahaan" placeholder="nama perusahaan" class="form-control">
                    </div>
                </div>
                <div class="form-group ketkerja" style="display: none;">
                    <label for="alamat_perusahaan" class="col-sm-3 control-label">Alamat Perusahaan</label>
                    <div class="col-sm-9">
                        <input name="alamat_perusahaan" type="text" id="alamat_perusahaan" placeholder="alamat perusahaan" class="form-control">
                    </div>
                </div>
                <div class="form-group" id="prestasiwrap">
                    <label for="prestasi" class="col-sm-7 control-label">Prestasi Akademik/Non Akademik</label>
                    <div class="col-sm-3">
                        <button type="button" onclick="prestasi()" class="btn-sm btn-success">+Tambah Prestasi</button>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-4">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>    
                </div>
                
            </form> <!-- /form -->
        </div> <!-- ./container -->

        <script type="text/javascript">
            function bekerja(stat) {
                if(stat == 'ya') {
                    $('.ketkerja').show();
                } else {
                    $('.ketkerja').hide();    
                }
            }

            function prestasi() {
                var x = '<div class="form-group"><label for="nama_kegiatan" class="col-sm-3 control-label">Prestasi</label><div class="col-sm-4"><input name="nama_kegiatan[]" type="text" placeholder="nama kegiatan" class="form-control"></div><div class="col-sm-2"><input name="tahun_kegiatan[]" type="text" placeholder="tahun" class="form-control"></div><div class="col-sm-3"><select name="tingkat[]" class="form-control" style="height: 34px;"><option value="kota">kota/kabupaten</option><option value="nasional">Nasional</option><option value="internasional">Internasional</option></select></div></div>';
                $('#prestasiwrap').append(x);
            }
        </script>
</body>
</html>

