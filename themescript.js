// Function to set dark mode
function setDarkMode() {
    // Add dark mode class to body
    document.body.classList.add('dark-mode');
    console.log('Dark mode enabled');
    // Save dark mode state in localStorage
    localStorage.setItem('darkModeEnabled', true);
}

// Function to set light mode
function setLightMode() {
    // Remove dark mode class from body
    document.body.classList.remove('dark-mode');
    console.log('Light mode enabled');
    // Save light mode state in localStorage
    localStorage.setItem('darkModeEnabled', false);
}

// Check if dark mode is enabled from localStorage and apply it
if (localStorage.getItem('darkModeEnabled') === 'true') {
    setDarkMode();
}
