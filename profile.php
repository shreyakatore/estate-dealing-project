<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Estate Dealings</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link href="assets/css/switcher-style.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/flat-icons@1.0.0/creative.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-xzDzGDxR1J2DAJfKW2hPtfXoNJwlxsxprXk07p0JzYg0dJvebEe4Sq6BmFHzW1Rk6H2p/8b2tfnIUhvRGv/V3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!-- page wrapper -->

<body>
    <main id="main">
        <?php
        include './header.php';?>
    <div class="boxed_wrapper">

        <!-- banner-section -->
        <section class="my-profile">
  <div class="container">
  <div class="profilePageBox">
      <h3 class ="mt-5 text-bold text-primary">My Profile</h3>
      <div class="profileData">

      <figure class="figureBox">
          <picture>
            <img id="profileImage" src="" alt="Profile Image">
            <span class="clr clr24" id="initialPlaceholder">S</span>
          </picture>
          <input type="file" id="fileInput" style="display:none;" accept="image/*">
          <button type="button" class="camera-icon" onclick="document.getElementById('fileInput').click();">
          <i class="fas fa-camera" style="color:#ccc;"></i>
          </button>
        </figure>

        <div class="withRating">
          <h3>Shreya Vijay Katore</h3>
        </div>
          <span class="cityName"><em class="icon-location"></em>Nagpur, India</span>
        </div>
       
   
      <div class="profileDetailsBox">
     <h4 class ="text-primary text-bold mx-3"> Profile Details </h4>
        </div>
        <div class="tabContentBox profileTab active">
          <div class="profileWhiteBox noPad">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                  <label>Name</label>
                  <strong>Shreya Vijay Katore</strong>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                  <label>Phone Number</label>
                  <strong>91 9689624904<div class="verified">verified <span class="icon-check"></span></div></strong>
                </div>
              </div>
            </div>
            <div class="row">
             
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                  <label>Email Address</label>
                  <strong>shrkatore18@gmail.com</strong>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                  <label>City</label>
                  <strong>Nagpur</strong>
                </div>
              </div>
              </div>
              <div class="btnBox">
        <button type="button" class="btn btn-primary Profile_Edit_Profile" id="editFormBtn">Edit Profile <em class="icon-angle-right"></em></button>
      </div>
    </div>
  </div>
</section>
  <!-- main-footer -->
      
  <?php
        include './footer.php';?>
        <!-- main-footer end -->
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>

    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/nav-tool.js"></script>

    <!-- main-js -->
    <script>
    // Profile image page
    document.getElementById('fileInput').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const imgElement = document.getElementById('profileImage');
          const placeholder = document.getElementById('initialPlaceholder');
          imgElement.src = e.target.result;
          imgElement.style.display = 'block';
          placeholder.style.display = 'none';
        };
        reader.readAsDataURL(file);
      }
    });

</script>


    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>