<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="refresh" content="60"/>

    <title>18+ hub - Adults</title>

<link rel="icon" href="icon.png" sizes="any"/>

<link rel="manifest" href="manifest.webmanifest"/>
<link rel="manifest" href="manifest.webapp"/>



<meta content='ca-pub-1786122365693674' name='google-adsense-account'/>
  
    

  <meta content='yHxwPbEBzFfMooOWanGYYiIQyCu_4Ai9bGxLQ4SP07U' name='google-site-verification'/>
  

 
  <meta content='18+ hub - Adults' property='og:title'/>
  
  <meta content='18+ hub - Adults' property='og:description'/>

  <meta content='18+ hub - Adults' name='description'/>




<link rel="stylesheet" href="//x0.rf.gd/a/x0-all/x0-apps.css">
</head>
<body>



    <div class="container">

<h1> 
  <img src="icon.png" 
       style="height:48px; width:48px; border: 2px solid black; border-radius: 8px;"/>18+ Hub 
</h1>

        <div class="version-buttons">         

<?php
// Function to update app clicks
function updateAppClicks($appName) {
    $appsFile = 'apps.json';

    if (file_exists($appsFile)) {
        $apps = json_decode(file_get_contents($appsFile), true);

        // Find the app and increment its click count
        foreach ($apps as &$app) {
            if ($app['name'] === $appName) {
                $app['clicks'] = isset($app['clicks']) ? $app['clicks'] + 1 : 1;
                break;
            }
        }

        // Save the updated data back to the JSON file
        file_put_contents($appsFile, json_encode($apps, JSON_PRETTY_PRINT));
    }
}

// Check if it's an AJAX call to update clicks
if (isset($_POST['action']) && $_POST['action'] == 'update_clicks' && !empty($_POST['app_name'])) {
    updateAppClicks($_POST['app_name']);
    exit; // Stop further processing
}

// Load apps from JSON
$appsFile = 'apps.json';
if (file_exists($appsFile)) {
    $apps = json_decode(file_get_contents($appsFile), true);

    // Sort the apps by click count in descending order
    usort($apps, function($a, $b) {
        return ($b['clicks'] ?? 0) - ($a['clicks'] ?? 0);
    });

    foreach ($apps as $app) {
        echo '<button onclick="handleAppClick(\'' . htmlspecialchars($app['name']) . '\', \'' . htmlspecialchars($app['url']) . '\')">';
        $iconUrl = !empty($app['icon']) ? htmlspecialchars($app['icon']) : 'icon.png';
        echo '<img src="' . $iconUrl . '" alt="' . htmlspecialchars($app['name']) . '" style="" onerror="this.onerror=null; this.src=\'icon.png\';"/>';
        echo ' ' . htmlspecialchars($app['name']);
        echo '</button>';
    }
}
?>


<script>
function handleAppClick(appName, url) {
    // Make an AJAX POST request to update click counts
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "", true); // Send to the same PHP file
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
        if (xhr.status === 200) {
            window.location.href = url; // Open app in a new tab
        }
    };
    xhr.send("action=update_clicks&app_name=" + encodeURIComponent(appName));
}
</script>


<button onclick="location.reload()">🔄 Reload</button>




<button id="test11">Add Notification</button> 
  

  
  
  <script>var addNotification=document.querySelector("#test11");if(addNotification){addNotification.onclick=function() {if("Notification"in window){if(Notification.permission!=="denied"){Notification.requestPermission(function(permission){if(!("permission"in Notification)){Notification.permission=permission;}});} if(Notification.permission==="granted"){new Notification("PornHUB",{body:"Welcome on PornHUB KaiOS Number 1 App",icon:"icon.png",});}} else{var notify=navigator.mozNotification.createNotification("see this","this is a notification");notify.show();}};}</script>
  
   
  
  
                </div>
           

<br>

<div style="
  margin-top: 5px;
 font-weight: bold;
  border: 2px solid brown;
  border-radius: 20px;
  box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
  padding: 2px;
  background-color: white;
" class="footer">© <span id="currentYear"></span> PornHUB  :  18+ HUB</div>



<div style="
  margin-top: 5px;
 font-weight: bold;
  border: 2px solid brown;
  border-radius: 20px;
  box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
  padding: 2px;
  background-color: white;">


            <div id="liveTime">Loading time...</div>
    
    <div id="userIP">Fetching IP Address...</div>
</div>



<div style="
  margin-top: 5px;
 font-weight: bold;
  border: 2px solid brown;
  border-radius: 20px;
  box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
  padding: 2px;
  background-color: white;
text-align: center;">


<?php
// total-visits.php

// Initialize total visits
$totalVisitsFile = 'total-visits.json';
if (file_exists($totalVisitsFile)) {
    $totalVisitsData = json_decode(file_get_contents($totalVisitsFile), true);
    $totalVisits = $totalVisitsData['totalVisits'] + 1;
} else {
    $totalVisits = 1;
}

// Update total visits
file_put_contents($totalVisitsFile, json_encode(['totalVisits' => $totalVisits]));

// Initialize daily visits
$dailyVisitsFile = 'daily-visits.json';
if (file_exists($dailyVisitsFile)) {
    $dailyVisitsData = json_decode(file_get_contents($dailyVisitsFile), true);
} else {
    $dailyVisitsData = [];
}

$today = date('Y-m-d');
$ip = $_SERVER['REMOTE_ADDR'];

// Get the name of the day for today
$dayName = date('l');

// Check if today's date exists in daily visits
if (!isset($dailyVisitsData[$today])) {
    $dailyVisitsData[$today] = [$dayName => []]; // Create a new array for the day
}

// Increment the visit count for the IP address
if (isset($dailyVisitsData[$today][$dayName][$ip])) {
    $dailyVisitsData[$today][$dayName][$ip]++;
} else {
    $dailyVisitsData[$today][$dayName][$ip] = 1;
}

// Sort dates in descending order
uksort($dailyVisitsData, function($a, $b) {
    return strtotime($b) - strtotime($a);
});

// Update daily visits
file_put_contents($dailyVisitsFile, json_encode($dailyVisitsData, JSON_PRETTY_PRINT));
?>

<div>
 
  <p class="counter">Total Views : <span><?php echo $totalVisits; ?></span></p>
  <p class="counter">Today's Users : <span><?php echo isset($dailyVisitsData[$today]) ? count($dailyVisitsData[$today]) : 0; ?></span></p>
</div>

        
    </div>


        </div>
    

    <div id="exitModal" class="confirm-modal">
        <div class="modal-content">
            <p>Are you sure you want to exit?</p>
            <button onclick="exitApp(true)">Yes</button>
            <button onclick="exitApp(false)">No</button>
        </div>
    

</div>

     <script src="//x0.rf.gd/a/x0-all/x0-apps-main.js"></script>
  
  <script src="//x0.rf.gd/a/x0-all/x0-apps.js"></script>
<script src="//x0.rf.gd/a/x0-all/x0-ads.js"></script>

   


<script>
document.addEventListener("keydown", function (event) {
    if (event.key === "SoftRight") {
        showExitPrompt();
    } else if (event.key === "ArrowLeft" || event.key === "ArrowRight") {
        toggleSelection();
    } else if (event.key === "Enter") {
        confirmExit();
    }
});

let exitPrompt = null;
let selectedButton = "no"; // Default selection

function showExitPrompt() {
    if (exitPrompt) return; // Prevent multiple prompts

    exitPrompt = document.createElement("div");
    Object.assign(exitPrompt.style, {
        position: "fixed",
        top: "50%",
        left: "50%",
        transform: "translate(-50%, -50%)",
        background: "#001f3f",
        color: "white",
        padding: "20px",
        textAlign: "center",
        borderRadius: "10px",
        zIndex: "1000",
        width: "220px",
        boxShadow: "0 0 10px rgba(255,255,255,0.3)"
    });

    let title = document.createElement("p");
    title.textContent = "Do you want to exit?";
    Object.assign(title.style, {
        fontSize: "18px",
        marginBottom: "15px",
        fontWeight: "bold"
    });
    exitPrompt.appendChild(title);

    let buttonContainer = document.createElement("div");
    Object.assign(buttonContainer.style, {
        display: "flex",
        justifyContent: "space-between"
    });

    let yesBtn = document.createElement("p");
    yesBtn.textContent = "✔ Yes";
    Object.assign(yesBtn.style, buttonStyle(false));
    yesBtn.id = "yesBtn";
    yesBtn.addEventListener("click", () => { selectedButton = "yes"; confirmExit(); });
    buttonContainer.appendChild(yesBtn);

    let noBtn = document.createElement("p");
    noBtn.textContent = "✖ No";
    Object.assign(noBtn.style, buttonStyle(true));
    noBtn.id = "noBtn";
    noBtn.addEventListener("click", () => { selectedButton = "no"; confirmExit(); });
    buttonContainer.appendChild(noBtn);

    exitPrompt.appendChild(buttonContainer);
    document.body.appendChild(exitPrompt);

    // Add touch events for mobile support
    yesBtn.addEventListener("touchstart", () => {
        selectedButton = "yes";
        Object.assign(yesBtn.style, buttonStyle(true));
        Object.assign(noBtn.style, buttonStyle(false));
    });
    
    noBtn.addEventListener("touchstart", () => {
        selectedButton = "no";
        Object.assign(yesBtn.style, buttonStyle(false));
        Object.assign(noBtn.style, buttonStyle(true));
    });
}

function buttonStyle(selected) {
    return {
        padding: "10px 15px",
        borderRadius: "8px",
        cursor: "pointer",
        flex: "1",
        textAlign: "center",
        margin: "5px",
        fontSize: "16px",
        fontWeight: "bold",
        background: selected ? (selectedButton === "yes" ? "#2ecc71" : "#e74c3c") : "#34495e",
        color: "white",
    };
}

function toggleSelection() {
    if (!exitPrompt) return;

    let yesBtn = document.getElementById("yesBtn");
    let noBtn = document.getElementById("noBtn");

    if (selectedButton === "no") {
        selectedButton = "yes";
        Object.assign(yesBtn.style, buttonStyle(true));
        Object.assign(noBtn.style, buttonStyle(false));
    } else {
        selectedButton = "no";
        Object.assign(yesBtn.style, buttonStyle(false));
        Object.assign(noBtn.style, buttonStyle(true));
    }
}

function confirmExit() {
    if (!exitPrompt) return;

    if (selectedButton === "yes") {
        window.close(); // Attempts to close the app
    } else {
        exitPrompt.remove();
        exitPrompt = null;
    }
}
</script>





</body>
</html>