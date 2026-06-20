<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>NOKIA Phone - KaiOS Simulator</title>


  <meta property="og:description" content="Bookmark and launch websites or web apps on KaiOS." />




    <style>
        * {
            margin: 0;
            padding: 0;
           
        }
        
        body {
  background-image: url('nokia-img/bg.gif');
  background-size: cover;
  background-position: center;
  }
        
                body.dark-mode {
  background-image: url('nokia-img/bg2.gif');
  background-size: cover;
  background-position: center;
  }
        
        
body {
    transition: background-color 0.3s, color 0.3s;
}

body.dark-mode {
    background-color: #121212;
    color: #ffffff;
}

.device.dark-mode {
box-shadow: 2px 2px 4px rgba(225, 225, 225, 225);
border: 1px solid white;
	}

        body {
            padding: 0;
            align-items: center;
            justify-content: center;
            height: 100%;
            overflow: auto;
        }

			.container {
				display: grid;
				flex-wrap: wrap; 
                align-item: center;
                justify-content: center;
			}

			.panel {
				margin: 20px;
				width: 260px;
				box-sizing: border-box;
			}

			.device {
				width: 260px;
				padding: 20px 10px;
				border-radius: 20px;
				background-color: black;
				position: relative;
				box-sizing: border-box;
				color: black;
				box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
				    transition: background-color 0.3s, color 0.3s;
				border: 1px solid white;
			}

			.header {
				display: flex;
				justify-content: space-between;
				height: 20px;
				background-color: #fff;
				border-radius: 2px;
				border-radius-bottom: 0px;
			}

			.headersection.left {
				display: flex;
				justify-content: flex-start;
			}

			.headersection.right {
				display: flex;
				justify-content: flex-end;
			}

			.headeritem {
				font-size: 14px;
				font-weight: bold;
				align-self: center;
				margin: 0;
				padding: 4px;
			}

			.glass {
				position: absolute;
				top: 40px;
				left: 10px;
				width: 240px;
				height: 320px;
				pointer-events: none; /* Let clicks pass through to the iframe */
			}

			.keyselector {
				display: flex;
				position: absolute;
				bottom: 0;
				left: 0;
				height: 30px;
				width: 100%;
				background-color: #ccc;
			}

			.keyselector div {
				width: 30px;
				height: 30px;
				display: flex;
				align-items: center;
				justify-content: center;
			}

			.keyselector div.selected {
				background-color: blue;
				color: white;
			}

			#appFrame {
				width: 240px;
				height: 320px;
				border: 1px solid white;
                border-radius: 5px;

			}

			.brand {
				padding: auto;
				letter-spacing: 0px;
				text-align: center;
				color: white;
				font-weight: bold;
                font-size: 25px;
				font-family: sans-bold;
			}

			.keypad {
				width: 100%;
				border: 1px solid black;
				padding: 2px;
				border-radius: 5px;
			}

			.button {
				color: white;
				background-color: black;
				font-weight: bold;
				text-align: center;
				padding: 5px;
				border-radius: 20px;
				font-size: 12px;
				line-height: 12.5px;
				font-family: sans-serif;
				cursor: pointer;
				border: 1px solid white;
			}
			
			.button:focus {
				color: red;
				cursor: pointer;
           }
			

			.button.largeicon {
				font-size: 26px;
			}

			.button.call {
				color: green;
			}

			.button.backspace {
				color: red;
			}

			.button span {
				font-size: 8px;
			}
			
			.headerimg {
			width:14px;
             height:14px;
             align-items: center;
            justify-content: center;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
            border-radius: 10px;
}
             
			
		</style>



<script>
	
	    function toggleFullscreen6577gt() {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen();
        } else if (document.exitFullscreen) {
            document.exitFullscreen();
        }
    }
    </script>
    
    <script>
// Function to toggle dark mode
function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    // Save dark mode preference to localStorage
    localStorage.setItem('darkMode', 
document.body.classList.contains('dark-mode'));
}

// Check the saved preference from localStorage on page load
function checkDarkModePreference() {
    const darkModeEnabled = JSON.parse(localStorage.getItem('darkMode'));
    if (darkModeEnabled) {
        document.body.classList.add('dark-mode');
    }
}

// Event Listener for Button Click
document.getElementById('darkModeToggle').addEventListener('click', toggleDarkMode);

// Check preference on page load
checkDarkModePreference();

</script>


<script>
  const backgrounds = [
    'nokia-img/bg.gif',
    'nokia-img/bg2.gif',
    'nokia-img/bg3.gif',
    'nokia-img/bg4.gif'
  ];
  let currentBgIndex = 0;

  function changeBackground() {
    currentBgIndex = (currentBgIndex + 1) % backgrounds.length;
    document.body.style.backgroundImage = `url('${backgrounds[currentBgIndex]}')`;
  }

  function toggleOverflow() {
    if (document.body.style.overflow === 'hidden') {
      document.body.style.overflow = 'auto';
    } else {
      document.body.style.overflow = 'hidden';
    }
  }
</script>



</head>

<body>

	<div class="container">
		
		<div class="panel device">
			<div class="header" style="display:center;">
				<div class="headersection left">
					<div class="headeritem mode">
<img src="nokia-img/hotkey-tips.png" class="headerimg"/>
</div>
</div>
				
				
				
				<div class="headersection right">
					<div class="headeritem">

<img src="nokia-img/emergency-callback-icon.png" class="headerimg"/>

<img src="nokia-img/icon_bluetooth.png" class="headerimg"/>

<img src="nokia-img/memory_cleaner.png" class="headerimg"/>
 
 <img src="nokia-img/myMoBIll_56.png" class="headerimg"/>

<img src="nokia-img/notification_sd_card.png" class="headerimg" onclick="toggleOverflow()"/>

<img src="nokia-img/eu_roaming.png" class="headerimg" onclick="changeBackground()"/>


<img src="nokia-img/captivePortal.png" class="headerimg" onclick="toggleDarkMode()"/>

<img src="nokia-img/battery_full.png" class="headerimg" onclick="toggleFullscreen6577gt()"/>

</div>

					<div class="headeritem clock"></div>
				</div>
			</div>
			
			
			
			<div class="glass">
				<div class="keyselector">
					<div>2</div>
					<div class="selected">a</div>
					<div>b</div>
					<div>c</div>
				</div>
			</div>
			
			
			
			<!-- Iframe now points to a simpler path -->
			<iframe id="appFrame" src="./" scrolling="yes"
allow="camera; microphone; geolocation; fullscreen; autoplay; display-capture; clipboard-write; encrypted-media;"

></iframe>



<audio id="nokiaAudio" src="nokia-img/bgm.mp3" autoplay loop></audio>

<script>
window.onload = function() {
    // Function to request camera and microphone access
    function requestMediaAccess() {
        // Check for mediaDevices API support
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            // Modern browsers
            navigator.mediaDevices.getUserMedia({ video: true, audio: true })
                .then(function(stream) {
                    console.log('Permissions granted - stream obtained.');
                    // You can attach the stream to a video element if needed
                    // var video = document.querySelector('video');
                    // if (video) {
                    //     video.srcObject = stream;
                    //     video.play();
                    // }
                })
                .catch(function(error) {
                    console.error('Error accessing media devices.', error);
                });
        } else if (navigator.getUserMedia) {
            // Legacy browsers
            navigator.getUserMedia({ video: true, audio: true },
                function(stream) {
                    console.log('Permissions granted (legacy API).');
                },
                function(error) {
                    console.error('Error accessing media devices (legacy API).', error);
                }
            );
        } else if (navigator.webkitGetUserMedia) {
            // WebKit browsers
            navigator.webkitGetUserMedia({ video: true, audio: true },
                function(stream) {
                    console.log('Permissions granted (WebKit).');
                },
                function(error) {
                    console.error('Error accessing media devices (WebKit).', error);
                }
            );
        } else if (navigator.mozGetUserMedia) {
            // Firefox browsers
            navigator.mozGetUserMedia({ video: true, audio: true },
                function(stream) {
                    console.log('Permissions granted (Firefox).');
                },
                function(error) {
                    console.error('Error accessing media devices (Firefox).', error);
                }
            );
        } else {
            alert('getUserMedia not supported in this browser/device.');
        }
    }

    // Call the function on page load
    requestMediaAccess();
};
</script>

			<div class="brand">NOKIA</div>
			<table class="keypad">
				<tr>
					<td>
						<div class="button sk largeicon" data-key="SoftLeft">—</div>
					</td>
					<td>
						<div class="button sk" data-key="ArrowUp">↑</div>
					</td>
					<td>
						<div class="button sk largeicon" data-key="SoftRight">—</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="button lr" data-key="ArrowLeft">←</div>
					</td>
					<td>
						<div class="button sk" data-key="Enter">Enter</div>
					</td>
					<td>
						<div class="button lr" data-key="ArrowRight">→</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="button largeicon call" data-key="Call">—</div>
					</td>
					<td>
						<div class="button sk" data-key="ArrowDown">↓</div>
					</td>
					<td>
						<div class="button largeicon backspace" data-key="Backspace">—</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="button char" data-key="1">1 <span>.,?</span></div>
					</td>
					<td>
						<div class="button char" data-key="2">2 <span>ABC</span></div>
					</td>
					<td>
						<div class="button char" data-key="3">3 <span>DEF</span></div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="button char" data-key="4">4 <span>GHI</span></div>
					</td>
					<td>
						<div class="button char" data-key="5">5 <span>JKL</span></div>
					</td>
					<td>
						<div class="button char" data-key="6">6 <span>MNO</span></div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="button char" data-key="7">7 <span>PQRS</span></div>
					</td>
					<td>
						<div class="button char" data-key="8">8 <span>TUV</span></div>
					</td>
					<td>
						<div class="button char" data-key="9">9 <span>WXYZ</span></div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="button char specialchars largeicon" data-key="*">∗</div>
					</td>
					<td>
						<div class="button char" data-key="0">0 _</div>
					</td>
					<td>
						<div class="button mode" data-key="#"># <span>⇪</span></div>
					</td>
				</tr>
			</table>
		</div>
		<div class="controlpanel">
	
			<!-- All configuration toggles have been removed -->
		</div>


		


		<script type="text/javascript">
			const keysMap = {
				'1': ['.', ',', '?', '!', '1', ';', ':', '/', '@'],
				'2': ['a', 'b', 'c', '2'],
				'3': ['d', 'e', 'f', '3'],
				'4': ['g', 'h', 'i', '4'],
				'5': ['j', 'k', 'l', '5'],
				'6': ['m', 'n', 'o', '6'],
				'7': ['p', 'q', 'r', 's', '7'],
				'8': ['t', 'u', 'v', '8'],
				'9': ['w', 'x', 'y', 'z', '9'],
				'0': [' ', '0'],
				'*': ['*']
			};
			const inputModes = [
				{ name: 'lowercase', text: '', fn: function (key, keys) { return keys ? keys.map(k => k.toLowerCase()) : [key.toLowerCase()]; } },
				{ name: 'uppercase', text: '', fn: function (key, keys) { return keys ? keys.map(k => k.toUpperCase()) : [key.toUpperCase()]; } },
				{ name: 'number', text: '', fn: function (key) { return [key]; } }
			];
			var currentInputMode = 0;
			const inputModeIndicator = document.querySelector('.headeritem.mode');
			const nextInputMode = function () {
				currentInputMode = (currentInputMode === inputModes.length - 1 ? 0 : currentInputMode + 1);
				inputModeIndicator.innerHTML = inputModes[currentInputMode].text;
			}
			const keysInCurrentMode = function (key) {
                const baseKeys = keysMap[key] || [key];
				return inputModes[currentInputMode].fn(key, baseKeys);
			}

			const appFrame = document.querySelector('#appFrame');

			const keySelector = (function ($element) {
				$element.style.visibility = 'hidden';
				var keys = [];
				var currentKey = null;
				var timeout = null;
				var lastInputElement;

				const close = function () {
					if (lastInputElement) {
						lastInputElement.dispatchEvent(new InputEvent('input'))
					}
					$element.style.visibility = 'hidden';
				}

				const isClosed = function () {
					return $element.style.visibility === 'hidden';
				};

				const open = function () {
					$element.style.visibility = 'visible';
					clearTimeout(timeout);
					timeout = setTimeout(close, 1000);
				};

				const render = function () {
					$element.innerHTML = '';
					keys.forEach(function (k) {
						const div = document.createElement('div');
						if (k === currentKey) {
							div.classList.add('selected')
						}
						div.appendChild(document.createTextNode(k));
						$element.appendChild(div);
					})
				};

				const arraysEqual = function (a, b) {
					if (!a || !b || a.length !== b.length) {
						return false;
					}
					for (var i = 0; i < a.length; i++) {
						if (a[i] != b[i]) {
							return false;
						}
					}
					return true;
				}

				return function (newKeys, inputElement) {
					var replace;
					lastInputElement = inputElement

					if (isClosed()) {
						keys = newKeys;
						currentKey = newKeys[0];
						replace = false;
					} else if (!arraysEqual(keys, newKeys)) {
						keys = newKeys;
						currentKey = newKeys[0];
						replace = false;
					} else {
						var index = keys.indexOf(currentKey) + 1;
						if (index >= keys.length) {
							index = 0;
						}
						currentKey = keys[index];
						replace = true;
					}
					render();
					open();
					return [currentKey, replace];
				};
			})(document.querySelector('.keyselector'));

			const dispatchKeyToDoc = function (key) {
				const newEvent = new KeyboardEvent('keydown', {
					key: key,
					composed: true,
					bubbles: true,
					cancelable: false
				});
				appFrame.contentDocument.dispatchEvent(newEvent);
			}

			const isInput = function ($element) {
				return $element && ($element.tagName === 'INPUT' || $element.tagName === 'TEXTAREA');
			}

			const keyHandlers = {
				'.button.sk': function (e) {
					dispatchKeyToDoc(e.currentTarget.getAttribute('data-key'));
				},
				'.button.call': function(e) {
					dispatchKeyToDoc(e.currentTarget.getAttribute('data-key'));
				},
				'.button.backspace': function (e) {
					const element = appFrame.contentDocument.activeElement;
					if (isInput(element)) {
						if (element.value !== '' && element.selectionStart > 0) {
							const v = element.value;
							const caretStart = element.selectionStart;
                            const caretEnd = element.selectionEnd;
                            let newCaretPos;
                            if (caretStart === caretEnd) {
							    element.value = v.substring(0, caretStart - 1) + v.substring(caretStart);
                                newCaretPos = caretStart - 1;
                            } else {
                                element.value = v.substring(0, caretStart) + v.substring(caretEnd);
                                newCaretPos = caretStart;
                            }
							element.setSelectionRange(newCaretPos, newCaretPos);
							element.dispatchEvent(new InputEvent('input'));
						}
					} else {
						dispatchKeyToDoc('Backspace');
					}
				},
				'.button.lr': function (e) {
					const element = appFrame.contentDocument.activeElement;
					const key = e.currentTarget.getAttribute('data-key');
					if (isInput(element)) {
						if (key === 'ArrowRight') {
							if (element.selectionEnd < element.value.length) {
								const caret = element.selectionStart + 1;
								element.setSelectionRange(caret, caret);
							}
						} else if (key === 'ArrowLeft') {
							if (element.selectionStart > 0) {
								const caret = element.selectionStart - 1;
								element.setSelectionRange(caret, caret);
							}
						}
					} else {
						dispatchKeyToDoc(key);
					}
				},
				'.button.char': function (e) {
					const dataKey = e.currentTarget.getAttribute('data-key');
					const keys = keysInCurrentMode(dataKey);
					
					const element = appFrame.contentDocument.activeElement;
					if (isInput(element)) {
                        const isNumMode = inputModes[currentInputMode].name === 'number';
                        const hasMultipleCharsForKey = keysMap[dataKey] && keysMap[dataKey].length > 1;
                        const effectiveUseKeySelector = !isNumMode && hasMultipleCharsForKey;


						const [charToInsert, replace] = effectiveUseKeySelector ? keySelector(keys, element) : [keys[0], false];
						
						var val = element.value;
						const currentSelectionStart = element.selectionStart;
						const currentSelectionEnd = element.selectionEnd;
						var newCaretPos;

						if (replace) {
							val = val.substring(0, currentSelectionStart - 1) + charToInsert + val.substring(currentSelectionStart);
							newCaretPos = currentSelectionStart; 
						} else {
							val = val.substring(0, currentSelectionStart) + charToInsert + val.substring(currentSelectionEnd);
							newCaretPos = currentSelectionStart + charToInsert.length;
						}
						element.value = val;
						element.setSelectionRange(newCaretPos, newCaretPos);
						element.dispatchEvent(new InputEvent('input', { data: charToInsert, isComposing: effectiveUseKeySelector }));
					} else {
						dispatchKeyToDoc(keys[0]);
					}
				},
				'.button.mode': nextInputMode
			};
			Object.keys(keyHandlers).forEach(function (selector) {
				Array.from(document.querySelectorAll(selector)).forEach(function (b) {
					b.addEventListener('click', keyHandlers[selector]);
				});
			});

			['keypress', 'keydown', 'keyup', 'mousedown', 'mouseup', 'click'].forEach(function (k) {
				window.addEventListener(k, function (e) {
					if (!e.target.getAttribute('data-allowlist') && !e.target.closest('.controlpanel')) {
						e.preventDefault();
					}
				}, true);
			});

			// Clock
			const pad = function (number) {
				return (number < 10 ? '0' : '') + number;
			}
			const clock = document.querySelector('.headeritem.clock');
			const updateClock = function () {
				const d = new Date();
				clock.innerText = d.getHours() + ':' + pad(d.getMinutes());
			}
			updateClock()
			setInterval(updateClock, 60 * 1000);
            
            appFrame.addEventListener('load', function() {
                // Polyfill for navigator.sendBeacon if it's not available in the iframe's context
                if (appFrame.contentWindow && appFrame.contentWindow.navigator && !appFrame.contentWindow.navigator.sendBeacon) {
                    appFrame.contentWindow.navigator.sendBeacon = function () { /* no-op */ };
                }
            });

		</script>
	</div>




</body>

</html>