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

  ////////////////////////////
  document.addEventListener('DOMContentLoaded', function () {
    var checkbox = document.getElementById('maintenance-included');
    var maintenanceAmountGroup = document.getElementById('maintenance-amount-group');
    var maintenanceCostGroup = document.getElementById('maintenance-cost-group');

    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            maintenanceAmountGroup.classList.add('hidden');
            maintenanceCostGroup.classList.add('hidden');
        } else {
            maintenanceAmountGroup.classList.remove('hidden');
            maintenanceCostGroup.classList.remove('hidden');
        }
    });

    // Initialize visibility based on the checkbox state
    if (checkbox.checked) {
        maintenanceAmountGroup.classList.add('hidden');
        maintenanceCostGroup.classList.add('hidden');
    } else {
        maintenanceAmountGroup.classList.remove('hidden');
        maintenanceCostGroup.classList.remove('hidden');
    }
});

  ////////// property detail updated

/////
document.addEventListener('DOMContentLoaded', function () {
    let uploadedImages = [];
    let uploadedVideos = [];
    let coverMedia = { index: null, type: null };

    function previewFiles(event, fileType) {
        const files = event.target.files;
        const photoPreviewContainer = document.getElementById("photoPreview");
        const videoPreviewContainer = document.getElementById("videoPreview");

        let imageCount = uploadedImages.length;
        let videoCount = uploadedVideos.length;

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (fileType === 'video' && file.size > 1000 * 1024 * 1024) {
                alert("Please upload videos less than 1000MB.");
                continue;
            } else if (fileType === 'photo' && file.size > 5 * 1024 * 1024) {
                alert("Please upload images less than 5MB.");
                continue;
            }

            if (fileType === 'photo' && file.type.startsWith("image") && imageCount < 10) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const mediaWrapper = createMediaWrapper(file, e.target.result, imageCount, 'image');
                    photoPreviewContainer.appendChild(mediaWrapper);
                    uploadedImages.push({ name: file.name, file: file });

                    imageCount++;
                };
                reader.readAsDataURL(file);
            } else if (fileType === 'video' && file.type.startsWith("video") && videoCount < 5) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const mediaWrapper = createMediaWrapper(file, e.target.result, videoCount, 'video');
                    videoPreviewContainer.appendChild(mediaWrapper);
                    uploadedVideos.push({ name: file.name, file: file });

                    videoCount++;
                };
                reader.readAsDataURL(file);
            } else if (fileType === 'photo' && file.type.startsWith("image")) {
                alert("You can only upload up to 10 images.");
            } else if (fileType === 'video' && file.type.startsWith("video")) {
                alert("You can only upload up to 5 videos.");
            }
        }

        const uploadButton = document.getElementById('uploadButton');
        if (uploadedImages.length >= 5 || uploadedVideos.length >= 1) {
            uploadButton.disabled = false;
        }
    }

    function createMediaWrapper(file, src, index, type) {
        const wrapper = document.createElement("div");
        wrapper.classList.add("preview-media-wrapper");

        let mediaElement;
        if (type === 'image') {
            mediaElement = document.createElement("img");
            mediaElement.src = src;
            mediaElement.classList.add("preview-media");
        } else if (type === 'video') {
            mediaElement = document.createElement("video");
            mediaElement.src = src;
            mediaElement.autoplay = true;
            mediaElement.loop = true;
            mediaElement.classList.add("preview-media");
        }

        const deleteButton = document.createElement("button");
        deleteButton.textContent = 'X';
        deleteButton.classList.add("delete-button");
        deleteButton.addEventListener('click', () => deleteMedia(index, type));

        wrapper.appendChild(mediaElement);
        wrapper.appendChild(deleteButton);

        if (type === 'image') {
            const coverRadio = createCoverRadio(index);
            wrapper.appendChild(coverRadio);
        }

        return wrapper;
    }

    function createCoverRadio(index) {
        const coverRadioWrapper = document.createElement("div");
        coverRadioWrapper.classList.add("cover-radio-wrapper");

        const coverRadio = document.createElement("input");
        coverRadio.type = "radio";
        coverRadio.name = "coverPhoto";
        coverRadio.value = index;
        coverRadio.addEventListener('change', function () {
            setCoverMedia(index);
        });

        const dropdown = createDropdown(index, 'image');

        coverRadioWrapper.appendChild(coverRadio);
        coverRadioWrapper.appendChild(document.createTextNode('Set as Cover'));
        coverRadioWrapper.appendChild(dropdown);

        return coverRadioWrapper;
    }

    function createDropdown(index, type) {
        const dropdown = document.createElement("select");
        dropdown.id = `dropdown${index}`;
        dropdown.innerHTML = `
            <option value="none">Select Category</option>
            <option value="kitchen">Kitchen</option>
            <option value="bedroom">Bedroom</option>
            <option value="dining">Dining</option>
            <option value="drawing">Drawing</option>
            <option value="hall">Hall</option>
            <option value="bathroom">Bathroom</option>
            <option value="entrance">Entrance/Lobby</option>
            <option value="gallery">Gallery</option>
            <option value="study">Study</option>
            <option value="balcony">Balcony</option>
            <option value="utility">Utility</option>
            <option value="outside">Outside</option>
            <option value="layout">Property layout</option>
            <option value="plan">Master plan</option>
            <option value="other">Other</option>
        `;
        dropdown.classList.add("dropdown-options");
        dropdown.addEventListener('change', function () {
            // Handle category selection here
        });
        return dropdown;
    }

    function setCoverMedia(index) {
        coverMedia = { index: index, type: 'image' };
    }

    function deleteMedia(index, type) {
        if (type === 'image') {
            uploadedImages = uploadedImages.filter((_, i) => i !== index);
        } else if (type === 'video') {
            uploadedVideos = uploadedVideos.filter((_, i) => i !== index);
        }

        const previewContainer = (type === 'image' ? document.getElementById("photoPreview") : document.getElementById("videoPreview"));
        const allWrappers = previewContainer.querySelectorAll('.preview-media-wrapper');
        allWrappers.forEach((wrapper, newIndex) => {
            if (newIndex >= index) {
                wrapper.querySelector('.delete-button').onclick = function () {
                    deleteMedia(newIndex, type);
                };
            }
        });

        const wrapper = previewContainer.querySelector(`.preview-media-wrapper:nth-child(${index + 1})`);
        if (wrapper) {
            wrapper.remove();
        }
    }

    document.getElementById('photoInput').addEventListener('change', (event) => previewFiles(event, 'photo'));
    document.getElementById('videoInput').addEventListener('change', (event) => previewFiles(event, 'video'));
});
