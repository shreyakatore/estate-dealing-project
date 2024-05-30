document.addEventListener('DOMContentLoaded', function () {
    const furnishingChips = document.querySelectorAll('.furnishing-chip');
    const popupModal = document.getElementById('furnishingPopup');
    const popupContent = document.getElementById('popupContent');
    const fullyFurnishedItems = document.getElementById('fully-furnished-items');
    const semiFurnishedItems = document.getElementById('semi-furnished-items');
    const unfurnishedItems = document.getElementById('unfurnished-items');

    furnishingChips.forEach(chip => {
        chip.addEventListener('click', () => {
            // Remove 'active' class from all chips
            furnishingChips.forEach(chip => chip.classList.remove('active'));
            // Add 'active' class to the clicked chip
            chip.classList.add('active');

            // Hide all content items
            fullyFurnishedItems.style.display = 'none';
            semiFurnishedItems.style.display = 'none';
            unfurnishedItems.style.display = 'none';

            // Determine which content to display based on the clicked chip
            if (chip.dataset.value === 'fully-furnished') {
                fullyFurnishedItems.style.display = 'block';
                // Open the popup model
                popupModal.style.display = 'block';
            } else if (chip.dataset.value === 'semi-furnished') {
                semiFurnishedItems.style.display = 'block';
                // Open the popup model
                popupModal.style.display = 'block';
            } else if (chip.dataset.value === 'unfurnished') {
                // Do not open the popup model for 'unfurnished'
                unfurnishedItems.style.display = 'block';
                popupModal.style.display = 'none';
            }
        });
    });

    // Close the popup model when clicking the close button
    const closeButton = document.querySelector('.popup-modal .close');
    closeButton.addEventListener('click', () => {
        popupModal.style.display = 'none';
    });

    // Close the popup model when clicking outside the modal
    window.addEventListener('click', event => {
        if (event.target === popupModal) {
            popupModal.style.display = 'none';
        }
    });
});
