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

<body class="bg-white">
    <!--------------------------------------------------------------------------------------->
    <?php
    include './footer.php';?>
    <main id="main">
      
            <!------ end header---->
            <!--Page Title-->
            <section class="page-title-two bg-color-1 centred">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
                </div>
                <div class="auto-container">
                    <div class="content-box clearfix">
                        <h1>Area Canvertor</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li>Area Canvertor</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->
            <!---------area convertor ------>
            <section class="Canvertor-banner">
                <div class="container">
                    <div class="banner-inside">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="left-square">
                                    <form class="p-5">
                                        <div class="property-form-group">
                                            <label for="state">Select State</label>
                                            <select id="state" name="state">
                                                <option value="state1">Maharashtra</option>
                                                <option value="state2">Kerla</option>
                                                <option value="state3">Bihar</option>
                                                <option value="state4">Uttarpradesh</option>
                                                <option value="state5">Tamilnadu</option>
                                                <option value="state6">Bangluru</option>
                                                <option value="state7">Delhi</option>
                                                <option value="state8">Madhyapradesh</option>
                                                <option value="state9">punjab</option>
                                                <option value="state10">Rajasthan</option>

                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                        <div class="property-form-group">
                                            <label for="units">Enter No. of Units (Square Meter)</label>
                                            <input type="number" id="units" name="units" min="0"
                                                oninput="convertUnits()">
                                        </div>
                                        <div class="d-flex" style="column-gap: 16px;">
                                            <div class="property-form-group">
                                                <label for="converted-units">Convert Units</label>
                                                <select id="from-units" name="from-units" onchange="convertUnits()">
                                                    <!-- Options for different units to convert to -->
                                                    <option value="guntha">Guntha</option>
                                                    <option value="square-inch">Square Inch</option>
                                                    <option value="Square-Meter">Square Meter</option>
                                                    <option value="Hectare">Hectare</option>
                                                    <option value="Ground">Ground</option>
                                                    <option value="Bigha">Bigha </option>
                                                    <option value="Square-Mile">Square Mile</option>
                                                    <option value="Square-Karam">Square Karam</option>
                                                    <option value="Square Kilometer">Square Kilometer </option>
                                                    <option value="Murabba">Murabba </option>
                                                    </option>
                                                    <option value="Decimal">Decimal </option>

                                                    <option value="Lessa">Lessa </option>
                                                    </option>
                                                    <option value="Cent">Cent</option>
                                                    <option value="Biswa-Kacha ">Biswa Kacha</option>
                                                    <option value="Marla">Marla </option>
                                                    <option value="Chatak">Chatak</option>
                                                    <option value="Dhur">Dhur</option>
                                                    <option value="Biswa">Biswa </option>
                                                    <option value="Acre">Acre</option>
                                                    <option value="Square-Karam">Square Meter </option>
                                                    <option value="Square-Yard">Square Yard </option>
                                                    </option>
                                                    <option value="Kanal">Kanal</option>
                                                    <option value="Gaj ">Gaj</option>
                                                    <option value="Killa">Killa</option>
                                                    <option value="Pura">Pura</option>
                                                    <option value="Katha">Katha</option>
                                                    <option value="Square Feet">Square Feet </option>
                                                    <option value="Square Centimeter">Square Centimeter</option>
                                                </select>
                                            </div>

                                            <div class="property-form-group">
                                                <label for="converted-units">Converted Units</label>
                                                <select id="to-units" name="to-units" onchange="convertUnits()">
                                                    <!-- Options for different units to convert to -->
                                                    <option value="guntha">Guntha</option>
                                                    <option value="square-inch">Square Inch</option>
                                                    <option value="Hectare">Hectare</option>
                                                    <option value="Ground">Ground</option>
                                                    <option value="Bigha">Bigha</option>
                                                    <option value="Square Mile">Square Mile</option>
                                                    <option value="Square Karam">Square Karam</option>
                                                    <option value="Square Kilometer">Square Kilometer</option>
                                                    <option value="Murabba">Murabba</option>
                                                    <option value="Decimal">Decimal</option>
                                                    <option value="Lessa">Lessa</option>
                                                    <option value="Cent">Cent</option>
                                                    <option value="Biswa Kacha">Biswa Kacha</option>
                                                    <option value="Marla">Marla</option>
                                                    <option value="Chatak">Chatak</option>
                                                    <option value="Dhur">Dhur</option>
                                                    <option value="Biswa">Biswa</option>
                                                    <option value="Acre">Acre</option>
                                                    <option value="Square Yard">Square Yard</option>
                                                    <option value="Square Meter">Square Meter</option>
                                                    <option value="Kanal">Kanal</option>
                                                    <option value="Gaj">Gaj</option>
                                                    <option value="Killa">Killa</option>
                                                    <option value="Pura">Pura</option>
                                                    <option value="Katha">Katha</option>
                                                    <option value="Square Feet">Square Feet</option>
                                                    <option value="Square Centimeter">Square Centimeter</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="property-form-group">
                                            <label>Conversion :</label>
                                            <input type="text" id="conversion" name="conversion">

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="image-convertor">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!---------area convertor ------>
            <section class="convertor mx-auto ">
                <div class="container">
                    <h3 class="my-3">Main Unit Calculators</h3>
                    <div class="row g-0 mb-5">
                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6>Square Feet</h6>
                                <ul class="mt-3">
                                    <li><a>Sqft to Gaj</a></li>
                                    <li><a>Sqft to Sqm</a></li>
                                    <li><a>Sqft to Acre</a></li>
                                    <li><a>Sqft to Sq Yard</a></li>
                                    <li><a>Sqft to Cent</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6> Square Meter</h6>
                                <ul class="mt-3">
                                    <li><a>Sqm to Sqft</a></li>
                                    <li><a> Sqm to Gaj</a></li>
                                    <li><a>Sqm to Acre</a></li>
                                    <li><a> Sqm to Hectare</a></li>
                                    <li><a> Sqm to Cent</a></li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6>Acre</h6>
                                <ul class="mt-3">
                                    <li><a>Acre to Hectare</a></li>
                                    <li><a>Acre to Sqm</a></li>
                                    <li><a>Acre to Sqft</a></li>
                                    <li><a> Acre to Cent</a></li>
                                    <li><a> Acre to Bigha</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6> Hectare</h6>
                                <ul class="mt-3">
                                    <li><a>Hectare to Sqm</a></li>
                                    <li><a>Hectare to Sqft</a></li>
                                    <li><a>Hectare to Acre</a></li>
                                    <li><a>Hectare to Bigha</a></li>
                                    <li><a>Hectare to Cent</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6>Gaj</h6>
                                <ul class="mt-3">
                                    <li><a>Gaj to Sqm</a></li>
                                    <li><a>Gaj to Sqft</a></li>
                                    <li><a>Gaj to Bigha</a></li>
                                    <li><a>Gaj to Sq Yard</a></li>
                                    <li><a>Gaj to Biswa</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="row  g-0 mb-5">

                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6>Bigha</h6>
                                <ul class="mt-3">
                                    <li><a>Bigha to Sqft</a></li>
                                    <li><a>Bigha to Gaj</a></li>
                                    <li><a>Bigha to Acre</a></li>
                                    <li><a>Bigha to Hectare</a></li>
                                    <li><a>Bigha to Katha</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6> Sq Yard</h6>
                                <ul class="mt-3">
                                    <li><a>Sq Yard to Sqft</a></li>
                                    <li><a> Sq Yard to Sqm</a></li>
                                    <li><a>Sq Yard to Acre</a></li>
                                    <li><a> Sq Yard to Gaj</a></li>
                                    <li><a>Sq Yard to Cent</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6>Cent</h6>
                                <ul class="mt-3">
                                    <li><a>Cent to Sqft</a></li>
                                    <li><a>Cent to Sqm</a></li>
                                    <li><a>Cent to Acre</a></li>
                                    <li><a> Cent to Hectare</a></li>
                                    <li><a>Cent to Sq Yard </a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6>Katha</h6>
                                <ul class="mt-3">
                                    <li><a>Katha to Sqft</a></li>
                                    <li><a>Katha to Gaj</a></li>
                                    <li><a>Katha to Acre</a></li>
                                    <li><a>Katha to Bigha</a></li>
                                    <li><a>Katha to Decimal</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6>Guntha</h6>
                                <ul class="mt-3">
                                    <li><a>Guntha to Sqft</a></li>
                                    <li><a>Guntha to Sqm</a></li>
                                    <li><a>Guntha to Acre</a></li>
                                    <li><a>Guntha to Bigha</a></li>
                                    <li><a>Guntha to Katha</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="row  g-0 mb-5">

                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6> Other Units</h6>
                                <ul class="mt-3">
                                    <li><a>Meter to Feet</a></li>
                                    <li><a>Feet to Meter</a></li>
                                    <li><a>Inches to CM</a></li>
                                    <li><a>MM to Inches</a></li>
                                    <li><a> CM to Feet</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6>Other Units</h6>
                                <ul class="mt-3">
                                    <li><a>Inches to Feet</a></li>
                                    <li><a> Inches to MM</a></li>
                                    <li><a>Feet to CM</a></li>
                                    <li><a> CM to Inches</a></li>
                                    <li><a>Cubic Feet to Cubic Me</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-2 col- md-4 col-12">
                            <div class="card">
                                <h6> Other Units</h6>
                                <ul class="mt-3">
                                    <li><a>Meter to CM</a></li>
                                    <li><a>Meter to Inches</a></li>
                                    <li><a>MM to CM</a></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- area theory -->
            <section class="area-information mx-auto ">
                <div class="container">
                    <h1 class="my-3">What is Land Area Calculator</h1>

<p>A Land area calculator is a useful tool which helps you convert one unit into another easily. Across India, a number of different measurements are used for lands. If you want to find the equivalent unit of the local term for the unit, the easiest way would be to do it through a land calculator.
    </p>
    <h2 class="my-3">Most Searched Conversion Units for Land Area Calculator</h2>
<h4 class="my-2">1. Square Feet</h4>
<p>Square feet also denoted as sq.ft., or ft2 is an area of a square with sides measuring 1 foot. This is a standard measurement unit used in all the cities of India. Along with India, the US, UK, Canada, Bangladesh, Pakistan, Nepal, Hong Kong, Ghana, Singapore, and Malaysia are the other countries that use square feet for the measurement of the land.</p>
<h4  class="my-2">2. Square Meter</h4>
<p>A square metre is a unit of area measurement that is used all over the world to determine two-dimensional areas such as a ground or floor and is widely acknowledged as the standard international unit of area measurement. A square meter, often referred to as sq.m. or M2, is a measuring unit of area equivalent to a one metre on each side. While measuring properties, the area is proportional to the square of the linear dimension. It should be properly noted. There are, therefore, four times larger areas if the linear dimensions are doubled.
</p>
<h4  class="my-2">3. Hectare</h4>
<p>Hectare is one of the few commonly used land measurement units of the metric system across the world. It is denoted as 'ha'. The hectare has become more popular, even though it is the primary metric unit of land measurement. While the acre is also commonly used to measure land around the world, the hectare and the acre are different in that an acre is a unit of area, while the hectare is a metric unit. Australia, Burma, Canada, the European Union, India, the United States, and the United Kingdom are among the geographies where it is most used. In Argentina, the hectare is known as manzana, in the Netherlands as bunder, in China as gong qing, and in Iran as jerib.</p>
<h4 class="my-2">4. Acre</h4>
<p>Originally used in the imperial system of units, Acre is one of the oldest measuring units used across the world to measure land. An acre could also be defined as an area one furlong long by 4 rods wide. You can measure an acre for the land of different shapes such as rectangles, circles, or even pentagons. The land of one acre can be of any length or width as long as the total land area does not exceed 43,560 square feet.
</p>
<h4 class="my-2">5. Bigha</h4>
<p>Bigha is one of the traditional units of measurement used in the North Indian States. Bigha is being used in Haryana, Punjab, Rajasthan, Madhya Pradesh, Assam, Uttar Pradesh, Bihar, West Bengal, Gujarat, Himachal Pradesh, Jharkhand, and Uttarakhand states for measurement of land. However, the value of Bigha is different from one state to another. Pucca or pakka bigha has been commonly used in Rajasthan and parts of Uttarakhand, Uttar Pradesh, and Bihar, while kuchha bigha was mainly used by landlords when dealing with their tenants.
</p>

                </div>
            </section>
            <!--sticky Header-->
  
    </main>
    <!-- main-footer -->
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





</body>

</html>