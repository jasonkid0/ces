  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4 fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="/"><img src="img/logo.png" alt="" style="height: 55px;width: 55px;">SFAC - Bacoor</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item <?php if($page=='home') {echo 'active';} ?> px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4 <?php if($page=='about') {echo 'active';} ?> ">
            <a class="nav-link text-uppercase text-expanded" href="about">About</a>
          </li>
          <li class="nav-item px-lg-4 <?php if($page=='college_prog') {echo 'active';} ?> ">
            <a class="nav-link text-uppercase text-expanded" href="college_prog">College Programs</a>
          </li>
          <li class="nav-item px-lg-4 <?php if($page=='contact') {echo 'active';} ?> ">
            <a class="nav-link text-uppercase text-expanded" href="contact">Contact Us</a>
          </li>
          
          <style>
            .dropbtn {
              background-color: #4CAF50;
              color: white;
              padding: 16px;
              font-size: 16px;
              border: none;
            }

            .dropdown {
              position: relative;
              display: inline-block;
            }

            .dropdown-menu {
              display: none;
              position: absolute;
              background-color: #eb6565;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }

            .dropdown-menu a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }

            .dropdown-menu a:hover {background-color: #eee;}

            
          </style>
          <script>
              $(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});

// make it as accordion for smaller screens
if ($(window).width() < 992) {
  $('.dropdown-menu a').click(function(e){
    e.preventDefault();
      if($(this).next('.submenu').length){
        $(this).next('.submenu').toggle();
      }
      $('.dropdown').on('hide.bs.dropdown', function () {
     $(this).find('.submenu').hide();
  })
  });
}
          </script>
</head>
<body>




<li class="dropdown nav-item px-lg-4 <?php if($page=='about') {echo 'active';} ?>">
 <a href="student_srvcs" class="dropdown-toggle nav-link text-uppercase text-expanded" data-toggle="dropdown" role="button" aria-expanded="false">Student Services <span class="caret"></span></a>
  <ul class="dropdown-menu" role="menu">
        <a href="https://stfrancisbacoor.com/sfac-bac/pages/inquiry/online.inquiry.php">HED Bacoor Online Registration</a>
    <a href="http://stfrancisbacoor.com/sfac-bac-ongrade">HED Bacoor Online Grades</a>
    <a href="http://stfrancisbacoor.com/sfac-bac">HED Bacoor Enrollment</a>
    <a href="https://stfrancisbacoor.com/sfac-lp/pages/inquiry/online.inquiry.php">HED Las Piñas Online Registration</a>
    <a href="http://stfrancisbacoor.com/sfac-lp-ongrade">HED Las Piñas Online Grades</a>
    <a href="http://stfrancisbacoor.com/sfac-lp">HED Las Piñas Enrollment</a>
    <a href="http://stfrancisbacoor.com/basic-edu">BED Bacoor Enrollment</a>
    <a href="http://stfrancisbacoor.com/sfaclp_bed">BED Las Piñas Enrollment</a>
    <a href="http://stfrancisbacoor.com/sample">HED Bacoor Library Resources</a>
    <a href="http://stfrancisbacoor.com/samplebasic">BED Bacoor Library Resources</a>
    <a href="http://stfrancisbacoor.com/sfaclb">BED Los Baños Library Resources</a>
    <!--<a href="http://stfrancisbacoor.com/gcs">BED/HED Guidance Services</a>-->
    <!--<a href="http://stfrancisbacoor.com/starbooks">DOST|Starbooks</a>-->
  </ul>
</li>
        </ul>
      </div>
    </div>
  </nav>