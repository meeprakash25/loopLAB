<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/google-fonts.css" rel="stylesheet">

  <!-- reopen feedback form on form errors -->
    <?php if (isset($_POST['submit_feedback'])) {
    ; ?>
      <?php if (form_errors($errors)) {
        ; ?>
      <script type="text/javascript">
        <?php echo "window.onload = function(){ document.getElementById(\"feedback\").click(); }"; ?>
      </script>
    <?php
    }; ?>
  <?php
}; ?>

</head>

<body id="home">

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">LoopLAB</a>
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarDiv"
        aria-expanded="false" aria-label="Toggle navigation">
        <span>
          <i class="fa fa-bars"></i>
        </span>
      </button>
  <div class="collapse navbar-collapse" id="navbarDiv">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active" data-toggle="collapse" data-target=".navbar-collapse.show">
        <a class="nav-link" href="#home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
        <a class="nav-link" href="#explore-head-section">Explore</a>
      </li>
      <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
        <a class="nav-link" href="#create-head-section">Create</a>
      </li>
      <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">
        <a class="nav-link" href="#share-head-section">Share</a>
      </li>
    </ul>
  </div>
</div>
</nav>
