<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <?= $this->include('layouts/head2') ?>
    <style>
        .image-container {
            position: relative;
            width: 100%;
            height: 100%;
            margin-left: -15px;
            margin-right: -15px;
            margin-bottom: -15px;
        }
       
        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 50%;
            object-fit: cover;
            width: 100%;
            height: 100%;
            border-radius: 0 10px 10px 0;
        }

        .form-container {
            position: relative;
            z-index: 1;
            padding: 15px;
            background-color: white;
            border-radius: 10px;
        }
        .bg-cc {
            background-color: #FFDAEB;
        }

        .btn-cc {
            background-color: #FFDAEB;
        }

        .btn-cc:hover {
            background-color: #FFE1EB;
        }
        .back-button {
        font-size: 17px; /* Menyesuaikan ukuran teks */
        text-decoration: none;
        color: #333; /* Warna teks */
        margin-bottom: 10px; /* Memberikan sedikit ruang di bawah tombol */
    }
    </style>
</head>

<body>

<div class="container py-5 h-100">

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">

          
            <div class="col-lg-6">
              <div class="card-body p-4 p-lg-5">

                  <!-- Tambahkan baris ini untuk tombol "Back" -->
                <a href="javascript:history.back()" class="back-button"><span>&#8592;</span> Back</a>

                <div class="text-center">
                  <img src="/img/rhn.png"
                    style="width: 100px;" alt="logo" class="shadow-light rounded-circle">
                </div>

                <br><hr>

                <?php if(session()->getFlashData('success')) { ?>
                    <div class="alert alert-success">
                        <?= session()->get('success') ?>
                    </div>
                <?php } ?>

                <?php if(session()->getFlashdata('errors')) { ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('errors') ?>
                    </div>
                <?php } ?>

                <form action="/register" method="post">
                        <p class="text-center">Register to your account</p>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                        <label for="role">Role</label>
                            <select class="form-control" id="role" name="role" value="<?= old('role'); ?>">
                            <option value="-">--Pilih Role--</option>    
                            <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                            </select>
                            <div class="invalid-feedback">
                                please fill in your role
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                            
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control pwstrength" 
                                data-indicator="pwindicator" name="password" tabindex="2" required>

                            <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                            </div>
                            </div>

                            <div class="form-group col-6">
                            <label for="password2" class="d-block">Password Confirmation</label>
                            <input id="password2" type="password" class="form-control" name="password2" tabindex="2" required>
                            <div class="invalid-feedback">
                                please fill in your password confirmation
                            </div>
                            </div>
                        </div>
                           <div class="text-center pt-1 mb-5 pb-1">
                           <button type="submit" class="btn btn-cc btn-block">Register</button>
                            </div>

                        </form>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="card h-100">
                        <div class="image-container">
                                    <img src="/img/logohalal2.png" style="width: 450px; border-radius: 1rem;" alt="login form" class="img-fluid"/>
                                </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?= $this->include('layouts/scripts') ?>
</body>

</html>
