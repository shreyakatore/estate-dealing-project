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
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

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
<link href="assets/css/form-style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="../../cdn.jsdelivr.net/npm/flat-icons%401.0.0/creative.min.css" rel="stylesheet">

</head>

<body>
    <!--------------------------------------------------------------------------------------->
    <?php
        include './header.php';?>
   
    <main id="main">
      
<!--Page Title-->
<section class="page-title-two bg-color-1 centred">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
    </div>
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Admin Registration</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Registration Form</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<!--------- registration------>
<section class="registration p-5 mt-5 ">
    <div class="container register-form">
        <div class="form">
            <div class="note">
                <h1 class="py-3">Register Admin</h1>
            </div>
    
            <div class="form-content bg-white">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Enter City :</label>
                            <input type="text" class="form-control" placeholder="City *" id="city" name="city">
                        </div>

                        <div class="form-group">
                            <label>Enter Locality Name  :</label>

                            <input type="text" class="form-control" placeholder="Locality *" id="locality" name="locality">
                        </div>
                        <div class="form-group">
                            <label>Enter Locality (Multiple) :</label>
  
                            <select class="form-control" id="developmentAuthority" name="developmentAuthority" >
                                <!-- Options for development authorities -->
                                <option value="option1">option 1 </option>
                                <option value="option2">option 2 </option>
                                <option value="option3">option 3 </option>
                                <option value="option4">option 4 </option>
                                <option value="option5">option 5 </option>

                            </select>                        
                        </div>
                        <div class="form-group">
                            <label>Enter Locality Description :</label>

                            <textarea class="form-control" placeholder="Locality Description *" id="localityDescription" name="localityDescription"></textarea>
                        </div>
                       
                        <div class="form-group">
                         <label>Last 5 year price trends of that locality</label>   
                            <input type="file" class="form-control" id="priceTrends" name="priceTrends" accept=".csv">
                        </div>
                        <div class="form-group">
                            <label>Enter Society (Multiple) :</label>
  
                            <select class="form-control" id="developmentAuthority" name="developmentAuthority" >
                                <!-- Options for development authorities -->
                                <option value="option 1">option 1 </option>
                                <option value="option 2">option 2 </option>
                                <option value="option 3">option 3 </option>
                                <option value="option 4">option 4 </option>
                                <option value="option 5">option 5 </option>

                            </select>                        
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Enter Society Name :</label>

                            <input type="text" class="form-control" placeholder="Society Name *" id="societyName" name="societyName">
                        </div>
                        <div class="form-group">
                            <label>Enter Society Description :</label>

                            <textarea class="form-control" placeholder="Society Description *" id="societyDescription" name="societyDescription"></textarea>
                        </div>
                        <div class="form-group">
                        <label> Devlopement/Approval Authority</label>  
                            <select class="form-control" id="developmentAuthority" name="developmentAuthority" >
                                <!-- Options for development authorities -->
                                <option value="option1">option 1 </option>
                                <option value="option1">option 2 </option>
                                <option value="option1">option 3 </option>
                                <option value="option1">option 4 </option>
                                <option value="option1">option 5 </option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Enter Builder Name :</label>

                            <input class="form-control" placeholder="Builder Name *" id="builderName" name="builderName" multiple>
                        </div>

                        <div class="form-group">
                            <label>Enter Builder Website :</label>

                            <input type="url" class="form-control" placeholder="Builder Website URL *" id="builderWebsite" name="builderWebsite">
                        </div>
                        <div class="form-group">
                            <label>Add Logo </label>   
                               <input type="file" class="form-control" id="priceTrends" name="priceTrends" accept=".csv">
                           </div>
                        <div class="form-group">
                            <label>Enter Builder Description :</label>

                            <textarea class="form-control" placeholder="Builder Description *" id="builderDescription" name="builderDescription"></textarea>
                        </div>
                    </div>
                </div>
                <div class="submit-btn text-center">
                    <button type="button" class="btn btnSubmit">Submit</button>

                </div>
            </div>
        </div>
    </div>
    
</section>


<!--------- registration------>
            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="#"><img src="assets/images/logo.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="#"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </main>
 
    <?php
    include './footer.php';?>



        <!---------------------footer secton------------------------------------------------------------------------------------------------->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="js/script.js"></script>
        <script>
            AOS.init();
        </script>




<!-- script for the all the option  -->

        <!-- <script>
            // Get the select element
            var selectElement = document.getElementById("developmentAuthority");

            selectElement.addEventListener("change",function(){
                // Get the selected option
                var selectedOption = selectElement.options[selectElement.selectedIndex];
  
                // Do something with the selected option
                console.log("Selected option: " + selectedOption.value);
            });
        </script> -->
        <script>
            // Get the select elements
            var selectElements = document.querySelectorAll("select[name='developmentAuthority']");

            // Iterate over each select element
            selectElements.forEach(function(selectElement) {
                // Add event listener for change event
                selectElement.addEventListener("change", function() {
                    // Get the selected option
                    var selectedOption = selectElement.options[selectElement.selectedIndex];

                    // Do something with the selected option
                    console.log("Selected option: " + selectedOption.value);
                });
            });
        </script>
    </body>
    </html>