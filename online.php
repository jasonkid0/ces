<?php include 'includes/db.php';

$sql= mysqli_query($db,"SELECT *, tbl_acadyears.ay_id FROM tbl_active_acads
    LEFT JOIN tbl_acadyears ON tbl_acadyears.ay_id = tbl_active_acads.ay_id")or die(mysqli_error($db));
while ($row= mysqli_fetch_array($sql)){
    $_SESSION['active_acad'] = $row['academic_year'];}

$sql= mysqli_query($db,"SELECT *, tbl_semesters.sem_id FROM tbl_active_sem
    LEFT JOIN tbl_semesters ON tbl_semesters.sem_id = tbl_active_sem.sem_id")or die(mysqli_error($db));
  while ($row= mysqli_fetch_array($sql)){
    $_SESSION['active_sem'] = $row['semester'];}
    ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>

  <?php include 'includes/name.php'; ?>

  <!-- Navigation -->
  <?php include 'includes/nav.php'; ?>

  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/6.jpg" alt="" style="width: 100%; height: 30rem">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">SFAC (College Dept.) - BACOOR CAMPUS</span>
                <span class="section-heading-lower">Online Registration</span>
              </h2>
              
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
  <?php check_message(); ?>
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <form method="POST" autocomplete="off" enctype="multipart/form-data">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Course*</label>
                </div>
                <select name="course" class="custom-select" id="inputGroupSelect01" required>
                  <option selected disabled>Choose...</option>
                  <option value="1">Bachelor of Science in Computer Science</option>
                  <option value="3">Bachelor of Science in Business Administration - Marketing Management</option>
                  <option value="25">Bachelor of Science in Business Administration - Financial Management</option>
                  <option value="15">BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT</option>
                  <option value="10">Bachelor of Secondary Education - English</option>
                  <option value="11">Bachelor of Secondary Education - Filipino</option>
                  <option value="12">Bachelor of Secondary Education - Mathematics</option>
                  <option value="19">BACHELOR OF ELEMENTARY EDUCATION</option>
                  <option value="17">BACHELOR OF EARLY CHILDHOOD EDUCATION</option>
                  <option value="18">Bachelor of Physical Education</option>
                  <option value="24">Teacher Certificate Program</option>

                </select>
              </div><!-- ================== -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Admit Type*</label>
                </div>
                <select name="admit_type" class="custom-select" id="inputGroupSelect01" required>
                  <option selected disabled>Choose...</option>
                  <option value="New Student">New Student</option>
                  <!--<option value="Transferee">Transferee</option>-->
                </select>
              </div><!-- ================== -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Year Level*</label>
                </div>
                <select name="year_level" class="custom-select" id="inputGroupSelect01" required>
                  <option selected disabled>Choose...</option>
                  <?php $q = mysqli_query($db,"SELECT * from tbl_year_levels");
                        while($row1=mysqli_fetch_array($q)){
                            echo '<option value="'.$row1['year_id'].'">'.$row1['year_level'].'</option>';
                                } ?>
                </select>
              </div><!-- ====================== -->
              <hr>
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Student's Information</span>
              </h2><hr>
              <div class="row">
              <div class="input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Last Name*</span>
                </div>
                <input required name="lastname" type="text" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">First Name*</span>
                </div>
                <input required name="firstname" type="text" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Middle Name*</span>
                </div>
                <input required name="middlename" type="text" class="form-control" placeholder="Middle Name" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <!-- <div class="input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Suffix Name</span>
                </div>
                <input name="suffixname" type="text" class="form-control" placeholder="(e.g. Jr.)" aria-label="Last Name" aria-describedby="basic-addon1">
              </div> -->
              </div>

              <div class="row">
              <div class="input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Gender*</span>
                </div>
                <select required name="gender" class="custom-select" id="inputGroupSelect01">
                  <option selected disabled>Choose...</option>
                  <?php $q = mysqli_query($db,"SELECT * from tbl_genders");
                        while($row1=mysqli_fetch_array($q)){
                            echo '<option value="'.$row1['gender_id'].'">'.$row1['gender'].'</option>';
                                } ?>
                </select>
              </div>
              <div class="input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Civil Status*</span>
                </div>
                <select required name="civil_stat" class="custom-select" id="inputGroupSelect01">
                  <option selected disabled>Choose...</option>
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                </select>
              </div>
              <div class="input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Citizenship*</span>
                </div>
                <input required name="citizenship" type="text" class="form-control" placeholder="Citizenship" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Birthdate*</span>
                </div>
                <input required name="birthdate" type="date" class="form-control" placeholder="" aria-label="Last Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <div class="row">
              <div class="input-group-sm mb-3 col-md-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Birthplace*</span>
                </div>
                <input required name="birthplace" type="text" class="form-control" placeholder="Birthplace" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Age*</span>
                </div>
                <input required name="age" type="text" class="form-control" placeholder="Age" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Religion*</span>
                </div>
                <input required name="religion" type="text" class="form-control" placeholder="Religion" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <div class="row">
              <div class="input-group-sm mb-3 col-md-12">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Address*</span>
                </div>
                <input required name="address" type="text" class="form-control" placeholder="Address" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <hr>
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Contact Details</span>
              </h2><hr>
              <div class="row">
              <div class="input-group-sm mb-3 col-md-6">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Contact Number*</span>
                </div>
                <input required name="contact" type="text" class="form-control" placeholder="Contact Number" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-6">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Email Address*</span>
                </div>
                <input required name="email" type="email" class="form-control" placeholder="Email Address" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>
              <hr>

              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Parent's/Guardian's Information</span>
              </h2><hr>
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Father's Information</span>
              </h2>
              <div class="row">
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Last Name*</span>
                </div>
                <input required name="flastname" type="text" class="form-control" placeholder="Last Name" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">First Name*</span>
                </div>
                <input required name="ffirstname" type="text" class="form-control" placeholder="First Name" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Middle Name*</span>
                </div>
                <input required name="fmiddlename" type="text" class="form-control" placeholder="Middle Name" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <div class="row">
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Age</span>
                </div>
                <input name="fage" type="text" class="form-control" placeholder="Age" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-8">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Occupation</span>
                </div>
                <input name="foccupation" type="text" class="form-control" placeholder="Occupation" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Mother's Information</span>
              </h2>
              <div class="row">
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Last Name*</span>
                </div>
                <input required name="mlastname" type="text" class="form-control" placeholder="Last Name" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">First Name*</span>
                </div>
                <input required name="mfirstname" type="text" class="form-control" placeholder="First Name" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Middle Name*</span>
                </div>
                <input required name="mmiddlename" type="text" class="form-control" placeholder="Middle Name" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <div class="row">
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Age</span>
                </div>
                <input name="mage" type="text" class="form-control" placeholder="Age" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-8">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Occupation</span>
                </div>
                <input name="moccupation" type="text" class="form-control" placeholder="Occupation" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Guardian's Information</span>
              </h2>
              <div class="row">
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Last Name*</span>
                </div>
                <input required name="glastname" type="text" class="form-control" placeholder="Last Name" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">First Name*</span>
                </div>
                <input required name="gfirstname" type="text" class="form-control" placeholder="First Name" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Middle Name*</span>
                </div>
                <input required name="gmiddlename" type="text" class="form-control" placeholder="Middle Name" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <div class="row">
              <div class="input-group-sm mb-3 col-md-8">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Address</span>
                </div>
                <input name="gaddress" type="text" class="form-control" placeholder="Address" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Relationship</span>
                </div>
                <input name="relationship" type="text" class="form-control" placeholder="Relationship" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <div class="row">
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Monthly Family Income</span>
                </div>
                <input name="family_income" type="text" class="form-control" placeholder="Monthly Family Income" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-4">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">No. of Siblings</span>
                </div>
                <input name="no_siblings" type="text" class="form-control" placeholder="No. of Siblings" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>
              <hr>

              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Educational Background</span>
              </h2><hr>
              <div class="row">
              <div class="input-group-sm mb-3 col-md-9">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">High School Graduated from*</span>
                </div>
                <input required name="hs" type="text" class="form-control" placeholder="High School Graduated from" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">School Year*</span>
                </div>
                <input required name="hsSY" type="text" class="form-control" placeholder="School Year" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <div class="row">
              <div class="input-group-sm mb-3 col-md-12">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">School Address*</span>
                </div>
                <input required name="hsaddress" type="text" class="form-control" placeholder="School Address" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <div class="row">
              <div class="input-group-sm mb-3 col-md-9">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Current or Last School Attended*</span>
                </div>
                <input required name="lastschool" type="text" class="form-control" placeholder="Current or Last School Attended" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              <div class="input-group-sm mb-3 col-md-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">School Year*</span>
                </div>
                <input required name="lastSY" type="text" class="form-control" placeholder="School Year" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div>

              <div class="row">
              <div class="input-group-sm mb-3 col-md-12">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">School Address*</span>
                </div>
                <input required name="lsaddress" type="text" class="form-control" placeholder="School Address" aria-label="Middle Name" aria-describedby="basic-addon1">
              </div>
              </div><hr>

<div class="row">
              <div class="input-group-sm mb-3 col-md-12">
                <input required name="check" type="checkbox" onchange="document.getElementById('send').disabled = !this.checked;" >
                I agree to the <a href="https://stfrancis.edu.ph/wp-content/uploads/2019/07/SFAC-Data-Privacy.pdf">Privacy Notice &amp; Data Protection</a>
              </div>
              </div>
<br><hr>
              <button id="send" disabled="" type="submit" name="submit" class="btn btn-success">Submit</button>

              </form>

<?php 

if (isset($_POST['submit'])) {
  
  $admit_type = mysqli_real_escape_string($db,$_POST['admit_type']);
  $course = mysqli_real_escape_string($db,$_POST['course']);
  $gender = mysqli_real_escape_string($db,$_POST['gender']);
  $lastname = mysqli_real_escape_string($db,$_POST['lastname']);
  $firstname = mysqli_real_escape_string($db,$_POST['firstname']);
  $middlename = mysqli_real_escape_string($db,$_POST['middlename']);
  $address = mysqli_real_escape_string($db,$_POST['address']);
  $birthdate = mysqli_real_escape_string($db,$_POST['birthdate']);
  $birthplace = mysqli_real_escape_string($db,$_POST['birthplace']);
  $age = mysqli_real_escape_string($db,$_POST['age']);
  $religion = mysqli_real_escape_string($db,$_POST['religion']);
  $citizenship = mysqli_real_escape_string($db,$_POST['citizenship']);
  $civilstatus = mysqli_real_escape_string($db,$_POST['civil_stat']);
  $contact = mysqli_real_escape_string($db,$_POST['contact']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $flastname = mysqli_real_escape_string($db,$_POST['flastname']);
  $ffirstname = mysqli_real_escape_string($db,$_POST['ffirstname']);
  $fmiddlename = mysqli_real_escape_string($db,$_POST['fmiddlename']);
  $fage = mysqli_real_escape_string($db,$_POST['fage']);
  $foccupation = mysqli_real_escape_string($db,$_POST['foccupation']);
  $mlastname = mysqli_real_escape_string($db,$_POST['mlastname']);
  $mfirstname = mysqli_real_escape_string($db,$_POST['mfirstname']);
  $mmiddlename = mysqli_real_escape_string($db,$_POST['mmiddlename']);
  $mage = mysqli_real_escape_string($db,$_POST['mage']);
  $moccupation = mysqli_real_escape_string($db,$_POST['moccupation']);
  $familyincome = mysqli_real_escape_string($db,$_POST['family_income']);
  $nosiblings = mysqli_real_escape_string($db,$_POST['no_siblings']);
  $glastname = mysqli_real_escape_string($db,$_POST['glastname']);
  $gfirstname = mysqli_real_escape_string($db,$_POST['gfirstname']);
  $gmiddlename = mysqli_real_escape_string($db,$_POST['gmiddlename']);
  $relationship = mysqli_real_escape_string($db,$_POST['relationship']);
  $gaddress = mysqli_real_escape_string($db,$_POST['gaddress']);
  $hs = mysqli_real_escape_string($db,$_POST['hs']);
  $hsSY = mysqli_real_escape_string($db,$_POST['hsSY']);
  $hsAddress = mysqli_real_escape_string($db,$_POST['hsaddress']);
  $lastschool = mysqli_real_escape_string($db,$_POST['lastschool']);
  $lastSY = mysqli_real_escape_string($db,$_POST['lastSY']);
  $lastAddress = mysqli_real_escape_string($db,$_POST['lsaddress']);
  $acad_year = $_SESSION['active_acad'];
  $semester = $_SESSION['active_sem'];


  $query = mysqli_query($db,"INSERT INTO tbl_online_registrations (admit_type, course_id, gender_id, lastname, firstname, middlename, address, birthdate, birthplace, age, religion, citizenship, civilstatus, contact, email, flastname, ffirstname,fmiddlename, fage, foccupation, mlastname, mfirstname, mmiddlename, mage, moccupation, familyincome, nosiblings, glastname, gfirstname, gmiddlename, relationship, gaddress, hs, hsSY, hsAddress, lastschool, lastSY, lastAddress,acad_year,semester,status) values ('$admit_type','$course', '$gender','$lastname', '$firstname', '$middlename', '$address', '$birthdate','$birthplace','$age','$religion','$citizenship','$civilstatus','$contact', '$email', '$flastname', '$ffirstname', '$fmiddlename', '$fage', '$foccupation','$mlastname', '$mfirstname', '$mmiddlename','$mage','$moccupation', '$familyincome', '$nosiblings', '$glastname', '$gfirstname', '$gmiddlename', '$relationship', '$gaddress', '$hs', '$hsSY', '$hsAddress', '$lastschool', '$lastSY', '$lastAddress','','','Pending')")or die (mysqli_error($db));

  if($query == true)
    {
      echo '<script>alert("Information Submitted!")</script>';
    }
  else
    {
      echo '<script>alert("Something went wrong!")</script>';
    }
}

?>

            </div>
          </div>
        </div>
      </div>

  <?php include 'includes/footer.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
