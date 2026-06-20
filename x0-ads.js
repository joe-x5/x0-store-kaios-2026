// script.js

// Create a style element for CSS
const style = document.createElement('style');
style.textContent = `
    #ad-container {
        display: none; /* Initially hidden */
        position: fixed;
        top: 20px;
        right: 20px;
        width: 240px; /* Ad width */
        height: 50px; /* Ad height */
        z-index: 1000; /* Ensure it's above other content */
        background-color: #fff; /* Optional background color */
        border: 1px solid #ccc; /* Optional border */
    }
`;
document.head.appendChild(style);

// Create the div for displaying ads
const adContainer = document.createElement('div');
adContainer.id = 'ad-container';
document.body.appendChild(adContainer);

// Configuration options
const showAds = false;          // Set this to true or false to enable/disable ads


const showBannerAds = true;    // Set to true to show banner ads

const adWidth = '90%';       // Width for banner ads
const adHeight = '50px';       // Height for banner ads



const showFullscreenAds = false; // Set to true to show fullscreen ads



// Load the ads JavaScript file
const script = document.createElement('script');
script.src = '/kaiads.v5.min.js'; // Path to your ad service script
document.head.appendChild(script);

// Function to initialize ads
function initializeAds() {
    if (showAds) {
        if (showBannerAds) {
            setTimeout(() => {
                getKaiAd({
                    publisher: "566c4d75-f28c-4f26-ba75-4cbecfe54965", // Example publisher ID
                    app: "aichat", // Name of the app
                    slot: "aichat", // Slot identifier
                    h: parseInt(adHeight), // Height of the ad
                    w: parseInt(adWidth), // Width of the ad
                    container: adContainer, // Container for the ad
                    onerror: e => {
                        console.error("Ad Error:", e); // Error handling
                    },
                    onready: e => {
                        e.call("display", {
                            tabindex: 0, // Accessibility tab index
                            navClass: "ad-block", // Class for navigation
                            display: "block" // Display style
                        });
                        adContainer.style.display = 'block'; // Show the ad container
                    }
                });
            }, 30000); // 30 seconds delay
        }

        if (showFullscreenAds) {
            setTimeout(() => {
                getKaiAd({
                    publisher: "566c4d75-f28c-4f26-ba75-4cbecfe54965", // Example publisher ID for fullscreen
                    app: "x0storekaios", // Name of the app
                    slot: "x0storekaios", // Slot identifier
                    onerror: e => {
                        console.error("Fullscreen Ad Error:", e); // Error handling
                    },
                    onready: e => {
                        e.call("display"); // Display fullscreen ad
                    }
                });
            }, 30000); // 30 seconds delay
        }
    }
}

// Show ads after the script has loaded
script.onload = initializeAds;

// Set interval to show ads periodically if enabled
setInterval(() => {
    if (showAds && showBannerAds) {
        initializeAds(); // Call to refresh or show the banner ad
    }
}, 120000); // 2 minutes interval