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
            <form class="login-form" action="<?php echo site_url('auth/admin_login');?>" method="post">
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
</div>
            <!-- END LOGIN FORM -->