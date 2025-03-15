document.addEventListener('DOMContentLoaded', function() {
    // Show popup after page loads
    const popup = document.getElementById('hello-world-popup');
    if (popup) {
        popup.style.display = 'block';
        
        // Add basic styling dynamically
        popup.style.position = 'fixed';
        popup.style.top = '50%';
        popup.style.left = '50%';
        popup.style.transform = 'translate(-50%, -50%)';
        popup.style.padding = '20px';
        popup.style.backgroundColor = 'white';
        popup.style.border = '2px solid #333';
        popup.style.zIndex = '9999';
        
        popup.querySelector('.popup-content').style.textAlign = 'center';
    }
}); 