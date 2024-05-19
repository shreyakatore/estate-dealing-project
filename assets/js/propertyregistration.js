//////////
// Function to toggle property types based on dropdown selection
function togglePropertyTypeDropdown() {
    var propertyType = document.getElementById("property-type").value;
    if (propertyType === "flat_apartment") {
        showElements(["flat-apartment-1", "flat-apartment-2", "flat-apartment-3", "flat-apartment-4"]);
        hideElements(["plot-land-1", "plot-land-2", "plot-land-3", "plot-land-4"]);
    } else if (propertyType === "plot_land") {
        showElements(["plot-land-1", "plot-land-2", "plot-land-3", "plot-land-4"]);
        hideElements(["flat-apartment-1", "flat-apartment-2", "flat-apartment-3", "flat-apartment-4"]);
    } else if (propertyType === "Residential_Villa") {
        showElements(["villa-1", "villa-2", "villa-3", "villa-4"]);
        hideElements(["plot-land-1", "plot-land-2", "plot-land-3", "plot-land-4", "flat-apartment-1", "flat-apartment-2", "flat-apartment-3", "flat-apartment-4"]);
    } else if (propertyType === "Builder") {
        showElements(["builder-1", "builder-2", "builder-3", "builder-4"]);
        hideElements(["plot-land-1", "plot-land-2", "plot-land-3", "plot-land-4", "flat-apartment-1", "flat-apartment-2", "flat-apartment-3", "flat-apartment-4"]);
    }
	console.log("select");
	console.log(propertyType);
}

// Function to show elements
function showElements(ids) {
    ids.forEach(function(id) {
        document.getElementById(id).style.display = "block";
    });
}

// Function to hide elements
function hideElements(ids) {
    ids.forEach(function(id) {
        document.getElementById(id).style.display = "none";
    });
}

// Ensure correct initial state
document.addEventListener("DOMContentLoaded", function() {
    togglePropertyTypeDropdown();
    // Add event listener to property type dropdown
    document.getElementById("property-type").addEventListener("change", togglePropertyTypeDropdown);
});

// //// owner details tabbox


function openPage(pageName, elmnt, color) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
	  tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablink");
	for (i = 0; i < tablinks.length; i++) {
	  tablinks[i].style.backgroundColor = "";
	}
	document.getElementById(pageName).style.display = "block";
	elmnt.style.backgroundColor = color;
  }
  
  // Get the element with id="defaultOpen" and click on it to initialize the first tab
  document.getElementById("defaultOpen").click();
  