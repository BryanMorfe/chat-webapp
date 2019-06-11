<!doctype html>
<html>
    <head>
        <title>Bryan Morfe</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
        
        <style>
            html, body {
                margin: 0;
                padding: 0;
                width: 250px;
                height: 370px;
                font-family: 'Roboto', "sans-serif";
                font-size: 18px;
                overflow: hidden;
            }
            
            header {
                position: relative;
                width: calc(100% - 16px);
                height: 25px;
                padding: 5px 8px;
                background-color: #333;
                border-radius: 6px 6px 0 0;
                cursor: pointer;
            }
            
            header #bubble-icon img {
                float: left;
                height: 22px;
                margin-top: calc(25px / 2 - 22px / 2);
            }
            
            header #title {
                color: white;
                float: left;
                margin-left: calc(50% - 98px / 2 - 25px);
            }
            
            header #options img {
                float: right;
                height: 7px;
                margin-top: calc(25px / 2 - 7px / 2);
            }
            
            main {
                height: calc(100% - 35px - 10px - 35px);
                background: url("waiting.jpg") center no-repeat;
                background-size: cover;
                position: relative;
                padding: 10px 10px 35px 10px;
                overflow: scroll;
            }
            
            #messages {
                position: relative;
                font-size: 13px;
            }
            
            #messages .message {
                position: relative;
                border-radius: 12px;
                padding: 5px;
                max-width: calc(100% - 40px);
                min-width: calc(50% - 10px);
                margin-bottom: 10px;
                overflow: hidden;
                color: white;
            }
            
            .content, .send-time {
                position: relative;
                z-index: 2;
            }
            
            .message .send-time {
                font-weight: 700;
                font-size: 10px;
                text-align: right;
            }
            
            .message .blur {
                position: absolute;
                width: 250px;
                height: calc(370px - 35px);
                z-index: 1;
                background: url("waiting.jpg") center no-repeat;
                background-attachment: fixed;
                background-size: cover;
                filter: blur(18px) brightness(0.85);
                top: -40px;
            }
            
            .foreign .blur {
                left: -10px;
            }
            
            .local .blur {
                right: -10px;
            }
            
            #messages .foreign {
                float: left;
            }
            
            #messages .local {
                float: right;
                color: #30A5FF;
            }
            
            main #textbar {
                position: fixed;
                overflow: hidden;
                top: calc(370px - 30px - 5px);
                left: 10px;
                width: 230px;
                height: 30px;
                border-radius: 5px;
                z-index: 5;
            }
            
            main #textbar .blur {
                position: absolute;
                width: 250px;
                height: calc(370px - 35px);
                z-index: 1;
                background: url("waiting.jpg") center no-repeat;
                background-size: cover;
                filter: blur(5px) brightness(0.55);
                left: -10px;
                bottom: -5px;
            }
            
            main #textbar textarea {
                resize: none;
                appearance: none;
                -webkit-appearance: none;
                border: none;
                width: 220px;
                height: 22px;
                border-radius: 5px;
                background-color: transparent;
                padding-left: 10px;
                padding-top: 6px;
                font-size: 12px;
                color: rgba(40, 140, 214, 1);
                position: relative;
                z-index: 2;
            }
            
            main #textbar textarea:focus {
                outline: none;
            }
            
            #textbar textarea::placeholder {
                color: rgba(40, 140, 214, 0.65);
            }
            
        </style>
        
        <script>
            var isCollapsed = false;
            
            function collapseMessages(collapse) {
                if (collapse) {
                    document.getElementById("msg-header").style.top = "335px";
                    document.getElementById("main-content").style.bottom = "-335px";
                    document.getElementById("textbar").style.top = "400px";
                    document.getElementById("main-content").style.display = "none";
                    document.getElementById("textbar").style.display = "none";
                    
                } else {
                    document.getElementById("msg-header").style.top = "0";
                    document.getElementById("main-content").style.bottom = "0";
                    document.getElementById("textbar").style.top = "calc(370px - 30px - 5px)";
                    document.getElementById("main-content").style.display = "block";
                    document.getElementById("textbar").style.display = "block";
                }
                
            }
            window.onload = function() {
                document.getElementById("msg-header").addEventListener("click", function() {
                    collapseMessages(!isCollapsed);
                    isCollapsed = !isCollapsed;
                });
            }
        </script>
    </head>
    <body>
        <header id="msg-header">
            <div id="bubble-icon">
                <img src="chat_bubble.svg" alt="bubble">
            </div>
            <div id="title">Bryan Morfe</div>
            <div id="options">
                <img src="options.svg" alt="options">
            </div>
        </header>
        <main id="main-content">
            <div id="messages">
                <div class="message foreign">
                    <div class="blur"></div>
                    <div class="content">Hey! I am Bryan, what's up with you?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message local">
                    <div class="blur"></div>
                    <div class="content">Hey! Bryan, sup?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message foreign">
                    <div class="blur"></div>
                    <div class="content">Hey! I am Bryan, what's up with you?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message local">
                    <div class="blur"></div>
                    <div class="content">Hey! Bryan, sup?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message foreign">
                    <div class="blur"></div>
                    <div class="content">Hey! I am Bryan, what's up with you?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message local">
                    <div class="blur"></div>
                    <div class="content">Hey! Bryan, sup?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message foreign">
                    <div class="blur"></div>
                    <div class="content">Hey! I am Bryan, what's up with you?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message local">
                    <div class="blur"></div>
                    <div class="content">Hey! Bryan, sup?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message foreign">
                    <div class="blur"></div>
                    <div class="content">Hey! I am Bryan, what's up with you?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message local">
                    <div class="blur"></div>
                    <div class="content">Hey! Bryan, sup?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message foreign">
                    <div class="blur"></div>
                    <div class="content">Hey! I am Bryan, what's up with you?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message local">
                    <div class="blur"></div>
                    <div class="content">Hey! Bryan, sup?</div>
                    <div class="send-time">10:49 PM</div>
                </div><div class="message foreign">
                    <div class="blur"></div>
                    <div class="content">Hey! I am Bryan, what's up with you?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message local">
                    <div class="blur"></div>
                    <div class="content">Hey! Bryan, sup?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message foreign">
                    <div class="blur"></div>
                    <div class="content">Hey! I am Bryan, what's up with you?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message local">
                    <div class="blur"></div>
                    <div class="content">Hey! Bryan, sup?</div>
                    <div class="send-time">10:49 PM</div>
                </div><div class="message foreign">
                    <div class="blur"></div>
                    <div class="content">Hey! I am Bryan, what's up with you?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message local">
                    <div class="blur"></div>
                    <div class="content">Hey! Bryan, sup?</div>
                    <div class="send-time">10:49 PM</div>
                </div><div class="message foreign">
                    <div class="blur"></div>
                    <div class="content">Hey! I am Bryan, what's up with you?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message local">
                    <div class="blur"></div>
                    <div class="content">Hey! Bryan, sup?</div>
                    <div class="send-time">10:49 PM</div>
                </div><div class="message foreign">
                    <div class="blur"></div>
                    <div class="content">Hey! I am Bryan, what's up with you?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
                <div class="message local">
                    <div class="blur"></div>
                    <div class="content">Hey! Bryan, sup?</div>
                    <div class="send-time">10:49 PM</div>
                </div>
            </div>
            <div id="textbar">
                <div class="blur"></div>
                <textarea placeholder="Send message..."></textarea>
            </div>
        </main>
    </body>
</html>