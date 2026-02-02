document.addEventListener('DOMContentLoaded', function () {
    // Create the overlay elements
    const overlay = document.createElement('div');
    overlay.className = 'popup-overlay';

    const imgContainer = document.createElement('div');
    imgContainer.className = 'popup-container';

    const popupImg = document.createElement('img');
    popupImg.className = 'popup-image';

    imgContainer.appendChild(popupImg);
    overlay.appendChild(imgContainer);
    document.body.appendChild(overlay);

    // Add click event to all triggers
    const triggers = document.querySelectorAll('.pop-trigger');
    triggers.forEach(img => {
        img.addEventListener('click', function () {
            popupImg.src = this.src;
            overlay.classList.add('active');
            requestAnimationFrame(() => {
                popupImg.classList.add('zoom-in');
            });
        });
    });

    // Close on click
    overlay.addEventListener('click', function () {
        popupImg.classList.remove('zoom-in');

        // Wait for animation to finish before hiding overlay
        setTimeout(() => {
            overlay.classList.remove('active');
        }, 300);
    });
});
