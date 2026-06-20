<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X0 Store - KaiOS App Store</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            -webkit-tap-highlight-color: transparent;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            max-width: 480px;
            margin: 0 auto;
            overflow-x: hidden;
        }
        
        .header {
            background-color: #0f9d58;
            color: white;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            max-width: 480px;
            z-index: 100;
        }
        
        .header-title {
            font-size: 18px;
            font-weight: bold;
        }
        
        .container {
            padding: 60px 12px 60px;
        }
        
        .category-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-bottom: 24px;
        }
        
        .category-card {
            background-color: white;
            border-radius: 8px;
            padding: 16px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: all 0.2s;
        }

        .category-card.selected {
            border: 2px solid #0f9d58;
            transform: scale(0.98);
        }

        .category-icon {
            font-size: 32px;
            margin-bottom: 8px;
        }
        
        .category-card:active {
            transform: scale(0.98);
        }
        
        .app-list {
            display: none;
        }
        
        .app-list.active {
            display: block;
        }
        
        .app-item {
            background-color: white;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        
        .app-icon {
            width: 48px;
            height: 48px;
            border-radius: 8px;
            margin-right: 12px;
            object-fit: cover;
            background-color: #f1f1f1;
        }
        
        .app-details {
            flex: 1;
        }
        
        .app-name {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 4px;
        }
        
        .app-actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 8px;
        }
        
        .open-btn {
            background-color: #0f9d58;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 4px 12px;
            font-size: 12px;
            cursor: pointer;
        }
        
        .back-btn {
            display: none;
            position: fixed;
            bottom: 12px;
            left: 16px;
            background-color: #0f9d58;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
            z-index: 100;
        }
        
        .back-btn.active {
            display: block;
        }
        
        .category-title {
            font-size: 16px;
            font-weight: 600;
            margin: 16px 0;
            display: none;
        }
        
        .category-title.active {
            display: block;
        }
        
        .loading {
            text-align: center;
            padding: 20px;
            color: #666;
            display: none;
        }
        
        .loading.active {
            display: block;
        }
        
        /* D-pad focus styles */
        .dpad-focus {
            outline: 2px solid #0f9d58;
            outline-offset: 2px;
        }
        
        @media (max-width: 480px) {
            .category-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-title">X0 Store</div>
    </div>
    
    <div class="container">
        <div class="category-title" id="categoryTitle"></div>
        <div class="category-grid" id="categoryGrid">
            <div class="category-card" data-category="social" tabindex="0">
                <div class="category-icon">👥</div>
                <div class="category-name">Social</div>
            </div>
            <div class="category-card" data-category="games" tabindex="0">
                <div class="category-icon">🎮</div>
                <div class="category-name">Games</div>
            </div>
            <div class="category-card" data-category="education" tabindex="0">
                <div class="category-icon">📚</div>
                <div class="category-name">Education</div>
            </div>
            <div class="category-card" data-category="tools" tabindex="0">
                <div class="category-icon">🛠️</div>
                <div class="category-name">Tools</div>
            </div>
            <div class="category-card" data-category="ai" tabindex="0">
                <div class="category-icon">🤖</div>
                <div class="category-name">AI Apps</div>
            </div>
        </div>
        
        <div class="loading" id="loading">
            Loading apps...
        </div>
        
        <div class="app-list" id="appList">
            <!-- App items will be inserted here -->
        </div>
    </div>
    
    <button class="back-btn" id="backBtn">Back</button>
    
    <script>
        // App state
        let currentCategory = null;
        let currentFocus = null;
        let hasDpad = false;
        
        // DOM elements
        const categoryGrid = document.getElementById('categoryGrid');
        const appList = document.getElementById('appList');
        const backBtn = document.getElementById('backBtn');
        const loading = document.getElementById('loading');
        
        // Keyboard navigation support
        document.addEventListener('keydown', handleKeyPress);
        document.addEventListener('click', handleClick);
        
        // Check for D-pad support
        detectDpad();
        
        // Load apps from JSON file
        function loadApps(category) {
            currentCategory = category;
            document.getElementById('categoryTitle').textContent = 
                category.charAt(0).toUpperCase() + category.slice(1);
            document.getElementById('categoryTitle').classList.add('active');
            loading.classList.add('active');
            appList.classList.remove('active');
            
            // Simulate loading from JSON file
            setTimeout(() => {
                let apps = [];
                
                // Load social apps as an example
                if (category === 'social') {
                    apps = [
                        {
                            "name": "Facebook Chat",
                            "url": "https://www.facebook.com",
                            "icon": "social/host/facebook-icon.png"
                        },
                        {
                            "name": "Twitter Connect",
                            "url": "https://www.twitter.com",
                            "icon": "social/host/twitter-icon.png"
                        },
                        {
                            "name": "WhatsApp Web",
                            "url": "https://web.whatsapp.com",
                            "icon": "social/host/whatsapp-icon.png"
                        },
                        {
                            "name": "Telegram Web",
                            "url": "https://web.telegram.org",
                            "icon": "social/host/telegram-icon.png"
                        },
                        {
                            "name": "Chat MAX ALL",
                            "url": "http://x0.rf.gd/",
                            "icon": "host/chat_max_all-20250719063409.png"
                        },
                        {
                            "name": "Chatwave (All)",
                            "url": "https://x00.yzz.me/a/chatwave-all/",
                            "icon": "host/https://x00.yzz.me/a/chatwave-all/icon.png"
                        },
                        {
                            "name": "Global Chat",
                            "url": "https://wxfire.yzz.me/tools/kaios/apps/global-chat/",
                            "icon": "https://wxfire.yzz.me/tools/kaios/apps/global-chat/icon/icon.png"
                        },
                        {
                            "name": "Chat Batasa 🍕",
                            "url": "https://chat-max-all.blogspot.com/2025/04/chat-batasa.html?m=1",
                            "icon": "host/https://chat-max-all.blogspot.com/favicon.png"
                        },
                        {
                            "name": "Chat Max (WXFIRE)",
                            "url": "https://wxfire.rf.gd/tools/kaios/apps/chat-max/",
                            "icon": "host/https://wxfire.rf.gd/tools/kaios/apps/chat-max/icon.png"
                        },
                        {
                            "name": "Chit Chat (All)",
                            "url": "https://x00.yzz.me/a/chit-chat-all/",
                            "icon": "https://x00.yzz.me/a/chit-chat-all/icon.png"
                        },
                        {
                            "name": "VCall",
                            "url": "https://vivekgyan7.rf.gd/vcall/",
                            "icon": "https://vivekgyan7.rf.gd/vcall/icon.png"
                        },
                        {
                            "name": "Chat Max All (Andro)",
                            "url": "https://chat-max-all.blogspot.com",
                            "icon": "https://chat-max-all.blogspot.com/favicon.ico"
                        }
                    ];
                }
                
                loading.classList.remove('active');
                
                if (apps.length > 0) {
                    renderApps(apps);
                    appList.classList.add('active');
                    backBtn.classList.add('active');
                    
                    // Set focus to first app item
                    if (hasDpad) {
                        const firstAppItem = document.querySelector('.app-item');
                        if (firstAppItem) {
                            firstAppItem.focus();
                            currentFocus = firstAppItem;
                        }
                    }
                }
            }, 800);
        }
        
        function renderApps(apps) {
            appList.innerHTML = '';
            
            apps.forEach(app => {
                const appItem = document.createElement('div');
                appItem.className = 'app-item';
                appItem.tabIndex = 0;
                
                appItem.innerHTML = `
                    <img src="${app.icon}" alt="${app.name} app icon" class="app-icon" onerror="this.src='//x0storekaios.blogspot.com/favicon.ico'">
                    <div class="app-details">
                        <div class="app-name">${app.name}</div>
                    </div>
                    <button class="open-btn" onclick="window.open('${app.url}', '_blank')">Open</button>
                `;
                
                appList.appendChild(appItem);
            });
        }
        
        function goBack() {
            appList.classList.remove('active');
            backBtn.classList.remove('active');
            document.getElementById('categoryTitle').classList.remove('active');
            categoryGrid.style.display = 'grid';
            
            currentFocus = null;
            currentCategory = null;
            
            // Set focus back to selected category
            if (hasDpad) {
                const categoryCards = document.querySelectorAll('.category-card');
                if (categoryCards.length > 0) {
                    categoryCards[0].focus();
                }
            }
        }
        
        function handleKeyPress(e) {
            if (!hasDpad) return;
            
            const { key } = e;
            
            if (key === 'ArrowRight' || key === 'ArrowLeft' || key === 'ArrowUp' || key === 'ArrowDown' || key === 'Enter') {
                e.preventDefault();
                
                if (!currentFocus) {
                    const firstFocusable = document.querySelector('[tabindex="0"]');
                    if (firstFocusable) {
                        currentFocus = firstFocusable;
                        currentFocus.focus();
                    }
                    return;
                }
                
                if (key === 'Enter') {
                    if (currentFocus.classList.contains('category-card')) {
                        const category = currentFocus.getAttribute('data-category');
                        loadApps(category);
                    } else if (currentFocus.classList.contains('app-item')) {
                        const openBtn = currentFocus.querySelector('.open-btn');
                        if (openBtn) {
                            openBtn.click();
                        }
                    }
                    return;
                }
                
                if (key === 'ArrowRight') {
                    const nextElement = currentFocus.nextElementSibling;
                    if (nextElement && nextElement.tabIndex === 0) {
                        currentFocus = nextElement;
                    } else {
                        // Wrap to first item in row
                        const index = Array.from(currentFocus.parentNode.children).indexOf(currentFocus);
                        const nextRowIndex = index % 2 === 0 ? index + 1 : index - 1;
                        if (nextRowIndex >= 0 && nextRowIndex < currentFocus.parentNode.children.length) {
                            currentFocus = currentFocus.parentNode.children[nextRowIndex];
                        }
                    }
                } else if (key === 'ArrowLeft') {
                    const prevElement = currentFocus.previousElementSibling;
                    if (prevElement && prevElement.tabIndex === 0) {
                        currentFocus = prevElement;
                    } else {
                        // Wrap to last item in row
                        const index = Array.from(currentFocus.parentNode.children).indexOf(currentFocus);
                        const prevRowIndex = index % 2 === 0 ? index + 1 : index - 1;
                        if (prevRowIndex >= 0 && prevRowIndex < currentFocus.parentNode.children.length) {
                            currentFocus = currentFocus.parentNode.children[prevRowIndex];
                        }
                    }
                } else if (key === 'ArrowDown') {
                    if (currentFocus.classList.contains('category-card')) {
                        const index = Array.from(categoryGrid.children).indexOf(currentFocus);
                        const nextRowIndex = index + 2;
                        if (nextRowIndex < categoryGrid.children.length) {
                            currentFocus = categoryGrid.children[nextRowIndex];
                        }
                    } else if (currentFocus.classList.contains('app-item')) {
                        const nextElement = currentFocus.nextElementSibling;
                        if (nextElement && nextElement.classList.contains('app-item')) {
                            currentFocus = nextElement;
                        }
                    }
                } else if (key === 'ArrowUp') {
                    if (currentFocus.classList.contains('category-card')) {
                        const index = Array.from(categoryGrid.children).indexOf(currentFocus);
                        const prevRowIndex = index - 2;
                        if (prevRowIndex >= 0) {
                            currentFocus = categoryGrid.children[prevRowIndex];
                        }
                    } else if (currentFocus.classList.contains('app-item')) {
                        const prevElement = currentFocus.previousElementSibling;
                        if (prevElement && prevElement.classList.contains('app-item')) {
                            currentFocus = prevElement;
                        } else {
                            // If moving up from first app item, go back to categories
                            goBack();
                            return;
                        }
                    }
                }
                
                if (currentFocus) {
                    document.querySelectorAll('.category-card.selected').forEach(el => el.classList.remove('selected'));
                    currentFocus.classList.add('selected');
                    currentFocus.focus();
                }
            }
        }
        
        function handleClick(e) {
            if (e.target.closest('.category-card')) {
                const categoryCard = e.target.closest('.category-card');
                const category = categoryCard.getAttribute('data-category');
                loadApps(category);
            } else if (e.target.classList.contains('open-btn')) {
                const appItem = e.target.closest('.app-item');
                const appName = appItem.querySelector('.app-name').textContent;
                alert(`Opening ${appName}...`);
            } else if (e.target.closest('.back-btn')) {
                goBack();
            }
        }
        
        function detectDpad() {
            // Check if this is a KaiOS device or device with D-pad
            if (navigator.userAgent.includes('KaiOS') || window.innerWidth <= 480) {
                hasDpad = true;
                // Make all focusable elements have tabindex
                const focusableElements = document.querySelectorAll('.category-card, .app-item, .open-btn');
                focusableElements.forEach(el => {
                    el.setAttribute('tabindex', '0');
                });
            }
        }
        
        // Initialize by loading categories
        window.addEventListener('DOMContentLoaded', () => {
            if (hasDpad) {
                const firstCategory = document.querySelector('.category-card');
                if (firstCategory) {
                    firstCategory.focus();
                }
            }
        });
    </script>
</body>
</html>
