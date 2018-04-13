<!--MAIN FOOTER-->
<footer id="main-footer" class="bg-dark">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="py-4">
          <h1 class="h3">LoopLab</h1>
          <p>Copyright &copy; 2018</p>
            <button class="btn btn-primary" id="feedback" data-toggle="modal"
            data-target="#feedbackModal">Give us a feedback</button>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--CONTACT MODAL-->
<div class="modal fade text-dark" id="feedbackModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="feedbackModalTitle">
          Name and Email fields are optional
        </h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

        <!-- errors and messages -->

        <?php if (isset($_POST['submit_feedback']) && $_POST['randcheck'] == $_SESSION['rand_contactForm']) {; ?>
          <?php echo form_errors($errors); ?>
        <?php }; ?>

        <form action="index.php" data-toggle="validator" role="form" method="post">

          <?php
             $rand=rand();
             $_SESSION['rand_contactForm']=$rand;
          ?>
          <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />


          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="<?php if (isset($_POST['submit_feedback']) && !empty($errors)) {echo $_POST['name'];}; ?>">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php if (isset($_POST['submit_feedback']) && !empty($errors)) {echo $_POST['email'];}; ?>">
          </div>

          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" required value="<?php if (isset($_POST['submit_feedback']) && !empty($errors)) {echo $_POST['message'];}; ?>"></textarea>
          </div>

          <div class="modal-footer">
            <input type="submit" name="submit_feedback" value="submit" class="btn btn-primary btn-block">
          </div>

        </form>
      </div>
    </div>
  </div>
</div>


<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/scrollanimation.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>

<?php
  //5. close database connection
  if (isset($connection)) {
      mysqli_close($connection);
  }

?>
