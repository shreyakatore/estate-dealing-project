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
    <style>
     
        .chip-box .chips-container {
            display: flex;
            flex-wrap: wrap;
        }

        .chip-box .chip {
            background-color: #f0f0f0;
            color: #333;
            border-radius: 20px;
            padding: 5px 10px;
            margin: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .chip-box .chip:hover {
            background-color: #ddd;
        }

        .chip-box .selected {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        .chip-box .chips-amenties h4 {
            color: #007bff;
            font-weight: 600;
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <!--------------------------------------------------------------------------------------->
    <main id="main">
        <?php
        include './header.php';?>
        <!------ end header---->
        <section class="post_property  mt-4">
            <div class="container photo-container post_property">

            <div class="col-lg-8 col-md-6 col-12 properyInputInfo d-none" id="propertyDetails"
                    style="background-color: #fff; column-gap: 15px; padding: 3%;">
                    <h1 class="text-center" style="color: #007bff;">Property Details</h1>

                 <div class = "Property"  id="plot-land-1"  >
                    
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
                                        <label for="property-option">No. of open sides: </label>
                                        <input type="text" name="openside" id="openside" placeholder="e.g. Ajmera Enclave"
                                            class="property-option">
                                    </div>
                       
                                            <div class="property-form-group" style="width: 100%;">
                                                <label for="property-option">Floors Allowed For Construction:</label>
                                                <input type="text" 
                                                    class="property-option">
                                            </div>
                                    

                                    <!-- Other input fields... -->
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
                                    <!-- Other input fields... -->
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
                                    <!-- Other input fields... -->
                                    
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
                
                                    <!-- Other input fields... -->
                                    <div class="property-form-group">
                                        <label for="property-Possession">Transaction Type : </label>
                                        <label>Sale transaction type</label>
                                        <div class="d-flex" style="column-gap: 18px;">
                                            <input type="radio" id="transactionNew" name="transaction_type" value="New">
                                            <label for="transactionNew">New</label>
                                            <input type="radio" id="transactionResale" name="transaction_type"
                                                value="Resale">
                                            <label for="transactionResale">Resale</label>
                                        </div>
                                    </div>
                                    <!-- Other input fields... -->
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
<!------------------------------ amenties------------------------------------------------------------>
        
                <form class="chip-box" id = "flat-apartment-2" style="display: block;">
            <div class="amenties-second chips-amenties">
                <h4 class=" mt-4 mb-2">#View </h4><br>
                <div class="chips-container" id="chipsContainer">
                    <div class="chip" data-value="Golf Course">+ Golf Course</div>
                    <div class="chip" data-value="Beach View">+ Beach View</div>
                    <div class="chip" data-value="Garden View">+ Garden View</div>
                    <div class="chip" data-value="Club">+ Club</div>
                    <div class="chip" data-value="Lake View">+ Lake View</div>
                    <div class="chip" data-value="Park View">+ Park View</div>
                    <div class="chip" data-value="Road View">+ Road View</div>
                    <div class="chip" data-value="Community View">+ Community View</div>
                    <div class="chip" data-value="Pool View">+ Pool View</div>
                    <div class="chip" data-value="Creek View">+ Creek View</div>
                    <div class="chip" data-value="Sea View">+ Sea View</div>
                </div>
            </div>

            <div class="amenties-third chips-amenties">
                <h4 class="my-2">#Property Features </h4><br>
                <div class="chips-container" id="chipsContainer2">
                    <div class="chip" data-value="High Ceiling Height">+ High Ceiling Height</div>
                    <div class="chip" data-value="False Ceiling Lighting">+ False Ceiling Lighting</div>
                    <div class="chip" data-value="Piped-gas">+ Piped-gas</div>
                    <div class="chip" data-value="Internet/wi-fi connectivity">+ Internet/wi-fi
                        connectivity
                    </div>
                    <div class="chip" data-value="Centrally Air Conditioned">+ Centrally Air Conditioned
                    </div>
                    <div class="chip" data-value="Water purifier">+ Water purifier</div>
                    <div class="chip" data-value="Recently Renovated">+ Recently Renovated</div>
                    <div class="chip" data-value="Private Garden / Terrace">+ Private Garden / Terrace
                    </div>
                    <div class="chip" data-value="Natural Light">+ Natural Light</div>
                    <div class="chip" data-value="Airy Rooms">+ Airy Rooms</div>
                    <div class="chip" data-value="Spacious Interiors">+ Spacious Interiors</div>
                    <div class="chip" data-value="Corner Property">+ Corner Property</div>
                    <div class="chip" data-value="Feng Shui / Vaastu Compliant">+ Feng Shui / Vaastu
                        Compliant
                    </div>
                </div>
            </div>

            <div class="amenties-fourth chips-amenties">
                <h4 class="my-2">#Additional Features </h4><br>
                <div class="chips-container" id="chipsContainer3">
                    <div class="chip" data-value="Separate entry for servant room">+ Separate entry for
                        servantroom</div>
                    <div class="chip" data-value="No open drainage around">+ No open drainage around
                    </div>
                    <div class="chip" data-value="Waste Disposal">+ Waste Disposal</div>
                    <div class="chip" data-value="Rain Water Harvesting">+ Rain Water Harvesting</div>
                    <div class="chip" data-value="Bank Attached Property">+ Bank Attached Property</div>
                    <div class="chip" data-value="Low Density Society">+ Low Density Society</div>
                </div>
            </div>

            <div class="amenties-fifth chips-amenties">
                <h4 class="my-2">#Parking </h4><br>
                <div class="chips-container" id="chipsContainer4">
                    <div class="chip" data-value=" Car parking">+ Car parking</div>
                    <div class="chip" data-value="Bike parking">+ Bike parking</div>
                    <div class="chip" data-value="Visitor parking">+ Visitor parking</div>
                    <div class="chip" data-value="Covered parking">+ Covered parking</div>
                    <div class="chip" data-value="No parking">+ No parking</div>

                </div>
            </div>

            <div class="amenties-sixth chips-amenties">
                <h4 class="my-2">#Power backup </h4><br>
                <div class="chips-container" id="chipsContainer5">
                    <div class="chip" data-value=" Full Power Back up">+ Full Power Back up</div>
                    <div class="chip" data-value=" Partial Power Back up">+ Partial Power Back up</div>
                </div>
            </div>

            <div class="amenties-seventh chips-amenties">
                <h4 class="my-2">#Water Source </h4><br>
                <div class="chips-container" id="chipsContainer6">
                    <div class="chip" data-value=" Car parking">+ Municipal corporation</div>
                    <div class="chip" data-value="Bike parking">+ Borewell/Tank</div>
                    <div class="chip" data-value="Visitor parking">+ 24*7 Water</div>
                </div>
            </div>

            <div class="amenties-third chips-amenties">
                <h4 class="my-2">#Society/Building feature</h4><br>
                <div class="chips-container" id="chipsContainer7">
                    <div class="chip" data-value=" Water softening plant">+ Water softening plant</div>
                    <div class="chip" data-value="Shopping Center">+ Shopping Center</div>
                    <div class="chip" data-value=" Swimming Pool">+ Swimming Pool</div>
                    <div class="chip" data-value="Fire Safety">+ Fire Safety</div>
                    <div class="chip" data-value="Sewage Treatment Plant">+ Sewage Treatment Plant</div>
                    <div class="chip" data-value="Children Play Area">+ Children Play Area</div>
                    <div class="chip" data-value=" Gated security">+ Gated security</div>
                    <div class="chip" data-value="Fitness Center / GYM"> + Fitness Center / GYM</div>
                    <div class="chip" data-value="Security Personnel/gated society">+ Security
                        Personnel/gate society</div>
                    <div class="chip" data-value=" Pet Friendly">+ Pet Friendly</div>
                    <div class="chip" data-value="Wheelchair friendly">+ Wheelchair friendly</div>
                    <div class="chip" data-value="Maintenance Staffy"> + Maintenance Staffy</div>
                    <div class="chip" data-value="Intercom Facility">+ Intercom Facility</div>
                    <div class="chip" data-value="Water Storage">+ Water Storage</div>
                    <div class="chip" data-value=" Lift(s)">+ Lift(s)</div>
                    <div class="chip" data-value="Security / Fire Alarm">+ Security / Fire Alarm</div>
                    <div class="chip" data-value="Park">+ Park</div>
                </div>
            </div>

            <div class="amenties-fourth chips-amenties">
                <h4 class="my-2">#Location Advantages </h4><br>
                <div class="chips-container" id="chipsContainer8">
                    <div class="chip" data-value=" Close to Metro Station">+ Close to Metro Station
                    </div>
                    <div class="chip" data-value="Close to Hospital">+ Close to Hospital</div>
                    <div class="chip" data-value="Close to School">+ Close to School</div>
                    <div class="chip" data-value="Close to Railway Station">+ Close to Railway Station
                    </div>
                    <div class="chip" data-value="Close to Market">+ Close to Market</div>
                    <div class="chip" data-value="Close to Airport">+ Close to Airport</div>
                    <div class="chip" data-value=" Close to Mall">+ Close to Mall</div>
                    <div class="chip" data-value="Close to Highway">+ Close to Highway</div>
                </div>
            </div>

            <div class="amenties-seventh chips-amenties">
                <h4 class="my-2">#Brokerage and loan</h4><br>
                <div class="chips-container" id="chipsContainer6">
                    <div class="chip" data-value=" Car parking">+Zero brokerage</div>
                    <div class="chip" data-value="Bike parking">+Loan available</div>
                    <div class="chip" data-value="Visitor parking">+Interest free loan</div>
                </div>
            </div>

        </form>

    </main>
</div>
</section>
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
    <script src="assets/js/custom.js"></script>

    <script>
        // Function to handle chip click
        function handleChipClick(event) {
            // Toggle 'selected' class on the clicked chip
            event.currentTarget.classList.toggle('selected');
        }

        // Add click event listener to chips
        var allChipsContainers = document.querySelectorAll('.chips-container');
        allChipsContainers.forEach(function (container) {
            var chips = container.querySelectorAll('.chip');
            chips.forEach(function (chip) {
                chip.addEventListener('click', handleChipClick);
            });
        });
    </script>


        <script async defer src="assets/js/map.js"></script>

</body>

</html>