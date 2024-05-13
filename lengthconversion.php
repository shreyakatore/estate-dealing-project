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
       
            <!------ end header---->
            <!--Page Title-->
            <section class="page-title-two bg-color-1 centred">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
                </div>
                <div class="auto-container">
                    <div class="content-box clearfix">
                        <h1>Length Conversion</h1>
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li>Length Conversion</li>
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
                                <h1 style="color: #007bff;font-weight: bold;"> Length Convertor</h1>
                                <div class="calculator-container" style="text-align: right;">
                                    <img src="assets/images/calculator.png" width="85px" height="85px">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-7 col-md-7 col-12 ">

                                <div class="measurement-container p-5" style="background-color: #e4e2e2;">
                                    <form>
                                        <div class="row">
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-12">
                                                <label  class="text-dark"> From :  </label> <input type="text" class="form-control" placeholder="cm" >
                                            </div>

                                            <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-12">
                                            <label  class="text-dark"> To :  </label> <input type="text" class="form-control" placeholder="inches" >
                                                <!-- Add a button to trigger the conversion -->
                                            </div>

                                        </div>
                                    </form>
                                    <div class="button-container">
    <div class="mx-auto d-flex justify-content-center my-3" style="column-gap: 7px;">
        <button id="convertButton" class="btn btn-primary py-2" style="color:#fff;">Convert</button>
        <button id="clearButton" class="btn btn-primary py-2" style="color:#fff;">Clear</button>
        <button id="reverseButton" class="btn btn-primary py-2" style="color:#fff;">Reverse</button>
    </div>
</div>




                                </div>

                                <div class = "information-measurement-container my-5">
 <h4 class = "my-3 text-primary text-bold">Centimeter </h4>
<span class = "text-dark text-bold">  Definition: </span>A centimeter (symbol: cm) is a unit of length in the International System of Units (SI), the current form of the metric system. It is defined as 1/100 meters.

History/origin: A centimeter is based on the SI unit meter, and as the prefix "centi" indicates, is equal to one hundredth of a meter. Metric prefixes range from factors of 10-18 to 1018 based on a decimal system, with the base (in this case the meter) having no prefix and having a factor of 1. Learning some of the more commonly used metric prefixes, such as kilo-, mega-, giga-, tera-, centi-, milli-, micro-, and nano-, can be helpful for quickly navigating metric units.

Current use: The centimeter, like the meter, is used in all sorts of applications worldwide (in countries that have undergone metrication) in instances where a smaller denomination of the meter is required. Height is commonly measured in centimeters outside of countries like the United States.

    <h4 class = "my-3 text-primary text-bold">Inch </h4>
    <span class = "text-dark text-bold">  Definition: </span> An inch (symbol: in) is a unit of length in the imperial and US customary systems of measurement. An inch was defined to be equivalent to exactly 25.4 millimeters in 1959. There are 12 inches in a foot and 36 inches in a yard.

History/origin: The term "inch" was derived from the Latin unit "uncia" which equated to "one-twelfth" of a Roman foot.

There have been a number of different standards for the inch in the past, with the current definition being based on the international yard. One of the earliest definitions of the inch was based on barleycorns, where an inch was equal to the length of three grains of dry, round barley placed end-to-end. Another version of the inch is also believed to have been derived from the width of a human thumb, where the length was obtained from averaging the width of three thumbs: a small, a medium, and a large one.

Current use: The inch is mostly used in the United States, Canada, and the United Kingdom. It is also sometimes used in Japan (as well as other countries) in relation to electronic parts, like the size of display screens.

<h4 class = "my-3 text-primary text-bold">Centimeter to Inch Conversion Table </h4>
<table class = "centimeter-table">
  <tr>
    <th>Centimeter [cm]</th>
    <th>Inch [in]</th>
  </tr>
  <tr>
    <td>0.01 cm</td>
    <td>0.0039370079 in</td>
  </tr>
  <tr>
    <td>0.1 cm</td>
    <td>0.0393700787 in</td>
  </tr>
  <tr>
    <td>1 cm</td>
    <td>0.3937007874 in</td>
  </tr>
  <tr>
    <td>2 cm</td>
    <td>0.7874015748 in</td>
  </tr>
  <tr>
    <td>3 cm</td>
    <td>1.1811023622 in</td>
  </tr>
  <tr>
    <td>5 cm</td>
    <td>1.968503937 in</td>
  </tr>
  <tr>
    <td>10 cm</td>
    <td>3.937007874 in</td>
  </tr>
  <tr>
    <td>20 cm</td>
    <td>7.874015748 in</td>
  </tr>
  <tr>
    <td>50 cm</td>
    <td>19.6850393701 in</td>
  </tr>
  <tr>
    <td>100 cm</td>
    <td>39.3700787402 in</td>
  </tr>
  <tr>
    <td>1000 cm</td>
    <td>393.7007874016 in</td>
  </tr>
</table>



</div>
<div  style="color: #007bff;">  
     <h3 class="my-5" style="color: #007bff; font-weight: bold;" >Popular length unit conversions</h3>   
    <div class="row">
       <div class="col-lg-6 col-md-6 col-12" style="text-decoration: underline;">
           <li><a>cm to inches</a></li>
           <li><a>mm to inches</a></li>
           <li><a>meters to feet</a></li>
           <li><a>km to miles</a></li>
           <li><a>cm to feet</a></li>
           <li><a>inches to feet</a></li>
           <li><a>meters to yards</a></li>
           <li><a>mm to cm</a></li>
           <li><a>cm to m</a></li>
           <li><a>cm to km</a></li>
           <li><a>mm to feet</a></li>
           <li><a>meters to miles </a></li>
           <li><a>feet to miles</a></li>
           <li><a>yard to feet</a></li>
           <li><a>inches to meters </a></li>
           <li><a>mm to m</a></li>
           <li><a>km to m</a></li>
           <li><a>inches to yards</a></li>
           <li><a>yards to miles </a></li>

       </div>
       <div class="col-lg-6 col-md-6 col-12" style="text-decoration: underline;">
           <li><a>inches to cm</a></li>
           <li><a>inches to mm</a></li>
           <li><a>feet to meters</a></li>
           <li><a>miles to km </a></li>
           <li><a>feet to cm </a></li>
           <li><a> feet to inches </a></li>
           <li><a>yards to meters </a></li>
           <li><a>cm to mm</a></li>
           <li><a>m to cm </a></li>
           <li><a>km to cm</a></li>
           <li><a> feet to mm</a></li>
           <li><a>miles to meters </a></li>
           <li><a>cm to mm</a></li>
           <li><a>m to cm</a></li>
           <li><a>km to cm </a></li>
           <li><a>feet to mm</a></li>
           <li><a>miles to meters </a></li>
           <li><a> miles to feet </a></li>
           <li><a>feet to yards </a></li>
           <li><a>meters to inches </a></li>
           <li><a>m to mm</a></li>
           <li><a>m to km </a></li>
           <li><a>yards to inches </a></li>
           <li><a>miles to yards</a></li>

       </div>
    </div>
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

            <section  class="unit-conversion mb-5" >
                <div class="container">
                    <div class="length-unit"style="background-color: #fff; padding: 5%; color:#000">
                        <h3 style="color: #007bff; font-weight: bold;">Complete list of length units for conversion</h3>  

                        <ol style="list-style-type: disc; margin-top: 2%;">
                            <li>meter [m]</li>
                            <li> 1 kilometer [km] = 1000 meter [m]</li> 
                            <li> <a style="color:#007bff; text-decoration:underline;">kilometer to meter, meter to kilometer </a></li>
                            <li> 1 decimeter [dm] = 0.1 meter [m] </li>
                            <li> <a style="color:#007bff; text-decoration:underline;">decimeter to meter,   meter to decimeter</a></li>
                            <li> 1 centimeter [cm] = 0.01 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;"> centimeter to meter,   meter to centimeter</a></li>
                            <li>  1 millimeter [mm] = 0.001 meter [m]</li>
                            <li><a style="color:#007bff; text-decoration:underline;"> millimeter to meter,   meter to millimeter</a></li>
                            <li> 1 micrometer [µm] = 1.0E-6 meter [m] </li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   micrometer to meter,   meter to micrometer </a> </li>
                            <li>    1 nanometer [nm] = 1.0E-9 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   nanometer to meter,   meter to nanometer </a></li>
                            <li>    1 mile [mi, mi(Int)] = 1609.344 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  mile to meter,   meter to mile </a></li>
                            <li>    1 yard [yd] = 0.9144 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  yard to meter,   meter to yard </a></li>
                            <li>    1 foot [ft] = 0.3048 meter [m]</li> 
                            <li> <a style="color:#007bff; text-decoration:underline;">   foot to meter,   meter to foot </a></li>
                            <li>    1 inch [in] = 0.0254 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   inch to meter,   meter to inch </a></li>
                            <li>    1 light year [ly] = 9.46073047258E+15 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">      light year to meter,   meter to light year </a></li>
                            <li>    1 exameter [Em] = 1.0E+18 meter [m] </li>
                            <li>   <a style="color:#007bff; text-decoration:underline;"> exameter to meter,   meter to exameter </a></li>
                            <li>    1 petameter [Pm] = 1.0E+15 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   petameter to meter,   meter to petameter </a></li>
                            <li>    1 terameter [Tm] = 1000000000000 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   terameter to meter,   meter to terameter </a></li>
                            <li>    1 gigameter [Gm] = 1000000000 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   gigameter to meter,   meter to gigameter </a></li>
                             <li>    1 megameter [Mm] = 1000000 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   megameter to meter,   meter to megameter  </a></li>
                            <li>    1 hectometer [hm] = 100 meter [m] </li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  hectometer to meter,   meter to hectometer </a></li>
                            <li>    1 dekameter [dam] = 10 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  dekameter to meter,   meter to dekameter </a></li>
                            <li>    1 micron [µ] = 1.0E-6 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   micron to meter,   meter to micron </a> </li>
                            <li>    1 picometer [pm] = 1.0E-12 meter [m] </li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   picometer to meter,   meter to picometer </a></li>
                            <li>    1 femtometer [fm] = 1.0E-15 meter [m]</li>   
                            <li> <a style="color:#007bff; text-decoration:underline;">   femtometer to meter,   meter to femtometer</a></li>
                            <li>    1 attometer [am] = 1.0E-18 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   attometer to meter,   meter to attometer </a></li>
                            <li>    1 megaparsec [Mpc] = 3.08567758128E+22 meter [m]</li>   
                            <li>  <a style="color:#007bff; text-decoration:underline;">  megaparsec to meter,   meter to megaparsec </a></li>
                            <li>    1 kiloparsec [kpc] = 3.08567758128E+19 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  kiloparsec to meter,   meter to kiloparsec </a></li>   
                            <li>    1 parsec [pc] = 3.08567758128E+16 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   parsec to meter,   meter to parsec </a></li>
                            <li>    1 astronomical unit [AU, UA] = 149597870691 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  astronomical unit to meter,   meter to astronomical unit </a></li>
                            <li>    1 league [lea] = 4828.032 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   league to meter,   meter to league </a></li>
                            <li>    1 nautical league (UK) = 5559.552 meter [m] </li>   
                            <li><a style="color:#007bff; text-decoration:underline;">    nautical league (UK) to meter,   meter to nautical league (UK) </a></li>
                            <li>    1 nautical league (int.) = 5556 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">  nautical league (int.) to meter,   meter to nautical league (int.) </a></li>
                            <li>    1 league (statute) [st.league] = 4828.0416560833 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  league (statute) to meter,   meter to league (statute) </a></li>
                            <li>    1 nautical mile (UK) [NM (UK)] = 1853.184 meter [m]</li>
                            <li>   <a style="color:#007bff; text-decoration:underline;"> nautical mile (UK) to meter,   meter to nautical mile (UK) </a></li>   
                            <li>    1 nautical mile (international) = 1852 meter [m] </li>
                            <li>   <a style="color:#007bff; text-decoration:underline;"> nautical mile (international) to meter,   meter to nautical mile (international)</a></li>
                            <li>    1 mile (statute) [mi, mi (US)] = 1609.3472186944 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  mile (statute) to meter,   meter to mile (statute)</a></li>
                            <li>    1 mile (US survey) [mi] = 1609.3472186944 meter [m]</li>
                            <li>  ,<a style="color:#007bff; text-decoration:underline;">  mile (US survey) to meter,   meter to mile (US survey) </a></li>
                            <li>    1 mile (Roman) = 1479.804 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  mile (Roman) to meter,   meter to mile (Roman) </a> </li>   
                            <li>    1 kiloyard [kyd] = 914.4 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   kiloyard to meter,   meter to kiloyard </a></li>
                            <li>    1 furlong [fur] = 201.168 meter [m]</li>
                            <li>   <a style="color:#007bff; text-decoration:underline;"> furlong to meter,   meter to furlong </a></li>
                            <li>    1 furlong (US survey) [fur] = 201.1684023368 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  furlong (US survey) to meter,   meter to furlong (US survey)</a> </li>
                            <li>    1 chain [ch] = 20.1168 meter [m]</li>
                            <li>   <a style="color:#007bff; text-decoration:underline;"> chain to meter,   meter to chain </a></li>   
                            <li>    1 chain (US survey) [ch] = 20.1168402337 meter [m]</li>
                            <li>   <a style="color:#007bff; text-decoration:underline;"> chain (US survey) to meter,   meter to chain (US survey) </a></li>
                            <li>    1 rope = 6.096 meter [m] </li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  rope to meter,   meter to rope</a></li>
                            <li>    1 rod [rd] = 5.0292 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  rod to meter,   meter to rod </a></li>
                            <li>    1 rod (US survey) [rd] = 5.0292100584 meter [m]</li>
                            <li>   <a style="color:#007bff; text-decoration:underline;"> rod (US survey) to meter,   meter to rod (US survey) </a></li>   
                            <li>    1 perch = 5.0292 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  perch to meter,   meter to perch </a></li>
                            <li>    1 pole = 5.0292 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   pole to meter,   meter to pole </a></li>
                            <li>    1 fathom [fath] = 1.8288 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  fathom to meter,   meter to fathom </a></li>
                            <li>    1 fathom (US survey) [fath] = 1.8288036576 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  fathom (US survey) to meter,   meter to fathom (US survey) </a></li>
                            <li>    1 ell = 1.143 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   ell to meter,   meter to ell </a></li>
                            <li>1 foot (US survey) [ft] = 0.3048006096 meter [m]</li>   
                            <li> <a style="color:#007bff; text-decoration:underline;"> foot (US survey) to meter,   meter to foot (US survey) </a></li> 
                            <li> 1 link [li] = 0.201168 meter [m]</li> 
                            <li><a style="color:#007bff; text-decoration:underline;"> link to meter,   meter to link </a></li>
                            <li> 1 link (US survey) [li] = 0.2011684023 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">link (US survey) to meter,   meter to link (US survey) </a></li>  
                            <li>1 cubit (UK) = 0.4572 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">cubit (UK) to meter,   meter to cubit (UK)</a></li>
                            <li>1 hand = 0.1016 meter [m]</li>     
                            <li>  <a style="color:#007bff; text-decoration:underline;">  hand to meter,   meter to hand </a></li>    
                            <li> 1 span (cloth) = 0.2286 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   span (cloth) to meter,   meter to span (cloth) </a></li>
                            <li>    1 finger (cloth) = 0.1143 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   finger (cloth) to meter,   meter to finger (cloth) </a></li>
                            <li>    1 nail (cloth) = 0.05715 meter [m]</li>  
                            <li>  <a style="color:#007bff; text-decoration:underline;">  nail (cloth) to meter,   meter to nail (cloth) </a></li>
                            <li>    1 inch (US survey) [in] = 0.0254000508 meter [m] </li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   inch (US survey) to meter,   meter to inch (US survey) </a></li>
                            <li>   1 barleycorn = 0.0084666667 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  barleycorn to meter,   meter to barleycorn</a></li>
                            <li>    1 mil [mil, thou] = 2.54E-5 meter [m]</li>   
                            <li> <a style="color:#007bff; text-decoration:underline;">   mil to meter,   meter to mil</a></li>
                            <li>    1 microinch = 2.54E-8 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  microinch to meter,   meter to microinch </a></li>
                            <li>    1 angstrom [A] = 1.0E-10 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  angstrom to meter,   meter to angstrom </a></li>  
                            <li>    1 a.u. of length [a.u., b] = 5.2917724900001E-11 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  a.u. of length to meter,   meter to a.u. of length </a></li>
                            <li>    1 X-unit [X] = 1.00208E-13 meter [m]</li>
                           
                            <li> <a style="color:#007bff; text-decoration:underline;"> X-unit to meter,   meter to X-unit </a></li>   
                            <li>    1 fermi [F, f] = 1.0E-15 meter [m] </li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   fermi to meter,   meter to fermi </a></li>
                            <li>    1 arpent = 58.5216 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   arpent to meter,   meter to arpent </a></li>
                            <li>    1 pica = 0.0042333333 meter [m]</li>  
                            <li>   <a style="color:#007bff; text-decoration:underline;">  pica to meter,   meter to pica  </a></li>
                            <li>    1 point = 0.0003527778 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  point to meter,   meter to point </a></li>
                            <li>    1 twip = 1.76389E-5 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  twip to meter,   meter to twip </a></li>
                            <li>    1 aln = 0.5937777778 meter [m]</li>  
                            <li>  <a style="color:#007bff; text-decoration:underline;">  aln to meter,   meter to aln </a></li>
                            <li>    1 famn = 1.7813333333 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  famn to meter,   meter to famn </a>  </li>
                            <li>    1 caliber [cl] = 0.000254 meter [m] </li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  caliber to meter,   meter to caliber </a></li>
                            <li>    1 centiinch [cin] = 0.000254 meter [m]</li> 
                            <li>  <a style="color:#007bff; text-decoration:underline;">  centiinch to meter,   meter to centiinch </a></li>
                            <li>    1 ken = 2.11836 meter [m]</li>  
                            <li>  <a style="color:#007bff; text-decoration:underline;">  ken to meter,   meter to ken </a></li>
                            <li>    1 Russian archin = 0.7112 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  Russian archin to meter,   meter to Russian archin </a></li>
                            <li>    1 Roman actus = 35.47872 meter [m]</li>
                            <li>   <a style="color:#007bff; text-decoration:underline;"> Roman actus to meter,   meter to Roman actus </a></li>
                            <li>    1 vara de tarea = 2.505456 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   vara de tarea to meter,   meter to vara de tarea </a></li>
                            <li>    1 vara conuquera = 2.505456 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  vara conuquera to meter,   meter to vara conuquera </a></li>
                            <li> 1 vara castellana = 0.835152 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  vara castellana to meter,   meter to vara castellana </a> </li>  
                            <li>    1 cubit (Greek) = 0.462788 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">  cubit (Greek) to meter,   meter to cubit (Greek) </a></li>
                            <li>    1 long reed = 3.2004 meter [m] </li>
                            <li>   <a style="color:#007bff; text-decoration:underline;">  long reed to meter,  meter to long reed </a> </li>
                            <li>    1 reed = 2.7432 meter [m] </li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">   reed to meter,   meter to reed</a> </li>  
                            <li>    1 long cubit = 0.5334 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">   long cubit to meter,   meter to long cubit</a> </li>
                            <li>    1 handbreadth = 0.0762 meter [m]</li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">   handbreadth to meter,   meter to handbreadth</a> </li>
                            <li>    1 fingerbreadth = 0.01905 meter [m]</li>
                            <li>    <a style="color:#007bff; text-decoration:underline;"> fingerbreadth to meter,   meter to fingerbreadth </a> </li>  
                            <li>    1 Planck length = 1.61605E-35 meter [m]</li>
                            <li>     <a style="color:#007bff; text-decoration:underline;">    Planck length to meter,   meter to Planck length </a> </li>
                            <li>    1 Electron radius (classical) = 2.81794092E-15 meter [m] </li>
                            <li> <a style="color:#007bff; text-decoration:underline;">    Electron radius (classical) to meter,   meter to Electron radius (classical) </a>  </li>
                            <li>    1 Bohr radius [b, a.u.] = 5.2917724900001E-11 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;">   Bohr radius to meter,   meter to Bohr radius  </a></li>  
                            <li>    1 Earth's equatorial radius = 6378160 meter [m] </li>
                            <li>   <a style="color:#007bff; text-decoration:underline;"> Earth's equatorial radius to meter,   meter to Earth's equatorial radius </a></li>
                            <li>    1 Earth's polar radius = 6356776.9999999 meter [m] </li>
                            <li>  <a style="color:#007bff; text-decoration:underline;">   Earth's polar radius to meter,   meter to Earth's polar radius</a> </li>
                            <li>  1 Earth's distance from sun = 149600000000 meter [m]</li>
                            <li> <a style="color:#007bff; text-decoration:underline;"> Earth's distance from sun to meter,   meter to Earth's distance from sun </a> </li>  
                            <li> <a style="color:#007bff; text-decoration:underline;"> Sun's radius to meter,   meter to Sun's radius </a>  </li>
                            <li> 1 Sun's radius = 696000000 meter [m]</li>
                        
                        </ol>
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
        // Define an array of unit conversions


    </script>





</body>

</html>