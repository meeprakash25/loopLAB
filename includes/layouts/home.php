<!-- HOME SECTION -->
  <header id="home-section">
    <div class="dark-overlay">
      <div class="home-inner">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-lg-8 d-none d-lg-block">
              <h2>Build <strong>social profiles</strong> and gain revenue & profits</h2>
              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-4 align-self-end">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur quo earum sit recusandae dolor deleniti iure ducimus repellat, quas nulla quaerat voluptatem quasi dicta commodi, id, esse distinctio cupiditate! Perferendis?
                </div>
              </div>
              <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-4 align-self-end">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur quo earum sit recusandae dolor deleniti iure ducimus repellat, quas nulla quaerat voluptatem quasi dicta commodi, id, esse distinctio cupiditate! Perferendis?
                </div>
              </div> <div class="d-flex flex-row">
                <div class="p-4 align-self-start">
                  <i class="fa fa-check"></i>
                </div>
                <div class="p-4 align-self-end">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur quo earum sit recusandae dolor deleniti iure ducimus repellat, quas nulla quaerat voluptatem quasi dicta commodi, id, esse distinctio cupiditate! Perferendis?
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- errors and messages -->
             <?php if(!empty($message)) {; ?>
                <div class="alert alert-primary">
                  <?php echo $message; ?>
                </div>
              <?php }; ?>
<!--
              <?php if(!empty(form_errors($errors))) {; ?>
                <div class="alert alert-danger">
                  <?php //echo form_errors($errors); ?>
                </div>
              <?php }; ?> -->
              <?php echo form_errors($errors); ?>

              <div class="card bg-primary text-center card-form">
                <h3>Sign Up Today</h3>
                <p>Please fill out this form to register</p>



                <form action="" data-toggle="validator" role="form" method="post">

                  <?php
                     $rand=rand();
                     $_SESSION['rand']=$rand;
                  ?>
                  <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />

                  <div class="form-group">
                    <input type="text" name="username" class="form-control form-control-lg" placeholder="username" required>
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="email" data-error="Bruh, that email address is invalid" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="password" required>
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm_password" class="form-control form-control-lg" placeholder="confirm password" required>
                  </div>
                  <input type="submit" name="submit" value="submit" class="btn btn-outline-light btn-block">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
