<body class=" login" style="background-color: #246e91">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <b><a href="#" style="text-transform: Uppercase; font-size: 200%;">
                Kuisioner  </a></b>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="<?php echo site_url('auth_user/proses');?>" method="post">
                <div class="form-title">
                    <span class="form-title">Selamat Datang.</span>
                    <span class="form-subtitle">Silahkan Login.</span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" placeholder="Username" name="username" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" placeholder="Password" name="password" /> </div>
                <div class="form-actions">
                    <button type="submit" name="login" class="btn red btn-block uppercase">Login</button>
                </div>
                <p style="text-align: center;text-transform: Uppercase; color: white;"> Atau </p>
                <div class="create-account">
                    <p>
                        <a href="javascript:;" class="btn-primary btn" id="register-btn" style="width: 100%;">Daftar</a>
                    </p>
                </div>
            </form>
            <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form" action="<?php echo site_url('auth_user/daftar_user');?>" method="post">
                <div class="form-title">
                    <span class="form-title">Daftar</span>
                </div>
                <p class="hint"> Masukkan data anda!! </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Nama</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Nama" name="nama" required /> </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" required/> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Angkatan</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Angkatan" name="angkatan" required/> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Status</label>
                    <select name="status" class="form-control" required>
                        <option value="">Status</option>
                        <option value="SB"> Sudah Bekerja</option>
                        <option value="BB"> Belum Bekerja</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Tahun Lulus</label>
                    <select name="tahun_lulus" class="form-control" required>
                        <option value="">Tahun Lulus</option>
                        <option value="2014"> 2014</option>
                        <option value="2015"> 2015</option>
                        <option value="2016"> 2016</option>
                        <option value="2017"> 2017</option>
                        <option value="2018"> 2018</option>
                        <option value="2019"> 2019</option>
                    </select>
                </div>
                <p class="hint"> Masukkan data akun anda!! </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" /> </div>
                <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn btn-default">Back</button>
                    <button type="submit" id="register-submit-btn" class="btn red uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
</div>
            <!-- END LOGIN FORM -->