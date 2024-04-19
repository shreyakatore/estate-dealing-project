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
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
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
    <link href="assets/css/form-style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../../cdn.jsdelivr.net/npm/flat-icons%401.0.0/creative.min.css" rel="stylesheet">

</head>

<body>
    <!--------------------------------------------------------------------------------------->
    <?php
        include './header.php';?>
  <main id="main">
  <section class="signin p-5">
    <div class="container bg-white">
        <div class="container-body py-5 px-md-5">
            <div class="row d-flex justify-content-center"  >
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5 text-primary text-center" style="text-transform: capitalize ">Sign in</h2>
                    <form >
                        <div class="form-section">
                            <div class="form-outline mb-4">
                                <input type="email" id="email" class="form-control" />
                                <label class="form-label" for="email">Email address</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="password" id="password" class="form-control" />
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg text-white" >Sign in</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <p>Don't have an account? <a href="#signup">Sign up here</a>.</p>
                    </div>
                    <div class="text-center">
                        <p>or sign in with:</p>
                        <div class="social-buttons">
                            <button type="button" class="btn btn-link btn-floating mx-1" >
                                <i class="fab fa-facebook-f" style="position:relative; bottom:7px; right:2px;"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google" style="position:relative; bottom:7px; right:2px;"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter" style="position:relative; bottom:7px; right:2px;"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        
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
       // Get all tabs and tab content
const tabs = document.querySelectorAll('.tab');
const tabContents = document.querySelectorAll('.content');

// Add click event listeners to tabs
tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        // Remove 'active' class from all tabs and tab contents
        tabs.forEach((tab) => tab.classList.remove('active'));
        tabContents.forEach((content) => content.classList.remove('active'));

        // Add 'active' class to the clicked tab and corresponding content
        tab.classList.add('active');
        tabContents[index].classList.add('active');
    });
});

        </script>
        
        </body>
        </html>