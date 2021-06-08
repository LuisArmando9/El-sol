<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>


    <!-- Bootstrap -->
    <link href=<?= base_url()."/vendors/bootstrap/dist/css/bootstrap.min.css"?> rel="stylesheet">
    <!-- Font Awesome -->
    <link href=<?= base_url()."/vendors/font-awesome/css/font-awesome.min.css"?> rel="stylesheet">
    <!-- NProgress -->
    <link href=<?= base_url()."/vendors/nprogress/nprogress.css"?> rel="stylesheet">
    <!-- Animate.css -->
    <link href=<?= base_url()."/vendors/animate.css/animate.min.css"?> rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=<?= base_url()."/build/css/custom.min.css"?> rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action=<?= base_url('Login')?>  method="post">
              <h1>Acceso al panel, el sol</h1>
              <div>
                <input type="text" class="form-control" name="UserName" placeholder="Username" required="" />

              </div>
              <div>
                <input type="password" class="form-control"  name="Password" placeholder="Password" required="" />
              </div>
              <div>
                  <button class="btn btn-info" type="submit">Log in</a></button>
  
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <?php if(session()->getFlashdata('msg')):?>
                  <div class="alert alert-danger" role="alert">
                     <?= session()->getFlashdata('msg') ?>
                  </div>  
                <?php endif;?>
                <div class="clearfix"></div>
                <br />

                <div>
                 
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
