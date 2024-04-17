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
    <main id="main">
        <?php
        include './header.php';?>
        <!-- main-header end -->
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
                            <li>Length Canvertor</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--End Page Title-->
            <!--------- length convertor------>
            <section class="length-convertor">
                <div class="container">
                    <div class="inner-lengthconvertor">

                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-8 my-3">
                                <h1 style="color: #007bff;font-weight: bold;"> Convert cm to inches</h1>
                                <p class="mb-3 mt-1" style="color: #000;">Please provide values below to convert centimeter [cm] to inch [in], or vice versa.</p>   

                               
                            </div>
                        </div>
                        <div class="row">
<div class="col-lg-7 col-md-4 col-12">
    <div class="calculator-container" style="text-align: right;">
        <img src="assets/images/calculator.png" width="85px" height="85px">
    </div>
    <div class="measurement-container p-5" style="background-color: #e4e2e2;">
    <form>

        <label>Form :</label> <input type="text" id="From" name="From"> <label>Centimeter</label><br>
        <label>To :</label> <input type="text" id="From" name="From"> <label>inch</label>
        <div class="button-converter d-flex">
            <button>convert</button>
            <button>Clear</button>
            <button>Reaverse</button>

        </div>
    </form>    
    </div>
</div>
                         
                            <div class="col-lg-4 col-md-4 col-12" >
                                <div class="p-1" style="  background-color: #007bff; color: #fff; text-align: center;">
                                    All Converters</div>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Common Converters
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex" style="column-gap: 18px;">
                                                    <table>
                                                        <tr>
                                                            <td><a>Length</a></td>
                                                            <td><a> Volume</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a>Area</a></td>
                                                            <td><a>Energy </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a>Force</a></td>
                                                            <td><a>Speed </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a>Fuel Consumption </a></td>
                                                            <td><a> Storage </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a> Currency</a></td>
                                                            <td><a>Weight and Mass</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a>Temperature</a></td>
                                                            <td><a> Pressure </a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a> Power</a></td>
                                                            <td><a>Time</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a>Angle</a></td>
                                                            <td><a>NumbersData</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a>Volume - Dry</a></td>
                                                            <td><a>Case</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Engineering  Converters
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex" style="column-gap: 18px;">
                                                    <div>
                                                        <li><a>Volume </a></li>
                                                        <li><a>Area</a></li>
                                                        <li><a>Energy</a></li>
                                                        <li><a>Force   </a></li>
                                                        <li><a>Speed  </a></li>
                                                        <li><a>Fuel Consumption </a></li>
                                                        <li><a>Data Storage </a></li>
                                                        <li><a>  Currency</a></li>
                                                        <li><a>  Acceleration</a></li>
                                                        <li><a>Density  </a></li>
                                                        <li><a> moment of Inertia </a></li>
                                                        <li><a> Torque  </a></li>
                                                       
                                                    </div>

                                                    <div>
                                                        <li><a>  Temperature</a></li>
                                                        <li><a>Pressure</a></li>
                                                        <li><a> Power </a></li>
                                                        <li><a>  Time</a></li>
                                                        <li><a>Angle</a></li>
                                                        <li><a>  Numbers</a></li>
                                                        <li><a> Volume  - Dry</a></li>
                                                        <li><a>Velocity - Angular</a></li>
                                                        <li><a>Acelaration - Angular</a></li>
                                                        <li><a> Specific Volume  </a></li>
                                                        <li><a> moment of force  </a></li>
                                                       
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Heat Converters
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="d-flex" style="column-gap: 18px;">
                                                    <table>
                                                        <tr>
                                                        
                                                            <td><a>fuel Efficiency - mass</a></td>
                                                            
                                                            <td><a>fuel Efficiency - Volume</a></td>
                                                        </tr>
                                                        <tr>
                                                            
                                                            <td><a>Temperature Interval</a></td>
                                                            
                                                            <td><a>Thermal Expansion</a></td>
                                                        </tr>
                                                        <tr>
                                                         
                                                            <td><a>Thermal Resistance</a></td>
                                                       
                                                            <td><a>Thermal Conductivity</a></td>
                                                        </tr>
                                                        <tr>
                                                       
                                                            <td><a>Specific Heat Capacity</a></td>
                                                     
                                                            <td><a>Heat Density</a></td>
                                                        </tr>
                                                        <tr>
                                                          
                                                            <td><a>Heat Flux Density</a></td>
                                                       
                                                            <td><a>Heat Transfer Coefficient</a></td>
                                                        </tr>
                                                    </table>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Fluid Converters
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <table>
                                                    <tr>
                                                    
                                                        <td><a>Flow </a></td>
                                                        
                                                        <td><a>Flow - mass</a></td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td><a>Flow - molar</a></td>
                                                        
                                                        <td><a>Mass flux density</a></td>
                                                    </tr>
                                                    <tr>
                                                     
                                                        <td><a>Concentration molar </a></td>
                                                   
                                                        <td><a>Concentration Solution </a></td>
                                                    </tr>
                                                    <tr>
                                                   
                                                        <td><a>Viscocity Dynamic </a></td>
                                                 
                                                        <td><a>Viscocity Kinematic </a></td>
                                                    </tr>
                                                    <tr>
                                                      
                                                        <td><a>Surface Tension </a></td>
                                                   
                                                        <td><a>Permiablity</a></td>
                                                    </tr>
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Light Converters
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <table>
                                                    <tr>
                                                    
                                                        <td><a>Luminance </a></td>
                                                        
                                                        <td><a>Luminous Intensity</a></td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td><a>Illumination</a></td>
                                                        
                                                        <td><a>Digital Image Resolution</a></td>
                                                    </tr>
                                                    <tr>
                                                     
                                                        <td><a>Frequency Wavelength</a></td>
                                                   
                                                        
                                                    </tr>
                                                    
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Electricity Converters
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <table>
                                                    <tr>
                                                    
                                                        <td><a>Charge</a></td>
                                                        
                                                        <td><a>Linear Charge Density</a></td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td><a>Surface Charge Density</a></td>
                                                        
                                                        <td><a>Volume Charge Density</a></td>
                                                    </tr>
                                                    <tr>
                                                     
                                                        <td><a>Current </a></td>
                                                        <td><a> Linear Current Density  </a></td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td><a>Surface Current Density</a></td>
                                                        
                                                        <td><a>Electric field Strength</a></td>
                                                    </tr>
                                                    <tr>
                                                     
                                                        <td><a>Electric Potential </a></td>
                                                        <td><a>Electric Resistance</a></td>
                                                        
                                                    </tr>
                                                    <tr>
                                            
                                                        <td><a>Electric Resistivity </a></td>
                                                        <td><a>Electric Conductance</a></td>
                                                        
                                                    </tr>
                                                    <tr>
                                            
                                                        <td><a>Electric Conductivity </a></td>
                                                        <td><a>Electric Capacitance</a></td>
                                                        
                                                    </tr>
                                                    <tr>
                                            
                                                        <td><a>Inductance </a></td>
                                                        
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Magnetism Converters
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <table>
                                                    <tr>
                                                    
                                                        <td><a>Magnetomotive Force</a></td>
                                                        
                                                        <td><a>Magnetic field Strength</a></td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td><a>Magnetic flux</a></td>
                                                        
                                                        <td><a>Magnetic flux Density</a></td>
                                                    </tr>
                                                  
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Radiology Converters
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <table>
                                                    <tr>
                                                    
                                                        <td><a>Radiation </a></td>
                                                        
                                                        <td><a>Radiation Acitivity</a></td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td><a>Radiation Exposure</a></td>
                                                        
                                                        <td><a>Radiation Absorbed-dose</a></td>
                                                    </tr>
                                                  
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Common Unit Systems
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!--------- length convertor------>

        
      

    </main>
    <?php
        include './footer.php';?>
        <!-- main-footer end -->
        <!-- main-footer end -->



   
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