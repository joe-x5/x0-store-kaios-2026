
    function openVersion(url) {
        window.location.href = url;
    }

    window.onload = function() {
        // Immediate focus on the first button
        document.querySelector(".version-buttons button").focus();
        
        // Update the current year and time
        document.getElementById("currentYear").innerText = new Date().getFullYear();
        updateTime();
        setInterval(updateTime, 1000);
        
        // Fetch the user's IP immediately
        fetchUserIP();
    };

    function updateTime() {
        const now = new Date();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        document.getElementById("liveTime").innerText = `⏰ ${hours}:${minutes}:${seconds}`;
    }

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

        if (event.key === "none") {
            showExitConfirmation();
        }
    });

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
