<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

  <body>
<a onclick="topFunction()" id="myBtn" title="Go to top" class="fas fa-angle-up"></a>

    <?php include 'includes/name.php'; ?>

    <!-- Navigation -->
    <?php $page = 'contact'; include 'includes/nav.php'; ?>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Come On In</span>
                <span class="section-heading-lower">CONTACT INFORMATION:</span>
              </h2>
              
              <p class="address mb-5">
                <em>
                  <strong>Principal’s Office / Campus Director’s Office</strong>
                  <br>
                  

Telephone:  (046) 537-0619<br>
Email: charlie_fajut@yahoo.com<br>
Office Hours:   6:30 A.M. to 5:00 P.M.<br><br>

<strong>Admissions Office</strong><br>
Telephone:  (046) 502-6305<br>
Email: admissions.sfacbacoor@gmail.com<br>
Cell #: 0969-0800657 (Basic Ed. Dept.)<br>
Cell #: 0915-7244040 (College Dept.)<br>
Office Hours:   8:00 A.M. to 5:00 P.M.<br><br>

<strong>Accounting Office</strong><br>
Telephone:  (046) 502-0628<br>
Email: saintfrancisbacoor@yahoo.com<br>
Office Hours:   8:00 A.M. to 5:00 P.M.<br><br>

<!--<strong>College Faculty</strong><br>-->
<!--Telephone: (046) 502-06705<br>-->
<!--Email: kellysaintfrancis@gmail.com<br>-->
<!--Office Hours:   6:30 A.M. to 5:00 P.M.<br><br>-->

<strong>TESDA Office</strong><br>
Cel #: 0967-4476102<br>
Email: mogutierrez.sfac@gmail.com   <br>
Office Hours:   8:00 A.M. to 5:00 P.M.<br><br>

<!--<strong>Social Media Links:</strong><br>-->
<!--<a href="fb.com/sfacbacoor" class="btn"> </a>-->
                </em>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php include 'includes/footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
