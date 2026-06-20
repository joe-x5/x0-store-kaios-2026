<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Education - X0 Store KaiOS And X0 All KaiOS</title>


<meta content='ca-pub-1786122365693674' name='google-adsense-account'/>
  
  <meta content='yHxwPbEBzFfMooOWanGYYiIQyCu_4Ai9bGxLQ4SP07U' name='google-site-verification'/>
  

 
  <meta content='X0 All : Tools App | Alternatives of X0 Store KaiOS' property='og:title'/>
  
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
   
        <h1><div onclick='sendKeyPress("ArrowLeft")'>«</div> Education <div onclick='sendKeyPress("ArrowRight")'>»</div></h1>


        <div class="version-buttons">
            



<?php
// Function to update app clicks
function updateAppClicks($appName) {
    $appsFile = 'apps.json';
    
    if (file_exists($appsFile)) {
        $apps = json_decode(file_get_contents($appsFile), true);
        
        foreach ($apps as &$app) {
            if ($app['name'] === $appName) {
                $app['clicks'] = isset($app['clicks']) ? $app['clicks'] + 1 : 1;
                break;
            }
        }
        
        file_put_contents($appsFile, json_encode($apps, JSON_PRETTY_PRINT));
    }
}

if (isset($_POST['action']) && $_POST['action'] == 'update_clicks' && !empty($_POST['app_name'])) {
    updateAppClicks($_POST['app_name']);
    exit;
}

$appsFile = 'apps.json';
if (file_exists($appsFile)) {
    $apps = json_decode(file_get_contents($appsFile), true);
    
    usort($apps, function($a, $b) {
        return ($b['clicks'] ?? 0) - ($a['clicks'] ?? 0);
    });
    
    foreach ($apps as $app) {
        $name = htmlspecialchars($app['name']);
        $url  = htmlspecialchars($app['url']);
        $iconUrl = !empty($app['icon']) ? htmlspecialchars($app['icon']) : 'icon.png';

        echo '<button data-name="'.strtolower($name).'"
              onclick="handleAppClick(\''.$name.'\', \''.$url.'\')">';
        echo '<img src="'.$iconUrl.'" alt="'.$name.'" /> '.$name;
        echo '</button>';
    }
}
?>

<script>
function handleAppClick(appName, url) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("action=update_clicks&app_name=" + encodeURIComponent(appName));
    window.location.href = url;
}

// SoftLeft = Search
document.addEventListener("keydown", function(e){
    if (e.key === "SoftLeft") {
        e.preventDefault();
        var q = prompt("Search App");
        if (q !== null) filterApps(q.toLowerCase());
    }
});

function filterApps(k){
    document.querySelectorAll(".app-btn").forEach(function(btn){
        var name = btn.getAttribute("data-name");
        btn.style.display = (name.indexOf(k) !== -1 || k === "") ? "block" : "none";
    });
}
</script>



        </div>



    <script>

        // Navigation handlers
        document.addEventListener('keydown', function(event) {
            // SoftRight button - Main page
            if (event.key === 'SoftRight') {
                window.location.href = '//x0.rf.gd/a/x0-all/';
            }
            // Right arrow - Social page
            else if (event.key === 'ArrowRight') {
                window.location.href = '//x0.rf.gd/a/x0-all/social/';
            }
            // Left arrow - Games page
            else if (event.key === 'ArrowLeft') {
                window.location.href = '//x0.rf.gd/a/x0-all/multimedia/';
            }
        });
    </script>

        
        <div id="ad-container" style="border: none; width: 90%; margin: 0 auto; position: relative; visibility: visible; background-color: transparent; overflow: auto;">

 <iframe data-google-container-id="a!2" data-load-complete="true" frameborder="0" height="90" id="ad-iframe" marginheight="0" marginwidth="0" name="ad-iframe" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" scrolling="yes" overflow: auto; src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-1786122365693674&amp;output=html&amp;adk=2062069824&amp;adf=3025194257&amp;lmt=1705043566&amp;w=728&amp;rafmt=9&amp;format=728x90&amp;url=https://tool-max.blogspot.com/&amp;host=ca-host-pub-1556223355139109&amp;" style="border: 0; width: 90%;"></iframe>


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
        <div id="softkey-left" class="softkey-button" onclick='sendKeyPress("SoftLeft")'>🔍</div>
        <div id="softkey-center" class="softkey-button" onclick='sendKeyPress("Enter")'>Select</div>
        <div id="softkey-right" class="softkey-button" onclick='sendKeyPress("SoftRight")'>Back</div>
    </div>
</footer>


    <script>
        function sendKeyPress(key) {
            // Create and dispatch a keydown event
            document.dispatchEvent(new KeyboardEvent("keydown", { key: key }));

            // Create and dispatch a keyup event after 100ms
            setTimeout(() => {
                document.dispatchEvent(new KeyboardEvent("keyup", { key: key }));
            }, 100);
        }
    </script>

    
  
 <script src="//x0.rf.gd/a/x0-all/x0-apps-main.js"></script>
 <script src="//x0.rf.gd/a/x0-all/x0-apps.js"></script>
<script src="//x0.rf.gd/a/x0-all/x0-ads.js"></script>

   
</body>
</html>
    
