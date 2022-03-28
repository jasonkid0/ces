<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top" class="fas fa-angle-up"></button>
  <?php include 'includes/name.php'; ?>

  <!-- Navigation -->
  <?php $page = 'home'; include 'includes/nav.php'; ?>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/colfront.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h3 class="section-heading mb-4">
            <span class="section-heading-upper">New Year Message</span>
            <span class="section-heading-lower">From the School President</span>
          </h3>
          <h4>My dear Franciscans and Anthonians,</h4>
          <p class="mb-3"><?php echo substr('"Here\'s a toast to the future, a toast to the past, and a toast to our friends, far and near." New Year brings',0,110) . ' ...'; ?>
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="message.php">Read more!</a>
          </div>

        </div>
      </div>
    </div>

  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Our</span>
              <span class="section-heading-lower">Location</span>
            </h2>
<!-- <p class="mb-0">When you walk into our school to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent service from the highest quality of teachers and staffs. For suggestions, please let us know!</p> -->
<div class="mapouter"><div class="gmap_canvas"><iframe style="position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;" width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=saint%20francis%20of%20assisi%20college%20bacoor&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  padding-top: 25px;
  height: 0;}</style></div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <div><img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/bg-0001.jpg" alt=""></div>
  <br><br><br>

  <?php include 'includes/footer.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
