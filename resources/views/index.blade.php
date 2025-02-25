<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart-Transacts</title>
    <link rel="icon" href="/images/logo-icon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Use Poppins font */
            margin: 0;
            background-color: #f8f9fa; /* Very light gray background */
            color: #343a40; /* Dark gray text */
        }

        /* Style for the navigation container */
        nav {
            background-color: #fff;
            padding: 20px;
            display: flex;
            justify-content: center; /* Center the nav items horizontally */
            align-items: center; /* Center the items vertically */
            border-bottom: 1px solid #eee;
        }

        /* Style for the navigation list */
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; /* Center the items horizontally */
            align-items: center; /* Optional: vertically center items if the nav has height */
        }

        /* Style for each navigation item */
        nav li {
            margin-left: 20px;
        }

        /* Style for the links inside the navigation */
        nav a {
            text-decoration: none;
            color: #343a40;
            font-weight: 500; /* Slightly bolder */
        }

        /* Center the 'Log in' and 'Sign Up' buttons */
        nav div {
            display: flex;
            align-items: center; /* Center the buttons vertically */
            gap: 10px; /* Space between buttons */
        }

        features-logo {
            width: 150px;
            height: auto;
            object-fit: contain;
        }

        .hero {
            text-align: center;
            padding: 10px 50px; /* Adjust padding */
            background-color: grey;
        }

        .hero h1 {
            font-size: 3.5rem; /* Larger heading */
            font-weight: 700; /* Bold heading */
            color: white;
            line-height: 1.2; /* Adjust line height */
        }

        .hero p {
            font-size: 1.2rem;
            color: white; /* Slightly lighter text */
        }

        .cta-buttons {
            display: flex;
            flex-direction: column; /* Keeps the paragraphs and buttons stacked */
            align-items: center; /* 
            width: 600px; /* Or a percentage like 80% */
            margin: 0 auto;
            gap: 20px; /* Space between buttons */
        }

        .cta-buttons p {  /* Target the paragraphs inside cta-buttons */
            margin: 0; /* Remove all margins */
        }

        .cta-button {
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            width: 300px; /* Or a percentage like 80% */
            font-size: 1.1rem;
            border-radius: 50px; /* Or a large value like 999px */
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            
        }

        .cta-start {
            display: inline-block; /* Or block if you want it to take full width */
            padding: 15px 30px; /* Adjust padding as needed */
            border: none;
            border-radius: 999px; /* Or a large value like 50px */
            background-color: #007bff; /* Or your desired background color */
            color: white; /* Or your desired text color */
            font-size: 1.1rem; /* Or your desired font size */
            font-weight: 500; /* Or your desired font weight */
            text-align: center; /* Center the text horizontally */
            text-decoration: none; /* Remove underline from link */
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .cta-start:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }

        .track-button {
            background-color: #d4af37;
            color: white;
        }

        .track-button:hover {
            background-color: #c0982a;
        }

        .accept-button {
            background-color: #007bff;
            color: white;
        }

        .accept-button:hover {
            background-color: #0056b3;
        }

        .cancel-button {
            background-color: #dc3545;
            color: white;
        }

        .cancel-button:hover {
            background-color: #bd2130;
        }
        .payment {
            display: flex;
            flex-wrap: wrap;
        }
        .box {
            flex: 1;
            padding: 30px;
            color: white;
            min-width: 300px;
        }
        .bank-account {
            background-color: #ff9900; /* Orange */
        }
        .m-wallet {
            background-color: #e5005a; /* Pink */
        }
        h2 {
            font-size: 24px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }
        a {
            color: white;
            font-weight: bold;
            text-decoration: none;
        }
        a:hover {
            text-decoration: none;
        }

        /* Section for the new headline */
        .features {
            padding: 50px 20px;
            background-color: #f5f5f5;
        }

        .features__headline {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .features__content {
            display: flex;
            justify-content: space-between;
            gap: 20px; /* Adds space between columns */
            flex-wrap: wrap;
        }

        .features__column {
            flex: 1 1 calc(33.333% - 20px); /* Each column takes up one third of the space minus gap */
            box-sizing: border-box; /* Ensures the padding and margin don't affect the width */
            padding: 15px;
        }

        .features__item {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column; /* Stacks content vertically */
            align-items: center; /* Centers horizontally */
            justify-content: center; /* Centers vertically */
            text-align: center; /* Ensures text is centered */
        }

        .features__icon {
            font-size: 3rem; /* Icon size */
            color: #007bff; /* Icon color */
            margin-bottom: 20px; /* Space below the icon */
        }

        .features__subheadline {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }

        .features__description {
            font-size: 1rem;
            margin-bottom: 20px;
            color: #6c757d;
        }

        .features__button {
            padding: 10px 20px; /* Adds padding inside the button */
            border-radius: 50px; /* Makes the corners rounded to give a pill shape */
            background-color: #007bff; /* Background color for the button */
            color: white; /* Button text color */
            border: none; /* Remove default border */
            width: 100%; /* Makes the button expand to match the container's width */
            font-size: 1em; /* Adjust font size */
            cursor: pointer; /* Changes the cursor to a pointer on hover */
            transition: background-color 0.3s ease; /* Smooth transition for background color */
        }

        .features__button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }



        .features__image {
            width: 100%; /* Ensure the images fit within their container */
            border-radius: 8px;
        }

        .connects {
            display: flex;
            flex-direction: column;
            padding: 20px; /* Add padding for spacing */
            align-items: center;
            margin-bottom: 20px;
        }

        .tabs {
            display: flex;
            border-bottom: 2px solid #e0e0e0;
            margin-bottom: 20px;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            color: #666;
        }

        .tab.active {
            color: #0070ba;
            border-bottom: 2px solid #0070ba;
        }

        .steps {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            margin-bottom: 20px;
        }

        .step {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #333;
        }

        .step-circle {
            width: 30px;
            height: 30px;
            border: 1px solid #ccc;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 10px;
        }

        .arrow {
            font-size: 20px;
            color: #ccc;
        }

        .btn-learn {
            background: white;
            border: 2px solid #0070ba;
            color: #0070ba;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-learn:hover {
            background-color: #0070ba;
            color: white;
        }

        .features-summary {
            background-color: #1976D2 ; /* Blue background */
            color: white;
            padding: 60px 0; /* Adjust padding */
            text-align: center;
        }

        .summary-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .summary-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 40px;
        }

        .summary-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }

        .summary-item {
            width: calc(33.33% - 40px); /* Three items per row */
            text-align: left; /* Align content to the left */
            display: flex; /* Use flexbox for icon and content */
            align-items: flex-start; /* Align items to the top */
        }

        .summary-icon {
            margin-right: 20px; /* Space between icon and content */
            width: 60px; /* Adjust icon size */
        }

        .summary-icon img {
            max-width: 100%;
            height: auto;
        }

        .summary-heading {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .summary-description {
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Responsive adjustments (example) */
        @media (max-width: 992px) {
            .summary-item {
                width: calc(50% - 40px); /* Two items per row */
            }
        }

        @media (max-width: 768px) {
            .summary-item {
                width: 100%; /* One item per row */
            }
        }

        .content {
            flex: 1; /* Allow content to take up available space */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 80px;
            padding: 40px; /* Add padding around content */
        }

        .cta-button {
            background-color: #007bff; /* Blue button */
            color: white;
            padding: 15px 30px;
            border-radius: 50px; /* Makes the corners rounded to give a pill shape */
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none; /* Remove underline from link */
        }

        .cta-button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        .partners {
            padding: 80px;
            background-color: #eee; /* Light gray partners section */
            text-align: center;
        }
        footer {
            background-color: #fff; /* White background */
            padding: 20px 0; /* Adjust padding as needed */
            text-align: center;
            font-size: 0.9rem; /* Slightly smaller font */
            border-top: 1px solid #eee; /* Add a top border */
        }

        .footer-container {
            max-width: 1200px; /* Or your preferred width */
            margin: 0 auto;
            padding: 0 20px; /* Add side padding */
        }

        .footer-links-top {
            margin-bottom: 10px; /* Space between top and bottom links */
            word-spacing: 2px;
        }

        .right-footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .left-footer {
            display: flex;
            justify-content: flex-start;
            gap: 10px;
        }

        .footer-links-bottom {
            display: flex; /* Make .footer-links-bottom a flex container */
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
            justify-content: space-between; /* Center the links horizontally */
            align-items: center; /* Vertically align items */
            gap: 20px; /* Space between links */
            width: 100%; /* Ensure it takes full width for wrapping */ /* Added width: 100% */
        }

        footer a {
            color: #343a40; /* Dark gray link color */
            text-decoration: none;
            transition: color 0.3s; /* Smooth color transition on hover */
        }

        footer a:hover {
            color: #007bff; /* Or your hover color */
            text-decoration: underline;
        }

        .copyright {
            color: #6c757d; /* Lighter copyright text color */
        }

        hr {
            border-color: #eee; /* Light gray line color */
            margin: 10px 0; /* Adjust margin around the line */
        }

        /* Responsive adjustments (example) */
        @media (max-width: 768px) {
            .footer-links-bottom {
                flex-direction: column; /* Stack links vertically */
                align-items: flex-start; /* Align to the left */
                gap: 10px; /* Reduce gap between stacked links */
            }
        }
    </style>
</head>
<body>
        <nav style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
            <div style="flex: 1;">
                <!-- <a href="#">smart</a> -->
                <img src="images/logo.png" alt="Image 1" class="features__logo">  
            </div>
            <ul style="list-style: none; display: flex; margin: 0; padding: 0; justify-content: center; flex: 2;">
                <li style="margin-right: 20px;"><a href="#">PERSONAL</a></li>
                <li style="margin-right: 20px;"><a href="#">BUSINESS</a></li>
                <li style="margin-right: 20px;"><a href="#">PARTNERS AND DEVELOPERS</a></li>
            </ul>
            <div>
                <a href="/login" style="background: white;
                    border: 2px solid #0070ba;
                    color: #0070ba;
                    padding: 10px 20px;
                    border-radius: 25px;
                    text-decoration: none;
                    font-weight: bold;">Log in
                </a>
                <a href="/register" style="background-color: #007bff; background: blue;
                    border: 2px solid #0070ba;
                    color: white;
                    padding: 10px 20px;
                    border-radius: 25px;
                    text-decoration: none;
                    font-weight: bold;">Sign Up</a>
            </div>
        </nav>


        <section class="hero">
            <h1>MOVE YOUR MONEY<br>AROUND THE WORLD<br>WITH MOBILE WALLET<br>AND SMART-<br>TRANSACTS</h1>
            <p>Just link your M-WALLET and smart-transacts accounts and enjoy a world of <br> possibilities.</p>
            <div class="cta-buttons">
                <p>Track The Payment Transfer To Check The Status Of Your Payment.</p>
                <button class="cta-button track-button" style="background-color:#E6CE9C; border-radius: 999px;"><a href="track">Track Payment</a></button>

                <p>Accept The Payment To Receive The Funds Instantly.</p>
                <button class="cta-button accept-button" style="background-color:#007BFF; border-radius: 999px;">Accept Payment</button>

                <p>Cancel The Payment To Decline The Funds, And The Sender Will Be Refunded <br>Immediately.</p>
                <button class="cta-button cancel-button" style="background-color:#DC3545; border-radius: 999px;">Cancel The Transfer</button>
            </div>
        </section>

        <section class="features">
                <h2 class="features__headline">smart-transacts is for everyone who uses different cryptocurrency platforms.</h2>
                <div class="features__content">
                    <div class="features__column">
                        <div class="features__item">
                            <img src="images/paxfulimg.png" alt="Image 1" class="features__image">
                            <p class="features__subheadline">Paxful</p>
                            <p class="features__description">Find out why we have more than 1M active accounts linked with smart-transacts.</p>
                            <button style="background-color:#E6CE9C;" class="features__button"><a href="/login">Link Account</a></button>
                            </div>
                    </div>
                    <div class="features__column">
                        <div class="features__item">
                        <img src="images/noones.png" alt="Image 2" class="features__image">
                        <p class="features__subheadline">Noones</p>
                            <p class="features__description">Find out why we have more than 1M active accounts linked with smart-transacts.</p>
                            <button style="background-color:#007BFF;" class="features__button"><a href="/login">Link Account</a></button>
                        </div>
                    </div>
                    <div class="features__column">
                        <div class="features__item">
                        <img src="images/bybit.png" alt="Image 3" class="features__image">
                        <p class="features__subheadline">Bybit</p>
                            <p class="features__description">Find out why we have more than 100K active accounts linked with smart-transacts.</p>
                            <button style="background-color:#1a1a1a;" class="features__button"><a href="/login">Link Account</a></button>
                        </div>
                    </div>
                </div>
                <div class="features__content">
                    <div class="features__column">
                        <div class="features__item">
                        <img src="images/localcoinswap.png" alt="Image 4" class="features__image">
                        <p class="features__subheadline">LocalCoinsSwap</p>
                            <p class="features__description">Find out why we have more than 1M active accounts linked with smart-transacts.</p>
                            <button style="background-color:#ADD8E6;" class="features__button"><a href="/login">Link Account</a></button>
                        </div>
                    </div>
                    <div class="features__column">
                        <div class="features__item">
                        <img src="images/deriv.png" alt="Image 5" class="features__image">
                        <p class="features__subheadline">Deriv</p>
                            <p class="features__description">Find out why we have more than 1M active accounts linked with smart-transacts.</p>
                            <button style="background-color:#DC143C;" class="features__button"><a href="/login">Link Account</a></button>
                        </div>
                    </div>
                    <div class="features__column">
                        <div class="features__item">
                        <img src="images/coinbase.png" alt="Image 6" class="features__image">
                        <p class="features__subheadline">coinbase</p>
                            <p class="features__description">Find out why we have more than 1M active accounts linked with smart-transacts.</p>
                            <button style="background-color:#00008B;" class="features__button"><a href="/login">Link Account</a></button>
                        </div>
                    </div>
                </div>
                <section class="partners">
                <h2 class="features__headline">smart-transacts is for everyone who pays or gets paid.
                </h2>
                <div class="features__content">
                    <div class="features__column">
                        <div class="features__item">
                        <div class="features__icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <p class="features__subheadline">Individuals</p>
                        <p class="features__description">Find out why we have more than 5M active accounts worldwide.</p>
                        <!-- Add a button below the paragraph -->
                         <br></br>
                         <button class="btn-learn" style="width:100%;">Learn More</button>
                         </div>
                    </div>
                    <div class="features__column">
                        <div class="features__item">
                            <div class="features__icon">
                                <i class="fas fa-store"></i>
                            </div>
                            <p class="features__subheadline">Businesses</p>
                            <p class="features__description" style="color:green;">Join more than 2 million businesses around the world offering smart-transacts.</p>
                            <br />
                            <button class="btn-learn" style="width:100%;">Learn More</button>
                            </div>
                    </div>
                    <div class="features__column">
                        <div class="features__item">
                            <div class="features__icon">
                            <i class="fas fa-handshake"></i>
                            </div>
                            <p class="features__subheadline">Partners and developers</p>
                            <p class="features__description">Work with PayPal to offer your customers world class payment solutions.</p>
                            <button class="btn-learn" style="width:100%;">Learn More</button>
                            </div>
                    </div>
                </div>
                </section>
        </section>

        <section class="payment">
                <div class="box bank-account">
                    <h2>Withdraw money directly to Bank Account</h2>
                    <p>You can now withdraw your smart-transacts balance to your Bank account seamlessly by accessing Bank Online and Mobile Apps. 
                    What's more, this option is exclusive to Banks customers and funds will be withdrawn within 24 hours.</p>
                    <a href="#">Learn more here</a>
                </div>

                <div class="box m-wallet">
                    <h2>Withdraw money from smart-transacts to M-WALLET</h2>
                    <p>You can easily withdraw your money to your M-Wallet account, and use it whenever, wherever you like.</p>
                    <a href="#">Link your smart-transacts and M-Wallet accounts</a>
                </div>
        </section>

        <section class="connects">
            <h1>smart-transacts connects buyers and sellers.</h1>

            <div class="tabs">
                <div class="tab active">For buyers</div>
                <div class="tab">For sellers</div>
            </div>

            <div class="steps">
                <div class="step">
                    <div class="step-circle">1</div>
                    <div><strong>Sign up</strong> with just an email address and password.</div>
                </div>
                <div class="arrow">➔</div>
                <div class="step">
                    <div class="step-circle">2</div>
                    <div>Securely add your cards.</div>
                </div>
                <div class="arrow">➔</div>
                <div class="step">
                    <div class="step-circle">3</div>
                    <div>Use the smart-transacts button to check out with just an email address and password.</div>
                </div>
            </div>

            <a href="#" class="btn-learn">Learn More</a>
        </section>

        <section class="features-summary">
            <div class="summary-container">
                <div class="summary-title">
                    Join 5M active smart-transacts accounts worldwide.
                </div>
                <div class="summary-grid">
                    <div class="summary-item">

                        <div class="summary-content">
                            <h3 class="summary-heading">Safer and protected</h3>
                            <p class="summary-description">Shop with peace of mind. We don't share your full financial information with sellers. And smart-transacts Buyer Protection covers your eligible purchases if they don't show up or match their description.</p>
                        </div>
                    </div>
                    <div class="summary-item">
                        <div class="summary-content">
                            <h3 class="summary-heading">Across devices, worldwide</h3>
                            <p class="summary-description">With just one account, you can shop at millions of merchants around the world, and send money to friends and family almost anywhere. Use any of your devices to manage your account on the go with the smart-transacts app.</p>
                        </div>
                    </div>
                    <div class="summary-item">
                        <div class="summary-content">
                            <h3 class="summary-heading">Mostly free, always upfront</h3>
                            <p class="summary-description">It's free to open a smart-transacts account and buy something using smart-transacts unless it involves a currency conversion. There are no smart-transacts fees if you use your smart-transacts balance to send money in your own currency to friends and family. There may be fees for other transactions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="content">
            <h1>Sign up and get started.</h1>
            <a href="/register" class="cta-start">Get Started</a>
        </div>



        <footer>
            <div class="footer-container">
                <div class="footer-links-top">
                    <a href="#">Help</a>
                    <a href="#">Contact</a>
                    <a href="#">Fees</a>
                    <a href="#">Security</a>
                    <a href="#">Features</a>
                    <a href="#">Shop</a>
                </div>
                <hr>
                <div class="footer-links-bottom">
                    <div class="right-footer">
                    <a href="#">About</a>
                    <a href="#">Newsroom</a>
                    <a href="#">Jobs</a>
                    <a href="#">Developers</a>
                    <a href="#">Partners</a>
                    </div>
                    <div class="left-footer">
                    <span class="copyright">©1999-2023</span>
                    <a href="#">Accessibility</a>
                    <a href="#">Cookies</a>
                    <a href="#">Privacy</a>
                    <a href="#">Legal</a>
                    </div>
                </div>
            </div>
        </footer>

</body>
</html>