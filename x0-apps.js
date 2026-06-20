document.addEventListener("keydown", function (event) {
    if (event.repeat) return; // Avoid multiple triggers

    // Track long press state
    const longPressTimeout = 5000; // 5 seconds
    let longPressTimer;

    // Refresh Page (Long Press 1)
    if (event.key === "1") {
        longPressTimer = setTimeout(() => {
            alert("🔄 Refreshing Page...");
            location.reload(); // Refresh the page
        }, longPressTimeout);
    }


    // Toggle Fullscreen Mode (Long Press #)
    if (event.key === "#") {
        longPressTimer = setTimeout(() => {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
                alert("📺 Fullscreen Mode Enabled");
            } else {
                document.exitFullscreen();
                alert("📺 Fullscreen Mode Disabled");
            }
        }, longPressTimeout);
    }

    // Exit App (Long Press *)
    if (event.key === "*") {
        longPressTimer = setTimeout(() => {
            alert("🚪 Exiting App...");
            window.close(); // Attempts to close the app (may not work in some environments)
        }, longPressTimeout);
    }

    // Cancel long press on key release
    document.addEventListener("keyup", function () {
        clearTimeout(longPressTimer);
    });
});



// Function to dynamically load another JavaScript file
function loadScript(src) {
    return new Promise((resolve, reject) => {
        const script = document.createElement('script');
        script.src = src;
        script.onload = () => resolve();
        script.onerror = () => reject(new Error(`Failed to load script: ${src}`));
        document.head.appendChild(script);
    });
}

// Function to detect the device type
function getDeviceType() {
    const userAgent = navigator.userAgent;
    if (/KaiOS/i.test(userAgent)) {
        return 'KaiOS';
    } else if (/Android/i.test(userAgent)) {
        return 'Android';
    } else {
        return 'Other';
    }
}

// Load multiple scripts based on device type
function loadScriptsForDevice() {
    const deviceType = getDeviceType();
    console.log(`Device Type: ${deviceType}`);

    const scriptsToLoad = [

loadScript('https://joe-x5.github.io/kaios/notification.js'),


loadScript('https://joe-x5.github.io/kaios/ban-country.js')

          ];

    // You can conditionally load different scripts if needed, based on device type
    // Example:
    if (deviceType === 'KaiOS') {
        // Load additional scripts specific for KaiOS if needed
    } else if (deviceType === 'Android') {
        // Load additional scripts for Android if needed
    }

    // Load the scripts
    Promise.all(scriptsToLoad)
        .then(() => {
            console.log('All scripts loaded successfully!');
        })
        .catch(error => {
            console.error(error);
        });
}

// Execute the function to load scripts
loadScriptsForDevice();