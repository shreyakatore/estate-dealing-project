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
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="property-form-group">
                                                    <label>From :</label>
                                                    <input type="text" id="From" name="From">

                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="property-form-group">
                                                    <label> To :</label>
                                                    <input type="text" id="To" name="To">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div>
                                                    <select class="form-control " id="exampleFormControlSelect1"
                                                        height="300px">
                                                        <option value="meter [m]" selected> Meter [m]</option>
                                                        <option value="kilometer [km]"> Kilometer [km]</option>
                                                        <option value="decimeter [dm]">Decimeter [dm]</option>
                                                        <option value="centimeter [cm]"> Centimeter [cm]</option>
                                                        <option value="milimeter [mm]"> milimeter [mm]</option>
                                                        <option value="micrometer[µm]"> micrometer[µm]</option>
                                                        <option value="nanometer [nm]"> nanometer [nm]</option>
                                                        <option value="milimeter [mm]"> milimeter [mm]</option>
                                                        <option value="micrometer[µm]"> micrometer[µm]</option>
                                                        <option value="mile [mi, mi(Int)]">mile [mi, mi(Int)]</option>
                                                        <option value="foot [ft]">foot [ft]</option>
                                                        <option value="yard [yd]">yard [yd]</option>
                                                        <option value="inch [in]">inch [in]</option>
                                                        <option value="light year [ly] ">light year [ly]</option>
                                                        <option value=" exameter [Em]">exameter [Em]</option>
                                                        <option value=" petameter [Pm]">petameter [Pm]</option>
                                                        <option value=" terameter [Tm]">terameter [Tm]</option>
                                                        <option value="gigameter [Gm] ">gigameter [Gm]</option>
                                                        <option value=" megameter [Mm] ">megameter [Mm]</option> ">
                                                        </option>
                                                        <option value=" hectometer [hm]">hectometer [hm]</option>
                                                        <option value=" dekameter [dam]">dekameter [dam]</option>
                                                        <option value="micron [µ] ">micron [µ]</option>
                                                        <option value=" picometer [pm]">picometer [pm]</option>
                                                        <option value="femtometer [fm] ">femtometer [fm]</option>
                                                        <option value="attometer [am] ">attometer [am]</option>
                                                        <option value=" megaparsec [Mpc]">megaparsec [Mpc]</option>
                                                        <option value=" kiloparsec [kpc]">kiloparsec [kpc]</option>
                                                        <option value="parsec [pc] ">parsec [pc]</option>
                                                        <option value="astronomical unit [AU, UA] ">astronomical unit
                                                            [AU, UA]</option>
                                                        <option value="league [lea] ">league [lea]</option>
                                                        <option value="nautical league (UK)"> nautical league (UK)
                                                        </option>
                                                        <option value="nautical league (int.) ">nautical league (int.)
                                                        </option>
                                                        <option value="  [st.league]"> [st.league]</option>
                                                        <option value="league (statute) ">league (statute)</option>
                                                        <option value="  nautical mile (UK)[NM (UK)]"> nautical mile
                                                            (UK)[NM (UK)]</option>
                                                        <option value=" nautical mile (international)">nautical mile
                                                            (international)</option>
                                                        <option value=" mile (statute) ">mile (statute) </option>
                                                        <option value=" [mi, mi (US)]mile">[mi, mi (US)]mile</option>
                                                        <option value="  (US survey)"> (US survey)</option>
                                                        <option value=" [mi]mile (Roman) "> [mi]mile (Roman)</option>
                                                        <option value="kiloyard [kyd] ">kiloyard [kyd]</option>
                                                        <option value="furlong [fur] ">furlong [fur]</option>
                                                        <option value="furlong (US survey) ">furlong (US survey)
                                                        </option>
                                                        <option value=" [fur]chain [ch] " [fur]chain [ch]></option>
                                                        <option value="chain (US survey) [ch] "> chain (US survey) [ch]
                                                        </option>
                                                        <option value="roperod [rd] ">roperod [rd]</option>
                                                        <option value=" rod (US survey) [rd]">rod (US survey) [rd]
                                                        </option>
                                                        <option value="perchpolefathom [fath] ">perchpolefathom [fath]
                                                        </option>
                                                        <option value="fathom (US survey) [fath] ">fathom (US survey)
                                                            [fath]</option>
                                                        <option value="ellfoot (US survey) [ft] ">ellfoot (US survey)
                                                            [ft]</option>
                                                        <option value="link [li] ">link [li]</option>
                                                        <option value=" link (US survey) [li]">link (US survey) [li]
                                                        </option>
                                                        <option value=" cubit (UK)">cubit (UK)</option>
                                                        <option value=" handspan (cloth)">handspan (cloth)</option>
                                                        <option value="finger (cloth) ">finger (cloth)</option>
                                                        <option value=" nail (cloth)">nail (cloth)</option>
                                                        <option value=" inch (US survey)[in]">inch (US survey)[in]
                                                        </option>
                                                        <option value="barleycornmil [mil,thou] ">barleycornmil
                                                            [mil,thou]</option>
                                                        <option value=" microinchangstrom">microinchangstrom</option>
                                                        <option value="[A]a.u. of length[a.u., b] ">[A]a.u. of
                                                            length[a.u., b]</option>
                                                        <option value="X-unit [X] "> X-unit [X]</option>
                                                        <option value=" fermi [F, f] "> fermi [F, f]</option>
                                                        <option value=" arpentpicapoint "> arpentpicapoint</option>
                                                        <option value=" twipalnfamncaliber [c] "> twipalnfamncaliber [c]
                                                        </option>
                                                        <option value="centiinch [cin] ">centiinch [cin]</option>
                                                        <option value="kenRussian  ">kenRussian </option>
                                                        <option value="  archinRoman"> archinRoman</option>
                                                        <option value="actusvara ">actusvara</option>
                                                        <option value=" de tareavara conuquera"> de tareavara conuquera
                                                        </option>
                                                        <option value=" vara castellanacubit (Greek) "> vara
                                                            castellanacubit (Greek)</option>
                                                        <option value="  long reedreed "> long reedreed</option>
                                                        <option value=" long cubit "> long cubit</option>
                                                        <option value="handbreadth "> handbreadth</option>
                                                        <option value="fingerbreadth ">fingerbreadth</option>
                                                        <option value=" Planck length "> Planck length</option>
                                                        <option value=" Electron radius (classical) "> Electron radius
                                                            (classical)</option>
                                                        <option value=" Bohr radius [b, a.u.]">Bohr radius [b, a.u.]
                                                        </option>
                                                        <option value="  Earth's equatorial radius "> Earth's equatorial
                                                            radius</option>
                                                        <option value="  Earth's polar">Earth's polar</option>
                                                        <option value="  radiusEarth's distance from "> radiusEarth's
                                                            distance from </option>
                                                        <option value="   sunSun's radius"> sunSun's radius</option>

                                                    </select>

                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div>
                                                    <select class="form-control " id="exampleFormControlSelect1"
                                                        height="300px">
                                                        <option value="meter [m]" selected> Meter [m]</option>
                                                        <option value="kilometer [km]"> Kilometer [km]</option>
                                                        <option value="decimeter [dm]">Decimeter [dm]</option>
                                                        <option value="centimeter [cm]"> Centimeter [cm]</option>
                                                        <option value="milimeter [mm]"> milimeter [mm]</option>
                                                        <option value="micrometer[µm]"> micrometer[µm]</option>
                                                        <option value="nanometer [nm]"> nanometer [nm]</option>
                                                        <option value="milimeter [mm]"> milimeter [mm]</option>
                                                        <option value="micrometer [µm] ">micrometer [µm]</option>
                                                        <option value="nanometer [nm] ">nanometer [nm]</option>
                                                        <option value=" mile [mi, mi(Int)]">mile [mi, mi(Int)]</option>
                                                        <option value="yard [yd] ">yard [yd]</option>
                                                        <option value=" foot [ft]">foot [ft]</option>
                                                        <option value=" inch [in]">inch [in]</option>
                                                        <option value=" light year [ly]">light year [ly]</option>
                                                        <option value="exameter [Em] ">exameter [Em]</option>
                                                        <option value="petameter [Pm] ">petameter [Pm]</option>
                                                        <option value="terameter [Tm] ">terameter [Tm]</option>
                                                        <option value="gigameter [Gm] ">gigameter [Gm]</option>
                                                        <option value=" megameter [Mm]">megameter [Mm]</option>
                                                        <option value="hectometer [hm] ">hectometer [hm]</option>
                                                        <option value="dekameter [dam] ">dekameter [dam]</option>
                                                        <option value=" micron [µ]">micron [µ]</option>
                                                        <option value=" picometer [pm]">picometer [pm]</option>
                                                        <option value=" femtometer [fm]">femtometer [fm]</option>
                                                        <option value="attometer [am] ">attometer [am]</option>
                                                        <option value=" megaparsec [Mpc]">megaparsec [Mpc]</option>
                                                        <option value=" kiloparsec [kpc]">kiloparsec [kpc]</option>
                                                        <option value=" parsec [pc]">parsec [pc]</option>
                                                        <option value="astronomical unit [AU, UA] ">astronomical unit
                                                            [AU, UA]</option>
                                                        <option value="league [lea] ">league [lea]</option>
                                                        <option value=" nautical league (UK)">nautical league (UK)
                                                        </option>
                                                        <option value="nautical league (int.) ">nautical league (int.)
                                                        </option>
                                                        <option value=" league (statute)">league (statute)</option>
                                                        <option value="[st.league] ">[st.league]</option>
                                                        <option value="nautical mile (UK)[NM (UK)] ">nautical mile
                                                            (UK)[NM (UK)]</option>
                                                        <option value=" nautical mile (international)">nautical mile
                                                            (international)</option>
                                                        <option value="mile (statute)  ">mile (statute) </option>
                                                        <option value="micrometer[µm]"> micrometer[µm]</option>

                                                        <option value="[mi, mi (US)]mile"> [mi, mi (US)]mile</option>
                                                        <option value=" (US survey)">(US survey)</option>
                                                        <option value="  [mi]mile (Roman)"> [mi]mile (Roman)</option>
                                                        <option value=" kiloyard [kyd]">kiloyard [kyd]</option>
                                                        <option value="furlong [fur] ">furlong [fur]</option>
                                                        <option value="furlong (US survey) ">furlong (US survey)
                                                        </option>
                                                        <option value="[fur]chain [ch] ">[fur]chain [ch]</option>
                                                        <option value=" chain (US survey) [ch]">chain (US survey) [ch]
                                                        </option>
                                                        <option value=" roperod [rd] ">roperod [rd]</option>
                                                        <option value=" rod (US survey) [rd]">rod (US survey) [rd]
                                                        </option>
                                                        <option value="rod (US survey) [rd] ">rod (US survey) [rd]
                                                        </option>
                                                        <option value="perchpolefathom [fath]">perchpolefathom [fath]
                                                        </option>
                                                        <option value=" fathom (US survey) [fath]">fathom (US survey)
                                                            [fath]</option>
                                                        <option value="ellfoot (US survey) [ft] ">ellfoot (US survey)
                                                            [ft]</option>
                                                        <option value="link [li] ">link [li]</option>
                                                        <option value=" link (US survey) [li]">link (US survey) [li]
                                                        </option>
                                                        <option value="cubit (UK) ">cubit (UK)</option>

                                                        <option value=" handspan (cloth) "> handspan (cloth)</option>
                                                        <option value="finger (cloth) ">finger (cloth)</option>
                                                        <option value="nail (cloth) ">nail (cloth)</option>
                                                        <option value="inch (US survey)[in] ">inch (US survey)[in]
                                                        </option>
                                                        <option value="barleycornmil [mil, thou]microinchangstrom  ">
                                                            barleycornmil [mil, thou]microinchangstrom</option>
                                                        <option value="[A]a.u. of length[a.u., b] ">[A]a.u. of
                                                            length[a.u., b]</option>
                                                        <option value="X-unit [X] ">X-unit [X]</option>
                                                        <option value=" fermi [F, f]">fermi [F, f]</option>
                                                        <option value="arpentpicapoint ">arpentpicapoint</option>
                                                        <option value=" twipalnfamncaliber [c]">twipalnfamncaliber [c]
                                                        </option>
                                                        <option value="centiinch [cin] ">centiinch [cin]</option>
                                                        <option value=" kenRussian">kenRussian</option>
                                                        <option value="archinRoman "> archinRoman</option>
                                                        <option value="   actusvara  "> actusvara </option>
                                                        <option value="  de tareavara conuquera "> de tareavara
                                                            conuquera</option>
                                                        <option value="vara castellanacubit (Greek) ">vara
                                                            castellanacubit (Greek)</option>
                                                        <option value=" long reedreed"> long reedreed</option>
                                                        <option value="long cubit"> long cubit</option>
                                                        <option value=" handbreadth "> handbreadth</option>
                                                        <option value=" fingerbreadth "> fingerbreadth</option>
                                                        <option value=" Planck length"> Planck length</option>
                                                        <option value=" Electron radius (classical) "> Electron radius
                                                            (classical)</option>
                                                        <option value="Bohr radius [b, a.u.] ">Bohr radius [b, a.u.]
                                                        </option>
                                                        <option value="Earth's equatorial radius "> Earth's equatorial
                                                            radius</option>
                                                        <option value="  Earth's polar "> Earth's polar</option>
                                                        <option value=" radiusEarth's distance from "></option>
                                                        <option value="  sunSun's radius"> sunSun's radius </option>

                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </form>

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

            <section  class="unit-conversion" >
                <div class="container">
                    <div class="length-unit"style="background-color: #fff; padding: 5%; color:#000">
                        <h3 style="color: #007bff; font-weight: bold;">Complete list of length units for conversion</h3>  

                        <ol style="list-style-type: disc; margin-top: 2%;">
                            <li>meter [m]</li>
                            <li> 1 kilometer [km] = 1000 meter [m]</li> 
                            <li> kilometer to meter, meter to kilometer </li>
                            <li> 1 decimeter [dm] = 0.1 meter [m] </li>
                            <li> decimeter to meter,   meter to decimeter</li>
                            <li> 1 centimeter [cm] = 0.01 meter [m]</li>
                            <li>  centimeter to meter,   meter to centimeter</li>
                            <li>  1 millimeter [mm] = 0.001 meter [m]</li>
                            <li> millimeter to meter,   meter to millimeter</li>
                            <li> 1 micrometer [µm] = 1.0E-6 meter [m] </li>
                            <li>    micrometer to meter,   meter to micrometer </li>
                            <li>    1 nanometer [nm] = 1.0E-9 meter [m]</li>
                            <li>    nanometer to meter,   meter to nanometer</li>
                            <li>    1 mile [mi, mi(Int)] = 1609.344 meter [m]</li>
                            <li>    mile to meter,   meter to mile</li>
                            <li>    1 yard [yd] = 0.9144 meter [m]</li>
                            <li>    yard to meter,   meter to yard</li>
                            <li>    1 foot [ft] = 0.3048 meter [m]</li> 
                            <li>    foot to meter,   meter to foot</li>
                            <li>    1 inch [in] = 0.0254 meter [m]</li>
                            <li>    inch to meter,   meter to inch</li>
                            <li>    1 light year [ly] = 9.46073047258E+15 meter [m]</li>
                            <li>        light year to meter,   meter to light year</li>
                            <li>    1 exameter [Em] = 1.0E+18 meter [m] </li>
                            <li>    exameter to meter,   meter to exameter</li>
                            <li>    1 petameter [Pm] = 1.0E+15 meter [m]</li>
                            <li>    petameter to meter,   meter to petameter</li>
                            <li>    1 terameter [Tm] = 1000000000000 meter [m]</li>
                            <li>    terameter to meter,   meter to terameter</li>
                            <li>    1 gigameter [Gm] = 1000000000 meter [m]</li>
                            <li>    gigameter to meter,   meter to gigameter</li>
                             <li>    1 megameter [Mm] = 1000000 meter [m]</li>
                            <li>    megameter to meter,   meter to megameter </li>
                            <li>    1 hectometer [hm] = 100 meter [m] </li>
                            <li>    hectometer to meter,   meter to hectometer </li>
                            <li>    1 dekameter [dam] = 10 meter [m]</li>
                            <li>    dekameter to meter,   meter to dekameter</li>
                            <li>    1 micron [µ] = 1.0E-6 meter [m]</li>
                            <li>    micron to meter,   meter to micron </li>
                            <li>    1 picometer [pm] = 1.0E-12 meter [m] </li>
                            <li>    picometer to meter,   meter to picometer</li>
                            <li>    1 femtometer [fm] = 1.0E-15 meter [m]</li>   
                            <li>    femtometer to meter,   meter to femtometer</li>
                            <li>    1 attometer [am] = 1.0E-18 meter [m]</li>
                            <li>    attometer to meter,   meter to attometer</li>
                            <li>    1 megaparsec [Mpc] = 3.08567758128E+22 meter [m]</li>   
                            <li>    megaparsec to meter,   meter to megaparsec</li>
                            <li>    1 kiloparsec [kpc] = 3.08567758128E+19 meter [m]</li>
                            <li>    kiloparsec to meter,   meter to kiloparsec</li>   
                            <li>    1 parsec [pc] = 3.08567758128E+16 meter [m]</li>
                            <li>    parsec to meter,   meter to parsec</li>
                            <li>    1 astronomical unit [AU, UA] = 149597870691 meter [m]</li>
                            <li>    astronomical unit to meter,   meter to astronomical unit</li>
                            <li>    1 league [lea] = 4828.032 meter [m]</li>
                            <li>    league to meter,   meter to league</li>
                            <li>    1 nautical league (UK) = 5559.552 meter [m] </li>   
                            <li>    nautical league (UK) to meter,   meter to nautical league (UK)</li>
                            <li>    1 nautical league (int.) = 5556 meter [m]</li>
                            <li>   nautical league (int.) to meter,   meter to nautical league (int.)</li>
                            <li>    1 league (statute) [st.league] = 4828.0416560833 meter [m]</li>
                            <li>    league (statute) to meter,   meter to league (statute)</li>
                            <li>    1 nautical mile (UK) [NM (UK)] = 1853.184 meter [m]</li>
                            <li>    nautical mile (UK) to meter,   meter to nautical mile (UK)</li>   
                            <li>    1 nautical mile (international) = 1852 meter [m] </li>
                            <li>    nautical mile (international) to meter,   meter to nautical mile (international)</li>
                            <li>    1 mile (statute) [mi, mi (US)] = 1609.3472186944 meter [m]</li>
                            <li>    mile (statute) to meter,   meter to mile (statute)</li>
                            <li>    1 mile (US survey) [mi] = 1609.3472186944 meter [m]</li>
                            <li>    mile (US survey) to meter,   meter to mile (US survey)</li>
                            <li>    1 mile (Roman) = 1479.804 meter [m]</li>
                            <li>    mile (Roman) to meter,   meter to mile (Roman) </li>   
                            <li>    1 kiloyard [kyd] = 914.4 meter [m]</li>
                            <li>    kiloyard to meter,   meter to kiloyard</li>
                            <li>    1 furlong [fur] = 201.168 meter [m]</li>
                            <li>    furlong to meter,   meter to furlong</li>
                            <li>    1 furlong (US survey) [fur] = 201.1684023368 meter [m]</li>
                            <li>    furlong (US survey) to meter,   meter to furlong (US survey) </li>
                            <li>    1 chain [ch] = 20.1168 meter [m]</li>
                            <li>    chain to meter,   meter to chain</li>   
                            <li>    1 chain (US survey) [ch] = 20.1168402337 meter [m]</li>
                            <li>    chain (US survey) to meter,   meter to chain (US survey)</li>
                            <li>    1 rope = 6.096 meter [m] </li>
                            <li>    rope to meter,   meter to rope</li>
                            <li>    1 rod [rd] = 5.0292 meter [m]</li>
                            <li>    rod to meter,   meter to rod</li>
                            <li>    1 rod (US survey) [rd] = 5.0292100584 meter [m]</li>
                            <li>    rod (US survey) to meter,   meter to rod (US survey)</li>   
                            <li>    1 perch = 5.0292 meter [m]</li>
                            <li>    perch to meter,   meter to perch</li>
                            <li>    1 pole = 5.0292 meter [m]</li>
                            <li>    pole to meter,   meter to pole</li>
                            <li>    1 fathom [fath] = 1.8288 meter [m]</li>
                            <li>    fathom to meter,   meter to fathom</li>
                            <li>    1 fathom (US survey) [fath] = 1.8288036576 meter [m]</li>
                            <li>    fathom (US survey) to meter,   meter to fathom (US survey)</li>
                            <li>    1 ell = 1.143 meter [m]</li>
                            <li>    ell to meter,   meter to ell</li>
                            <li>1 foot (US survey) [ft] = 0.3048006096 meter [m]</li>   
                            <li>  foot (US survey) to meter,   meter to foot (US survey)</li> 
                            <li> 1 link [li] = 0.201168 meter [m]</li> 
                            <li> link to meter,   meter to link</li>
                            <li> 1 link (US survey) [li] = 0.2011684023 meter [m]</li>
                            <li>link (US survey) to meter,   meter to link (US survey)</li>  
                            <li>1 cubit (UK) = 0.4572 meter [m]</li>
                            <li> cubit (UK) to meter,   meter to cubit (UK)</li>
                            <li>1 hand = 0.1016 meter [m]</li>     
                            <li>    hand to meter,   meter to hand</li>    
                            <li> 1 span (cloth) = 0.2286 meter [m]</li>
                            <li>    span (cloth) to meter,   meter to span (cloth)</li>
                            <li>    1 finger (cloth) = 0.1143 meter [m]</li>
                            <li>    finger (cloth) to meter,   meter to finger (cloth)</li>
                            <li>    1 nail (cloth) = 0.05715 meter [m]</li>  
                            <li>    nail (cloth) to meter,   meter to nail (cloth)</li>
                            <li>    1 inch (US survey) [in] = 0.0254000508 meter [m] </li>
                            <li>    inch (US survey) to meter,   meter to inch (US survey)</li>
                            <li>   1 barleycorn = 0.0084666667 meter [m]</li>
                            <li>    barleycorn to meter,   meter to barleycorn</li>
                            <li>    1 mil [mil, thou] = 2.54E-5 meter [m]</li>   
                            <li>    mil to meter,   meter to mil</li>
                            <li>    1 microinch = 2.54E-8 meter [m]</li>
                            <li>    microinch to meter,   meter to microinch</li>
                            <li>    1 angstrom [A] = 1.0E-10 meter [m]</li>
                            <li>    angstrom to meter,   meter to angstrom</li>  
                            <li>    1 a.u. of length [a.u., b] = 5.2917724900001E-11 meter [m]</li>
                            <li>    a.u. of length to meter,   meter to a.u. of length</li>
                            <li>    1 X-unit [X] = 1.00208E-13 meter [m]</li>
                           
                            <li> X-unit to meter,   meter to X-unit</li>   
                            <li>    1 fermi [F, f] = 1.0E-15 meter [m] </li>
                            <li>    fermi to meter,   meter to fermi</li>
                            <li>    1 arpent = 58.5216 meter [m]</li>
                            <li>    arpent to meter,   meter to arpent</li>
                            <li>    1 pica = 0.0042333333 meter [m]</li>  
                            <li>        pica to meter,   meter to pica </li>
                            <li>    1 point = 0.0003527778 meter [m]</li>
                            <li>    point to meter,   meter to point</li>
                            <li>    1 twip = 1.76389E-5 meter [m]</li>
                            <li>    twip to meter,   meter to twip</li>
                            <li>    1 aln = 0.5937777778 meter [m]</li>  
                            <li>    aln to meter,   meter to aln</li>
                            <li>    1 famn = 1.7813333333 meter [m]</li>
                            <li>    famn to meter,   meter to famn  </li>
                            <li>    1 caliber [cl] = 0.000254 meter [m] </li>
                            <li>    caliber to meter,   meter to caliber</li>
                            <li>    1 centiinch [cin] = 0.000254 meter [m]</li> 
                            <li>    centiinch to meter,   meter to centiinch</li>
                            <li>    1 ken = 2.11836 meter [m]</li>  
                            <li>    ken to meter,   meter to ken</li>
                            <li>    1 Russian archin = 0.7112 meter [m]</li>
                            <li>    Russian archin to meter,   meter to Russian archin</li>
                            <li>    1 Roman actus = 35.47872 meter [m]</li>
                            <li>    Roman actus to meter,   meter to Roman actus</li>
                            <li>    Roman actus to meter,   meter to Roman actus</li>  
                            <li>    1 vara de tarea = 2.505456 meter [m]</li>
                            <li>    vara de tarea to meter,   meter to vara de tarea</li>
                            <li>    1 vara conuquera = 2.505456 meter [m]</li>
                            <li>    vara conuquera to meter,   meter to vara conuquera</li>
                            <li> 1 vara castellana = 0.835152 meter [m]</li>
                            <li>    vara castellana to meter,   meter to vara castellana </li>  
                            <li>    1 cubit (Greek) = 0.462788 meter [m]</li>
                            <li>    cubit (Greek) to meter,   meter to cubit (Greek)</li>
                            <li>    1 long reed = 3.2004 meter [m] </li>
                            <li>    long reed to meter,  meter to long reed </li>
                            <li>    1 reed = 2.7432 meter [m] </li>
                            <li>    reed to meter,   meter to reed</li>  
                            <li>    1 long cubit = 0.5334 meter [m]</li>
                            <li>    long cubit to meter,   meter to long cubit</li>
                            <li>    1 handbreadth = 0.0762 meter [m]</li>
                            <li>    handbreadth to meter,   meter to handbreadth</li>
                            <li>    1 fingerbreadth = 0.01905 meter [m]</li>
                            <li>    fingerbreadth to meter,   meter to fingerbreadth</li>  
                            <li>    1 Planck length = 1.61605E-35 meter [m]</li>
                            <li>        Planck length to meter,   meter to Planck length</li>
                            <li>    1 Electron radius (classical) = 2.81794092E-15 meter [m] </li>
                            <li>    Electron radius (classical) to meter,   meter to Electron radius (classical) </li>
                            <li>    1 Bohr radius [b, a.u.] = 5.2917724900001E-11 meter [m]</li>
                            <li>    Bohr radius to meter,   meter to Bohr radius </li>  
                            <li>    1 Earth's equatorial radius = 6378160 meter [m] </li>
                            <li>    Earth's equatorial radius to meter,   meter to Earth's equatorial radius</li>
                            <li>    1 Earth's polar radius = 6356776.9999999 meter [m] </li>
                            <li>    Earth's polar radius to meter,   meter to Earth's polar radius</li>
                            <li>  1 Earth's distance from sun = 149600000000 meter [m]</li>
                            <li> Earth's distance from sun to meter,   meter to Earth's distance from sun</li>  
                            <li> Sun's radius to meter,   meter to Sun's radius </li>
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
    </script>





</body>

</html>