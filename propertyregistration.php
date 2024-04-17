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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css"
        integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="../../cdn.jsdelivr.net/npm/flat-icons%401.0.0/creative.min.css" rel="stylesheet">
    </style>
</head>

<body>
    <!--------------------------------------------------------------------------------------->
    <main id="main">
        <?php
        include './header.php';?>
            <!------ end header---->
            <!--------- registration------>
            <section class="post_property  mt-4">
                <div class="container  post_property">
                    <div class="row my-5" style="column-gap:15px; display: flex; justify-content: center;">
                        <div class="col-lg-3 col-md-3 col-12"
                            style="background-color: #fff; column-gap: 13px; padding: 3%;">

                            <div class="service-option-1 mt-3 active" id="div1" onclick="toggleBasicDetails()">
                                <i class="fas fa-home"></i> Basic Details
                            </div>
                            <div class="service-option-2 mt-3 " id="div2" onclick="toggleLocalityDetails()">
                                <i class="fas fa-map-marker-alt"></i> Locality Details
                            </div>
                            <div class="service-option-1 mt-3 " id="div3" onclick="togglePropertyDetails()">
                                <i class="fas fa-map-signs"></i> Property Details
                            </div>
                            <div class="service-option-1 mt-3 " id="div4" onclick="toggleAmenitiesDetails()">
                                <i class="fas fa-box-open"></i> Amenities
                            </div>
                            <div class="service-option-1 mt-3 " id="div5" onclick="togglePricingDetails()">
                                <i class="fas fa-rupee-sign"></i> Pricing details
                            </div>
                            <div class="service-option-1 mt-3 " id="div6" onclick="toggleGalleryDetails()">
                                <i class="fas fa-camera"></i> Photos/Videos
                            </div>
                            <div class="service-option-1 mt-3 " id="div7" onclick="toggleBrouchureDetails()">
                                <i class="fas fa-book-open"></i> Brouchure
                            </div>
                            <div class="service-option-1 mt-3 " id="div8" onclick="toggleInformationDetails()">
                                <i class="fas fa-info-circle"></i> Developer/Builder Information
                            </div>
                            <div class="service-option-1 mt-3 " id="div9" onclick="toggleOwnerDetails()">
                                <i class="fas fa-user"></i> Owner information
                            </div>
                            <div class="service-option-1 mt-3 " id="div10" onclick="toggleScheduleDetails()">
                                <i class="fas fa-calendar-alt"></i> Visit Shedule
                            </div>
                            <!-- Other tabs -->
                        </div>


                        <!-- basic details section starts -->
                        <div class="col-lg-8 col-md-6 col-12 properyInputInfo " id="basicDetails"
                            style="background-color: #fff; column-gap: 15px; padding: 3%;">
                            <h1 class="text-center" style="color: #007bff;">Basic Details</h1>
                            <form class="d-flex mt-3 flex-column align-items-center">

                                <div class="left-option maxWidth" style="margin-top: 5%;">
                                    <div class="Property-available-for">
                                        <h6 class="mb-3"><label for="property-option">City:</label></h6>
                                        <select id="property-option">
                                            <option value="property-pune">Pune</option>
                                            <option value="property-mumbai">Mumbai</option>
                                            <option value="property-gurgaon">Gurgaon</option>
                                            <option value="property-delhi">Dehli</option>
                                        </select>
                                    </div>

                                    <!-- Property Available For Section -->
                                    <div class="Property-available-for my-5">
                                        <h5 class="my-4"> <label>Property Available For</label></h5>
                                        <div class="tab-container">
                                            <input type="radio" id="sell" name="property_available_for" value="Sell"
                                                onclick="togglePropertyType('sellDiv')">
                                            <label for="sell">Sell</label>

                                            <input type="radio" id="rent" name="property_available_for"
                                                value="Rent/Lease" onclick="togglePropertyType('rentDiv')">
                                            <label for="rent">Rent/Lease</label>

                                            <input type="radio" id="pg" name="property_available_for"
                                                value="PG/Hostel/Co-living" onclick="togglePropertyType('pgDiv')">
                                            <label for="pg">PG/Hostel/Co-living</label>

                                            <input type="radio" id="projects" name="property_available_for"
                                                value="Projects" onclick="togglePropertyType('projectsDiv')">
                                            <label for="projects">Projects</label>
                                        </div>
                                    </div>

                                    <!-- Dynamic Sections Based on Property Available For Selection -->
                                    <div id="sellDiv" class="Property-available-for my-5" style="display: none;">
                                        <div class="property-form-group">
                                            <h5><label for="sell-residental-flat/apartment">Residential </label>
                                            </h5>
                                            <select id="flat-apartment" name="flat[]">
                                                <option>Flat/Apartment</option>
                                                <option>Ploat And Residential House</option>
                                                <option>Villa</option>
                                                <option>Builder Floor Apartment</option>
                                                <option>Penthouse</option>
                                                <option>1 RK / Studio Apartment</option>
                                                <option>Service Apartment</option>
                                                <option>Farm House</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>

                                        <div class="property-form-group">
                                            <h5><label for="sell-residental-flat/apartment">Commercial </label></h5>
                                            <select id="flat-apartment" name="flat[]">
                                                <option>Commercial Office Space</option>
                                                <option>Office in It Park / SEZ</option>
                                                <option>Hotel / Resorts</option>
                                                <option>Guest house / banquet Hall </option>
                                                <option>Commercial Shop</option>
                                                <option>Commercial Showroom</option>
                                                <option>Commercial Land</option>
                                                <option>Co-working Space </option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                        <!-- Content specific to Selling Property will go here -->
                                    </div>

                                    <div id="rentDiv" class="Property-available-for my-5 .maxWidth"
                                        style="display: none;">
                                        <!-- Content specific to Renting/Leasing Property will go here -->
                                        <div class="property-form-group">
                                            <h5><label for="sell-residental-flat/apartment"> Residential </label>
                                            </h5>
                                            <select id="flat-apartment" name="flat[]">
                                                <option>Flat/Apartment</option>
                                                <option>Ploat And Residential House</option>
                                                <option>Villa</option>
                                                <option>Builder Floor Apartment</option>
                                                <option>Penthouse</option>
                                                <option>1 RK / Studio Apartment</option>
                                                <option>Service Apartment</option>
                                                <option>Farm House</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>

                                        <div class="property-form-group">
                                            <h5><label for="sell-residental-flat/apartment">Commercial </label></h5>
                                            <select id="flat-apartment" name="flat[]">
                                                <option>Commercial Office Space</option>
                                                <option>Office in It Park / SEZ</option>
                                                <option>Hotel / Resorts</option>
                                                <option>Guest house / banquet Hall </option>
                                                <option>Commercial Shop</option>
                                                <option>Commercial Showroom</option>
                                                <option>Commercial Land</option>
                                                <option>Co-working Space </option>
                                                <option>Showroom</option>
                                                <option> Warehouse/ Godown</option>
                                                <option>Cold storage</option>
                                                <option>Restaurant/Cafe</option>
                                                <option>Industrial Land</option>
                                                <option>Industrial Building</option>
                                                <option>Industrial Shed</option>
                                                <option>Agricultural Land</option>
                                                <option>Factory</option>
                                                <option>Manafacturing </option>

                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                    </div>

                                    <div id="pgDiv" class="Property-available-for my-5" style="display: none;">
                                        <!-- Content specific to PG/Hostel/Co-living will go here -->
                                        <div class="property-form-group">
                                            <h5><label for="sell-residental-flat/apartment">Residential </label>
                                            </h5>
                                            <select id="flat-apartment" name="flat[]">
                                                <option>Flat/Apartment</option>
                                                <option>Independent House / Villa</option>
                                                <option>Independent / Builder Floor </option>
                                                <option>1 RK / Studio Apartment</option>
                                                <option>Service Apartment</option>

                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>

                                    </div>

                                    <div id="projectsDiv" class="Property-available-for my-5" style="display: none;">
                                        <!-- Content specific to Projects will go here -->
                                        <div class="property-form-group">
                                            <h5><label for="sell-residental-flat/apartment">Residential </label>
                                            </h5>
                                            <select id="flat-apartment" name="flat[]">
                                                <option>Flat/Apartment</option>
                                                <option>Plot / Land </option>
                                                <option>Villa</option>
                                                <option>Row House </option>
                                                <option>Farm House</option>
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>

                                        <div class="property-form-group">
                                            <h5><label for="sell-residental-flat/apartment">Commercial </label></h5>
                                            <select id="flat-apartment" name="flat[]">
                                                <option>Commercial Office / Shop</option>

                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <!-- basic details section end -->

                    <!-- locality details section  starts -->
                    <div class="col-lg-8 col-md-6 col-12 properyInputInfo d-none" id="localityDetails"
                        style="background-color: #fff; column-gap: 15px; padding: 3%;">
                        <h1 class="text-center" style="color: #007bff;">Locality Details</h1>
                        <form class="d-flex mt-3 ">

                            <div class="left-option" style="margin-top: 10%;">
                                <div class="property-form-group">
                                    <label for="property-option">City:</label>
                                    <select id="property-option">
                                        <option value="property-pune">Pune</option>
                                        <option value="property-mumbai">Mumbai</option>
                                        <option value="property-gurgaon">Gurgaon</option>
                                        <option value="property-delhi">Dehli</option>
                                    </select>
                                </div>
                                <div class="property-form-group">
                                    <label for="BHK">Landmark / Street</label>
                                    <input type="text" name="landmark" id="landmark"
                                        placeholder="e.g. Evergreen street">
                                </div>
                            </div>

                            <div class="right-option  mx-2" style="margin-top: 10%;">
                                <div class="property-form-group">
                                    <label for="property-option">Locality
                                    </label>
                                    <i class="fas fa-map-marker-alt" id="mapIcon"></i>
                                    <input type="text" placeholder="Enter location/ society name"
                                        style="padding-left:2.4rem;">
                                </div>
                            </div>
                        </form>
                        <div class="property-form-group">
                            <label for="location">Location:</label>
                            <form id="locationForm">
                                <input type="text" id="location" name="location" placeholder="e.g.Mayapuri">
                                <!-- <button type="submit">Show Map</button> -->
                            </form>
                            <div id="map" class="mt-3">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448196.5264464583!2d76.76356335193856!3d28.643684599684324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1711437530741!5m2!1sen!2sin"
                                    width="725" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                    </div>
                    <!-- locality details section end -->

                    <!-- property details section starts-->
                    <div class="col-lg-8 col-md-6 col-12 properyInputInfo d-none" id="propertyDetails"
                        style="background-color: #fff; column-gap: 15px; padding: 3%;">
                        <h1 class="text-center" style="color: #007bff;">Property Details</h1>
                        <form class="d-flex mt-3 ">

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="left-option" style="margin-top: 10%;">
                                        <div class="property-form-group">
                                            <label for="property-option">Project/Society name</label>
                                            <input type="text">
                                        </div>
                                        <div class="property-form-group">
                                            <label for="plot-no">Plot No.</label>
                                            <input type="text" id="plot-no" name="plot-no">
                                        </div>
                                        <div class="property-form-group">
                                            <label for="plot-area">Area of plot</label>
                                            <input type="text" id="plot-area" name="plot-area" style="padding-right: 4rem;">
                                        </div>
        
                                        <div class="property-form-group">
                                            <label for="BHK">Plot length</label>
                                            <input type="text" id="Built-Area" style="padding-right: 4rem;"> </input>
                                        </div>
                                        <div class="property-form-group">
                                            <label for="BHK">Plot Width</label>
                                            <input type="text" id="Built-Area" style="padding-right: 4rem;"> </input>
                                        </div>
        
                                        <div class="property-form-group">
                                            <label for="property-option">No. of open sides:
                                            </label>
                                            <input type="text" name="openside" id="openside" placeholder="e.g. Ajmera Enclave"
                                                class="property-option">
                                        </div>
        
                                       
                    
                                                <div class="property-form-group" style="width: 100%;">
                                                    <label for="property-option">Floors Allowed For Construction:</label>
                                                    <input type="text" 
                                                        class="property-option">
                                                </div>
                                        
        
                                     
        
                                        
                                        <div class="property-form-group">
                                            <label for="property-direction">Facing</label>
                                            <select id="property-direction">
                                                <option value="property-direction1">North</option>
                                                <option value="property-direction2">South</option>
                                                <option value="property-direction3">East</option>
                                                <option value="property-direction1">West</option>
                                                <option value="property-direction2">North-East</option>
                                                <option value="property-direction3">South-East</option>
                                                <option value="property-direction1">North-West</option>
                                                <option value="property-direction2">South-west</option>
                                                <option value="property-direction3">Centered</option>
                                            </select>
                                        </div>
        
                                        <div class="property-form-group">
                                            <label for="property-Possession">Possession</label>
                                            <select id="property-Possession">
                                                <option value="property-Possession1">All</option>
                                                <option value="property-Possession2">Ready to move</option>
                                                <option value="property-Possession3">Upcoming</option>
                                                <option value="property-Possession1">Within 3 Months</option>
                                                <option value="property-Possession2">Within 1 year</option>
                                                <option value="property-Possession3">Within 2 year</option>
                                                <option value="property-Possession1">Within 3 year</option>
                                            </select>
                                        </div>
        
                                        <div class="property-form-group">
                                            <label for="property-view">View</label>
                                            <select id="property-view">
                                                <option value="property-view1">Select View</option>
                                                <option value="property-view2">Beach View</option>
                                                <option value="property-view3">Garden View</option>
                                                <option value="property-view4">Golf Course</option>
                                                <option value="property-view5">Lake View</option>
                                                <option value="property-view6">Park View </option>
                                                <option value="property-view7">Road View</option>
                                                <option value="property-view8">Community View</option>
                                                <option value="property-view9">Pool View</option>
                                                <option value="property-view10">Creek View</option>
                                                <option value="property-view11">Sea View</option>
        
                                            </select>
                                        </div>
        
                                        <div class="property-form-group">
                                            <label for="property-view">Which authority the property is approved by?</label>
                                            <select id="property-view">
                                                <option value="property-city1">Show all local authority from city inputs</option>
                                                <option value="property-city2">option 1</option>
                                                <option value="property-city3">option 2</option>
                                                <option value="property-city4">option 3</option>
                                                <option value="property-city5">option 4</option>
                                                <option value="property-city6">option 5 </option>
                                                <option value="property-city7">option 6</option>
                                                <option value="property-city8">option 7</option>
                                                <option value="property-city9">option 8</option>
                                                <option value="property-city10">option 9</option>
                                                <option value="property-city11">option 10</option>
        
                                            </select>
                                        </div>
                                     
        
                                       
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="right-option  mx-2" style="margin-top: 10%;">

                                        <div class="property-form-group">
                                            <label for="property-view">Ownership</label>
                                            <select id="property-view">
                                                <option value="property-ownership2">Freehold</option>
                                                <option value="property-ownership3">Leasehold</option>
                                                <option value="property-ownership4">Co-operative society</option>
                                                <option value="property-ownership5">Power of Attorney</option>
                                            
                                            </select>
                                        </div>
                                       
                                        <div class="property-wall">
                                            <div class="property-form-group">
                                                <label>Is there a boundary wall around the property?</label>
                                                <div class="d-flex" style="column-gap: 18px;">
                                                    <input type="radio" id="boundaryYes" name="boundary_wall" value="yes">
                                                    <label for="boundaryYes">Yes</label>
        
                                                    <input type="radio" id="boundaryNo" name="boundary_wall" value="no">
                                                    <label for="boundaryNo">No</label>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="property-construction">
                                            <div class="property-form-group">
                                                <label>Any construction done on this property?</label>
                                                <div class="d-flex" style="column-gap: 18px;">
                                                    <input type="radio" id="boundaryYes" name="boundary_wall" value="yes">
                                                    <label for="boundaryYes">Yes</label>
        
                                                    <input type="radio" id="boundaryNo" name="boundary_wall" value="no">
                                                    <label for="boundaryNo">No</label>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="property-construction">
                                            <div class="property-form-group">
                                                <label>Loan Available</label>
                                                <div class="d-flex" style="column-gap: 18px;">
                                                    <input type="radio" id="boundaryYes" name="boundary_wall" value="yes">
                                                    <label for="boundaryYes">Yes</label>
                                                    <input type="radio" id="boundaryNo" name="boundary_wall" value="no">
                                                    <label for="boundaryNo">No</label>
                                                </div>
                                            </div>
                                        </div>
        
                                        
                                        <div class="property-form-group">
                                            <label for="property-Possession">Transaction Type : </label>
                                            <label>Sale transaction type</label>
                                            <div class="d-flex" style="column-gap: 18px;">
                                                <input type="radio" id="transicationYes" name="transication_wall" value="New">
                                                <label for="transicationYes">New</label>
                                                <input type="radio" id="boundaryNo"  name="transication_wall" value="Resale">
                                                <label for="boundaryNo">Resale</label>
                                            </div>
                                        </div>
                                        
        
                                        <div class="property-form-group">
                                            <label for="property-Possession">Is in a gated colony : </label>
                                            <div class="d-flex" style="column-gap: 18px;">
                                                <input type="radio" id="transicationYes" name="transication_wall" value="New">
                                                <label for="transicationYes">Yes</label>
                                                <input type="radio" id="boundaryNo"  name="transication_wall" value="Resale">
                                                <label for="boundaryNo">No</label>
                                            </div>
                                        </div>
        
                                        <div class="property-form-group">
                                            <label for="BHK">Width of road facing the plot</label>
                                            <input type="text" id="Built-Area" style="padding-right: 4rem;"> </input>
                                        </div>
        
        
                                        <div class="property-form-group">
                                            <label for="property-connection">Water Connection : </label>
                                            <div class="d-flex" style="column-gap: 18px;">
                                                <input type="radio" id="Connection" name="Connection_wall" value="New">
                                                <label for="Connection">Yes</label>
                                                <input type="radio" id="boundaryNo"  name="Connection_wall" value="Resale">
                                                <label for="boundaryNo">No</label>
                                            </div>
                                        </div>
        
                                        <div class="property-form-group">
                                            <label for="property-connection">Electricity Connection : </label>
                                            <div class="d-flex" style="column-gap: 18px;">
                                                <input type="radio" id="Connection" name="Connection_wall" value="New">
                                                <label for="Connection">Yes</label>
                                                <input type="radio" id="boundaryNo"  name="Connection_wall" value="Resale">
                                                <label for="boundaryNo">No</label>
                                            </div>
                                        </div>
        
                                        <div class="property-form-group">
                                            <label for="BHK">Property Description : </label>
                                            <textarea id="Built-text" style="padding-right: 4rem; border: 2px solid #ccc; width: 100%; height: 100%;"></textarea>
                                        </div>
        
                                        <div class="property-form-group">
                                            <label for="property-connection">Do you have more similar units/properties availaible ? </label>
                                            <div class="d-flex" style="column-gap: 18px;">
                                                <input type="radio" id="Connection" name="Connection_wall" value="New">
                                                <label for="Connection">Yes</label>
                                                <input type="radio" id="boundaryNo"  name="Connection_wall" value="Resale">
                                                <label for="boundaryNo">No</label>
                                            </div>
                                        </div>
        
                                        <div class="property-form-group">
                                            <label for="property-brokrage">Do you charge brokerage? </label>
                                            <div class="d-flex" style="column-gap: 18px;">
                                                <input type="radio" id="brokrage" name="brokrage_wall" value="New">
                                                <label for="brokrage">Yes</label>
                                                <input type="radio" id="boundaryNo"  name="Connection_wall" value="Resale">
                                                <label for="boundaryNo">No</label>
                                            </div>
                                        </div>
        
        
                                        <div class="property-form-group">
                                            <label for="property-view">Location Advantages-</label>
                                            <select id="property-view">
                                                <option value="property-close1">Highlight the nearby landmarks</option>
                                                <option value="property-close2">Close to Metro Station</option>
                                                <option value="property-close3">Close to Market</option>
                                                <option value="property-close4">Close to School</option>
                                                <option value="property-close5">Close to Railway Station</option>
                                                <option value="property-close6">Close to Hospital</option>
                                                <option value="property-close7">Close to Airport</option>
                                                <option value="property-close8">Close to Mall</option>
                                                <option value="property-close9">Close to Highway</option>
                                            
        
                                            </select>
                                        </div>
        
        
        
        
        
                                    </div>   
                                </div>
                            </div>
                           

                        
                        </form>
                    </div>
                    <!-- property detils section end -->

                    <!-- Amenities section detils starts -->
                    <div class="col-lg-8 col-md-6 col-12 properyInputInfo d-none" id="amenitiesDetails"
                        style="background-color: #fff; column-gap: 15px; padding: 3%;">
                        <h1 class="text-center" style="color: #007bff;">Amenities Details</h1>
                        <form class="d-flex mt-3 ">

                            <div class="left-option" style="margin-top: 10%;">
                                <div class="property-form-group">
                                    <label for="property-option"> Select Amenties :</label>
                                    <select id="Amenties">
                                        <option value="Amenties-type1">Gymnasium</option>
                                        <option value="Amenties-type2">Swimming Pool</option>
                                        <option value="Amenties-type3">Badminton Court(s)</option>
                                        <option value="Amenties-type4">Tennis Court(s)</option>
                                        <option value="Amenties-type5">Squash Court</option>
                                        <option value="Amenties-type6">Kids' Play Areas</option>
                                        <option value="Amenties-type7">Jogging / Cycle Track</option>
                                        <option value="Amenties-type8">Power Backup</option>
                                        <option value="Amenties-type9">Central Wi-Fi</option>
                                        <option value="Amenties-type10">Attached Market</option>
                                        <option value="Amenties-type11">Restaurant</option>
                                        <option value="Amenties-type12">Home Automation</option>
                                        <option value="Amenties-type13">24 x 7 Security</option>
                                        <option value="Amenties-type14">Clubhouse</option>
                                        <option value="Amenties-type15">Balcony</option>
                                        <option value="Amenties-type16">High Speed Elevators</option>
                                        <option value="Amenties-type17">Pre-School</option>
                                        <option value="Amenties-type18">Medical Facility Golf Course</option>
                                        <option value="Amenties-type19">Service Elevators</option>
                                        <option value="Amenties-type20">High Street Retail</option>
                                        <option value="Amenties-type21">Hypermarket</option>
                                        <option value="Amenties-type20">ATM'S</option>
                                        <option value="Amenties-type20">Food Court</option>
                                        <option value="Amenties-type20">Servant Quarter</option>
                                    </select>
                                </div>

                            </div>

                            <div class="right-option  mx-2" style="margin-top: 10%;">
                                <div class="property-form-group">
                                    <label for="property-option">Amenties:
                                    </label>
                                    <select id="property-option">

                                        <option value="AMT-type1">Private Pool</option>
                                        <option value="AMT-type2">Private Gym</option>
                                        <option value="AMT-type3">Private Jacuzzi</option>
                                        <option value="AMT-type4">View of Water</option>
                                        <option value="AMT-type5">View of Landmark</option>
                                        <option value="AMT-type6">Barbeque Area</option>
                                        <option value="AMT-type7">Day Care Center</option>
                                        <option value="AMT-type8">Electricity Backup</option>
                                        <option value="AMT-type9">Waste Disposal</option>
                                        <option value="AMT-type10">First Aid Medical Center</option>
                                        <option value="AMT-type11">Broadband Internet</option>
                                        <option value="AMT-type12">Satellite/Cable TV</option>
                                        <option value="AMT-type13">Broadband Internet</option>
                                        <option value="AMT-type14">Satellite/Cable TV</option>
                                        <option value="AMT-type15">Intercom</option>
                                        <option value="AMT-type16">Jacuzzi</option>
                                        <option value="AMT-type17"> Maintenance Staff</option>
                                        <option value="AMT-type18">Security Staff</option>
                                        <option value="AMT-type19">CCTV Security</option>
                                        <option value="AMT-type20">Laundry Facility</option>
                                        <option value="AMT-type21">Cleaning Services</option>
                                        <option value="AMT-type22">Facilities for Disabled</option>
                                        <option value="AMT-type23">Day Care Center</option>
                                        <option value="AMT-type24">Pet Area</option>
                                        <option value="AMT-type25">Indoor Games</option>
                                        <option value="AMT-type26">Conference Room</option>
                                        <option value="AMT-type27">Large Green Area</option>
                                        <option value="AMT-type28">Concierge Desk</option>
                                        <option value="AMT-type29">Helipad</option>
                                        <option value="AMT-type30">Conference Room</option>

                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Amenities section detils end -->
                    <!-- pricing section detils starts -->
                    <div class="col-lg-8 col-md-6 col-12 properyInputInfo d-none" id="pricingDetails"
                        style="background-color: #fff; column-gap: 15px; padding: 3%;">
                        <h1 class="text-center" style="color: #007bff;">Pricing Details</h1>
                        <form class=" mt-3 ">
                            <div class="d-flex">
                                <div class="left-option " style="margin-top: 10%;">
                                    <div class="property-form-group ">
                                        <label for="property-option">Expected Price </label>
                                        <input type="text" id="expected-price" placeholder=" sq.ft"> </input>
                                    </div>
                                </div>

                                <div class="right-option  mx-2" style="margin-top: 10%;">
                                    <div class="property-form-group">
                                        <label for="BHK">Price per sq ft.:</label>
                                        <input type="text" id="price-persquare-fit" placeholder=" sq.ft"> </input>
                                    </div>
                                </div>
                            </div>

                            <div class="property-form-group ">
                                <label for="BHK">Booking / Token Amount:</label>
                                <div class="check-box d-flex mt-3" style="column-gap: 19px;">

                                    <input type="checkbox" id="BHK-type1" name="BHK-type" value="All inclusive price">
                                    <label for="BHK-type1" style="color: #000; font-weight: normal; ">All inclusive
                                        price</label>

                                    <input type="checkbox" id="BHK-type2" name="BHK-type"
                                        value="Tax and Govt. charges excluded">
                                    <label for="BHK-type2" style="color: #000; font-weight: normal; ">Tax and Govt.
                                        charges excluded</label>

                                    <input type="checkbox" id="BHK-type3" name="BHK-type" value="Price Negotiable">
                                    <label for="BHK-type3" style="color: #000; font-weight: normal; ">Price
                                        Negotiable</label>

                                </div>
                            </div>

                        </form>
                    </div>
                    <!-- pricing section detils end -->

                    <!-- Gallery section detils starts -->
                    <div class="col-lg-8 col-md-6 col-12 properyInputInfo d-none" id="galleryDetails"
                        style="background-color: #fff; column-gap: 15px; padding: 3%;">
                        <h1 class="text-center" style="color: #007bff;">Gallery Details</h1>
                        <form class="d-flex mt-3 ">

                            <div class="left-option" style="margin-top: 10%;">
                                <div class="property-form-group">
                                    <label for="property-photo">Upload Photo :</label>
                                    <input type="file" id="property-photo" name="property_photo">
                                </div>

                                <div class="property-form-group">
                                    <label for="property-video">Upload Video :</label>
                                    <input type="file" id="property-video" name="property_video" accept="video/*">
                                </div>

                                <div class="property-form-group">
                                    <label for="view">Exterior View</label>
                                    <input type="text" id="Exterior-View" placeholder="Exterior"> </input>
                                </div>


                            </div>

                            <div class="right-option  mx-2" style="margin-top: 9.5%;">
                                <div class="property-form-group">
                                    <label for="property-option">Nearby:
                                    </label>
                                    <input type="text" id="Nearby" placeholder="location"> </input>

                                </div>

                                <div class="property-form-div " style="column-gap: 7px;">
                                    <div class="property-floor">
                                        <div class="property-form-group">
                                            <label for="property-option">Plot Area:</label>
                                            <input type="text" id="Built-Area" placeholder=" sq.ft"> </input>
                                        </div>
                                    </div>


                                </div>

                                <div class="property-form-group">
                                    <label for="BHK">Gardern</label>
                                    <input type="text" id="Garden" placeholder="Gardern"> </input>

                                </div>

                            </div>

                        </form>
                        <div class="property-form-group">
                            <label>Map Location:</label>
                            <input type="text" id="property-location-input" placeholder="Enter location">
                            <div id="property-map" style="height:400px; width:100%;"></div>

                        </div>
                    </div>
                    <!-- Gallery section detils end -->

                    <!-- brouchure section detils starts -->
                    <div class="col-lg-8 col-md-6 col-12 properyInputInfo d-none" id="brouchureDetails"
                        style="background-color: #fff; column-gap: 15px; padding: 3%;">
                        <h1 class="text-center" style="color: #007bff;">Brouchure Details</h1>

                        <div class="d-flex align-items-center justify-content-center" style="margin-top: 10%;">
                            <div class="property-form-group uploadBrouchure">
                                <label for="property-option">Upload Brouchure</label>
                                <form action="/action_page.php" class="">
                                    <input type="file" id="myFile" name="filename">
                                    <input type="submit">
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- brouchure section detils end -->
                    <!-- Developer/Builder information section detils starts -->
                    <div class="col-lg-8 col-md-6 col-12 properyInputInfo d-none" id="informationDetails"
                        style="background-color: #fff; column-gap: 15px; padding: 3%;">
                        <h1 class="text-center" style="color: #007bff;">Developer/Builder Information</h1>
                        <form class="d-flex mt-3 ">

                            <div class="left-option " style="margin-top: 10%;">
                                <div class="property-form-group ">
                                    <label for="property-option">Select City </label>
                                    <select id="">
                                        <option value="add php city">Mumbai</option>
                                        <option value="add php city">Nagpur</option>
                                        <option value="add php city">Delhi</option>
                                        <option value="add php city">Kashi</option>
                                        <option value="add php city">Jabalpur</option>
                                        <option value="add php city">Add the city</option>
                                    </select>
                                </div>
                                <div class="property-form-group">
                                    <label for="">Builder name</label>
                                    <input type="text" id="" placeholder="e.g.Devendra Waghmare">
                                </div>
                                <div class="property-form-group">
                                    <label for="">Builer logo</label>
                                    <input type="file" id="myFile" name="filename">
                                    <!-- <input type="submit"> -->
                                </div>
                            </div>
                            <div class="right-option  mx-2" style="margin-top: 10%;">
                                <div class="property-form-group">
                                    <label for="">Logo alt tag
                                    </label>
                                    <input type="text" id="" placeholder="e.g.Shiva Builders">
                                </div>

                                <div class="property-form-group">
                                    <label for="">Builder website
                                    </label>
                                    <input type="url" id="" placeholder="">
                                </div>
                                <div class="property-form-group">
                                    <label for="">Builder description
                                    </label>
                                    <input type="text" id="" placeholder="Enter your description">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- rental section detils end -->
                    <!-- owner section detils starts -->
                    <div class="col-lg-8 col-md-6 col-12 properyInputInfo d-none" id="ownerDetails"
                        style="background-color: #fff; column-gap: 15px; padding: 3%;">
                        <h1 class="text-center" style="color: #007bff;">Owner Details</h1>
                        <form class="d-flex mt-3 ">

                            <div class="left-option" style="margin-top: 10%;">
                                <div class="property-form-group">
                                    <label for="">Owner Name</label>
                                    <input type="text" placeholder="e.g.">
                                </div>
                                <div class="property-form-group">
                                    <label for="">Owner Mobile Number</label>
                                    <input type="tel" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                </div>
                                <div class="property-form-group">
                                    <label for="">Owner Aadhar Number</label>
                                    <input type="number" placeholder="1234-4567-7890">
                                </div>

                            </div>
                            <div class="right-option  mx-2" style="margin-top: 10%;">
                                <div class="property-form-group">
                                    <label for="">Property paper</label>
                                    <form action="/action_page.php" class="">
                                        <input type="file" id="myFile" name="filename">
                                        <!-- <input type="submit"> -->
                                    </form>
                                </div>
                                <div class="property-form-group">
                                    <label for="">Electricity bill</label>
                                    <form action="/action_page.php" class="">
                                        <input type="file" id="myFile" name="filename">
                                        <!-- <input type="submit"> -->
                                    </form>
                                </div>
                                <div class="property-form-group">
                                    <label for="">Upload registry</label>
                                    <form action="/action_page.php" class="">
                                        <input type="file" id="myFile" name="filename">
                                        <!-- <input type="submit"> -->
                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- owner section detils end -->
                    <!-- Schedule section detils starts -->
                    <div class="col-lg-8 col-md-6 col-12 properyInputInfo d-none" id="scheduleDetails"
                        style="background-color: #fff; column-gap: 15px; padding: 3%;">
                        <h1 class="text-center" style="color: #007bff;">Schedule Details</h1>
                        <form class="d-flex mt-3 ">
                            <div class="left-option" style="margin-top: 10%;">
                                <div class="property-form-group">
                                    <label>Availability</label>
                                    <div class="tab-container availability">

                                        <input type="radio" name="" value="">
                                        <div class="availability2" onclick="selectDay('everyday')" id="everyday">
                                            <label for="everyday">Everyday</label>
                                            <h6>Mon-Sun</h6>
                                        </div>

                                        <input type="radio" name="" value="">
                                        <div class="availability2" onclick="selectDay('weekend1')" id="weekend1">
                                            <label for="weekend1">Weekend</label>
                                            <h6>Mon-Fri</h6>
                                        </div>

                                        <input type="radio" name="" value="">
                                        <div class="availability2" onclick="selectDay('weekend2')" id="weekend2">
                                            <label for="weekend1">Weekend</label>
                                            <h6>Sat,Sun</h6>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="right-option  mx-2" style="margin-top: 10%;">
                                <div class="property-form-group">
                                    <label for="">Select Time Schedule</label>
                                    <div class="d-flex flex-column align-items-center">
                                        <label for="start-time">Start Time:</label>
                                        <select id="start-time">
                                            <option value="12:00">12:00 PM</option>
                                            <option value="1:00">1:00 PM</option>
                                            <option value="2:00">2:00 PM</option>
                                            <option value="3:00">3:00 PM</option>
                                            <option value="4:00">4:00 PM</option>
                                            <option value="5:00">5:00 PM</option>
                                            <option value="6:00">6:00 PM</option>
                                            <option value="7:00">7:00 PM</option>
                                            <option value="8:00">8:00 PM</option>
                                            <option value="9:00">9:00 PM</option>
                                            <option value="10:00">10:00 PM</option>
                                            <option value="11:00">11:00 PM</option>

                                            <!-- Add more options as needed -->
                                        </select>
                                        <label for="end-time">End Time:</label>
                                        <select id="end-time">
                                            <option value="12:00">12:00 PM</option>
                                            <option value="1:00">1:00 PM</option>
                                            <option value="2:00">2:00 PM</option>
                                            <option value="3:00">3:00 PM</option>
                                            <option value="4:00">4:00 PM</option>
                                            <option value="5:00">5:00 PM</option>
                                            <option value="6:00">6:00 PM</option>
                                            <option value="7:00">7:00 PM</option>
                                            <option value="8:00">8:00 PM</option>
                                            <option value="9:00">9:00 PM</option>
                                            <option value="10:00">10:00 PM</option>
                                            <option value="11:00">11:00 PM</option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </form>
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
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
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
    <!-- main-footer -->
    <?php
        include './footer.php';?>
    <!-- main-footer end -->
    <!---------------------footer secton------------------------------------------------------------------------------------------------->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js"
        integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
        defer></script>
    <!-- <script src="js/script.js"></script> -->
    <script src="assets/js/script.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- mayur added js for basic details active button for property type -->
    <script>

        // Function to toggle property type based on radio button selection
        function togglePropertyType(divId) {
            var divs = ['sellDiv', 'rentDiv', 'pgDiv', 'projectsDiv'];
            divs.forEach(function (id) {
                var div = document.getElementById(id);
                if (divId === id) {
                    div.style.display = 'block';
                } else {
                    div.style.display = 'none';
                }
            });
        }
    </script>

    <script async defer src="assets/js/map.js"></script>

</body>

</html>