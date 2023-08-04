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
    </style>

</head>

<body>

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">

          <div class="col-md-6">
          <div class="card h-100">
            <div class="image-container">
                        <img src="/img/logohalal2.png" style="width: 450px; border-radius: 1rem;" alt="login form" class="img-fluid"/>
                    </div>
            </div>
            </div>

            <div class="col-lg-6">
              <div class="card-body p-4 p-lg-5">

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

                        <form action="/login" method="post">

                        <form> 
                            <p class=" text-center">Sign In to your account</p>

                            <div class="class="form-outline mb-4>
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                            <br>
                            <div class="form-outline mb-4">
                                <label for="password"> Password </label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                           <!-- <?= isset($error) ? '<div class="text-danger my-4">' . $error . '</div>' : '' ?> -->
                            
                           <div class="text-center pt-1 mb-5 pb-1">
                            <button type="submit" class="btn btn-cc btn-block">Login</button>
                            </div>

                            <!-- <form action="/layouts/register" method="post">
                            <div class="d-flex align-items-center justify-content-center pb-4">
                                <p class="mb-0 me-2">Don't have an account?</p>
                                <a href="register" class="d-flex justify-content-center btn btn-link">Register account</a>
                            </div>
                            </form> -->

                        </form>
                        </form>
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