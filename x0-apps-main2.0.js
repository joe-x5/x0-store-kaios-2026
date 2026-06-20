// ==============================
// Handle key navigation
// ==============================
document.addEventListener('keydown', function(event) {
    const buttons = document.querySelectorAll(".version-buttons button");
    const focused = document.activeElement;

    if (buttons.length === 0) return; // no buttons yet

    const currentIndex = Array.from(buttons).indexOf(focused);

    switch (event.key) {
        case 'ArrowDown':
            if (currentIndex < buttons.length - 1) {
                buttons[currentIndex + 1].focus();
            }
            break;

        case 'ArrowUp':
            if (currentIndex > 0) {
                buttons[currentIndex - 1].focus();
            }
            break;

        case 'Enter':
        case 'SoftCenter':
            if (focused && focused.tagName === "BUTTON") {
                focused.click();
            }
            break;
    } // Closing brace for the switch statement
}); // Closing brace for the event listener

// ==============================
// TIMER
// ==============================
document.getElementById("currentYear").innerText = new Date().getFullYear();