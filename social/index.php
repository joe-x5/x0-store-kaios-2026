<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Social - X0 All KaiOS</title>
 <meta property="og:image" content="https://x0.rf.gd/a/ai-image-genrator/gen.php?prompt=X0-Store-Social&width=600&height=300" />

  <link rel="icon" href="https://x0.rf.gd/a/ai-image-genrator/gen.php?prompt=X0-Store-Social &width=128&height=128" />


<meta content='ca-pub-1786122365693674' name='google-adsense-account'/>
  
    

  <meta content='yHxwPbEBzFfMooOWanGYYiIQyCu_4Ai9bGxLQ4SP07U' name='google-site-verification'/>
  

 
  <meta content='X0 All : Tools App | Alternatives of Chat Max All' property='og:title'/>
  
  <meta content='X0 All lets you connect with friends through our tools, chats, create group chats, and join global chats. ' property='og:description'/>

  <meta content='KaiOS No.1 Tools App with 50K+ downloads and 50K+ users in just 3 months! X0 All lets you connect with friends through private chats, create group chats, and join global chats. No phone number required—just start chatting instantly! Send images and express yourself freely. Make new friends, share your feelings, and enjoy real-time conversations. Exciting new features, including **voice and video chat**, are coming soon. Stay connected and experience seamless chatting like never before!' name='description'/>


<link rel="stylesheet" href="//x0.rf.gd/a/x0-all/x0-apps.css"/>



</head>
<body>



<style>
.h1header {
  background-image: url('header.png');
}
</style>

<h1 class="h1header"></h1>
   
    <div class="container">  
        <h1> « Social » </h1>
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


                </div>



    <script>

        // Navigation handlers
        document.addEventListener('keydown', function(event) {
            // SoftRight button - Main page
            if (event.key === 'SoftRight') {
                window.location.href = 'https://x0.rf.gd/a/x0-all/';
            }
            // Right arrow - Social page
            else if (event.key === 'ArrowRight') {
                window.location.href = 'https://x0.rf.gd/a/x0-all/games/';
            }
            // Left arrow - Games page
            else if (event.key === 'ArrowLeft') {
                window.location.href = 'https://x0.rf.gd/a/x0-all/education/';
            }
        });
    </script>


<br>
        
        <div id="ad-container" style="border: none;width: 90%; margin: 0 auto; position: relative; visibility: visible; background-color: transparent; overflow: auto;">

 <iframe data-google-container-id="a!2" data-load-complete="true" frameborder="0" height="90" id="ad-iframe" marginheight="0" marginwidth="0" name="ad-iframe" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" scrolling="yes" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-1786122365693674&amp;output=html&amp;adk=2062069824&amp;adf=3025194257&amp;lmt=1705043566&amp;w=728&amp;rafmt=9&amp;format=728x90&amp;url=https://tool-max.blogspot.com/&amp;host=ca-host-pub-1556223355139109&amp;" style="border: 0; width: 100%;"></iframe>


<script type='text/javascript'> 
                google_ad_client = "pub-1786122365693674";
                google_ad_host = "pub-1556223355139109"; 
                google_ad_width = 200; 
                google_ad_height = 250; 
                google_ad_type = "text_image"; 
                google_color_border = "FFFFFF"; 
                google_color_bg = "ffffff"; 
                google_color_link = "0000ff"; 
                google_color_text = "000000"; 
                google_color_url = "008000"; 
                google_page_url = "https://tool-max.blogspot.com/"; 
                </script>
                
                
                <script src='https://pagead2.googlesyndication.com/pagead/show_ads.js' type='text/javascript'></script>
                
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
" class="footer">© <span id="currentYear"></span> Tool Max Pro X

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

 <footer class="softkey">
    <div id="softKeysContainer">
        <div id="softkey-left" class="softkey-button">🔍</div>
        <div id="softkey-center" class="softkey-button">Select</div>
        <div id="softkey-right" class="softkey-button">Back</div>
    </div>
</footer>


    <script>
        function openVersion(url) {
            window.location.href = url;
        }

        document.getElementById("currentYear").innerText = new Date().getFullYear();

        function updateTime() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
            document.getElementById("liveTime").innerText = `⏰ ${hours}:${minutes}:${seconds}`;
        }
        setInterval(updateTime, 1000);
        updateTime();

        document.addEventListener('keydown', function(event) {
            let buttons = document.querySelectorAll(".version-buttons button");
            let focusedElement = document.activeElement;

            if (event.key === "ArrowDown") {
                for (let i = 0; i < buttons.length; i++) {
                    if (buttons[i] === focusedElement && i < buttons.length - 1) {
                        buttons[i + 1].focus();
                        break;
                    }
                }
            } else if (event.key === "ArrowUp") {
                for (let i = 0; i < buttons.length; i++) {
                    if (buttons[i] === focusedElement && i > 0) {
                        buttons[i - 1].focus();
                        break;
                    }
                }
            } else if (event.key === "Enter") {
                focusedElement.click();
            }

            if (event.key === "SoftRight") {
                showExitConfirmation();
            }
        });

        window.onload = function() {
            document.querySelector(".version-buttons button").focus();
            fetchUserIP();
        };

        let backPressTimeout;
        function showExitConfirmation() {
            clearTimeout(backPressTimeout);
            backPressTimeout = setTimeout(function() {
                document.getElementById('exitModal').style.display = 'flex';
            }, 1000);
        }

        function exitApp(confirmExit) {
            if (confirmExit) {
                window.close();
            } else {
                document.getElementById('exitModal').style.display = 'none';
            }
        }

        function fetchUserIP() {
            fetch("https://api64.ipify.org?format=json")
                .then(response => response.json())
                .then(data => {
                    document.getElementById("userIP").innerText = `🌍 Your IP: ${data.ip}`;
                })
                .catch(() => {
                    document.getElementById("userIP").innerText = "⚠️ Unable to fetch IP";
                });
        }
   
 
    </script>
    
  
  
  <script>

</script>
    
<script src="//x0.rf.gd/a/x0-all/x0-apps.js"></script>
<script src="//x0.rf.gd/a/x0-all/x0-ads.js"></script>



<?php
// Set the path for your JSON file
$jsonFilePath = 'traffic_data.json';

// Get the referrer
$referrer = isset($_SERVER['HTTP_REFERER']) ? parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) : 'Direct Access';
$currentDate = date("Y-m-d");

// Load existing traffic data
if (file_exists($jsonFilePath)) {
    $existingData = json_decode(file_get_contents($jsonFilePath), true);
    if (!is_array($existingData)) {
        $existingData = []; // Initialize as an empty array if there was an issue
    }
} else {
    $existingData = []; // Create an empty array if file does not exist
}

// Check if today's date already exists in the data
if (!isset($existingData[$currentDate])) {
    $existingData[$currentDate] = []; // Initialize the date entry if it doesn't exist
}

// Check if the referrer already exists for today
if (isset($existingData[$currentDate][$referrer])) {
    // Increment visit count from this referrer for today
    $existingData[$currentDate][$referrer]['visits'] += 1;
} else {
    // Initialize visit count for this referrer for today
    $existingData[$currentDate][$referrer] = ['visits' => 1];
}

// Save updated data to JSON file
file_put_contents($jsonFilePath, json_encode($existingData, JSON_PRETTY_PRINT));

// Output success message (or you can simply redirect or show the website content)
echo "";
?>



</body>
</html>