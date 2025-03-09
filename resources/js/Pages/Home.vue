<template>
    <div>
      <!-- Navbar -->
      <nav class="navbar">
        <div class="logo">
          <img :src="getPhoto() + 'logo.png'" alt="Paxful Logo">
        </div>
        <ul class="nav-links" :class="{ show: isMenuOpen }" id="navMenu">
          <li><a href="#">PERSONAL</a></li>
          <li><a href="#">BUSINESS</a></li>
          <li><a href="#">PARTNERS AND DEVELOPERS</a></li>
        </ul>
        <div class="nav-buttons">
          <a href="/login" class="login-btn">Log in</a>
          <a href="/register" class="signup-btn">Sign Up</a>
        </div>
        <div class="hamburger" @click="toggleMenu">
          <i class="fa-solid fa-bars"></i>
        </div>
      </nav>
  
      <!-- Hero Section -->
      <section class="hero">
        <h1>MOVE YOUR MONEY<br>AROUND THE WORLD<br>WITH MOBILE WALLET<br>AND SMART-TRANSACTS</h1>
        <p>Just link your M-WALLET and smart-transacts accounts and enjoy a world of possibilities.</p>
        <div class="cta-buttons">
          <p>Track The Payment Transfer To Check The Status Of Your Payment.</p>
          <button class="cta-button track-button">
            <a href="/login">Track Payment</a>
          </button>
          <p>Accept The Payment To Receive The Funds Instantly.</p>
          <button class="cta-button accept-button">
            <a href="/login">Accept Payment</a>
          </button>
          <p>Cancel The Payment To Decline The Funds, And The Sender Will Be Refunded Immediately.</p>
          <button class="cta-button cancel-button">Cancel The Transfer</button>
        </div>
      </section>
  
      <!-- Features Section -->
      <section class="features">
        <h2 class="features__headline">smart-transacts is for everyone who uses different cryptocurrency platforms.</h2>
        <div class="features__content">
          <div class="features__column" v-for="(feature, index) in features" :key="index">
            <div class="features__item">
              <img :src="getPhoto() + feature.image" class="features__image">
              <p class="features__subheadline">{{ feature.title }}</p>
              <p class="features__description">{{ feature.description }}</p>
              <button :style="{ backgroundColor: feature.buttonColor }" class="features__button">
                <a href="/login">Link Account</a>
              </button>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Partners Section -->
      <section class="partners">
        <h2 class="features__headline">smart-transacts is for everyone who pays or gets paid.</h2>
        <div class="features__content">
          <div class="features__column" v-for="(partner, index) in partners" :key="index">
            <div class="features__item">
              <div class="features__icon">
                <i :class="partner.icon"></i>
              </div>
              <p class="features__subheadline">{{ partner.title }}</p>
              <p class="features__description">{{ partner.description }}</p>
              <button class="btn-learn" style="width:100%;">Learn More</button>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Payment Section -->
      <section class="payment">
        <div class="box bank-account">
          <h2>Withdraw money directly to Bank Account</h2>
          <p>You can now withdraw your smart-transacts balance to your Bank account seamlessly by accessing Bank Online and Mobile Apps. What's more, this option is exclusive to Banks customers and funds will be withdrawn within 24 hours.</p>
          <a href="#">Learn more here</a>
        </div>
        <div class="box m-wallet">
          <h2>Withdraw money from smart-transacts to M-WALLET</h2>
          <p>You can easily withdraw your money to your M-Wallet account, and use it whenever, wherever you like.</p>
          <a href="#">Link your smart-transacts and M-Wallet accounts</a>
        </div>
      </section>
  
      <!-- Connects Section -->
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

  
      <!-- Features Summary Section -->
      <section class="features-summary">
        <div class="summary-container">
          <div class="summary-title">Join 5M active smart-transacts accounts worldwide.</div>
          <div class="summary-grid">
            <div class="summary-item" v-for="(summary, index) in summaries" :key="index">
              <div class="summary-content">
                <h3 class="summary-heading">{{ summary.title }}</h3>
                <p class="summary-description">{{ summary.description }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Call to Action Section -->
      <div class="content">
        <h1>Sign up and get started.</h1>
        <a href="/register" class="cta-start">Get Started</a>
      </div>
  
      <!-- Footer -->
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
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isMenuOpen: false,
        features: [
          { image: 'paxfulimg.PNG', title: 'Paxful', description: 'Find out why we have more than 1M active accounts linked with smart-transacts.', buttonColor: '#E6CE9C' },
          { image: 'noones.PNG', title: 'Noones', description: 'Find out why we have more than 1M active accounts linked with smart-transacts.', buttonColor: '#007BFF' },
          { image: 'bybit.PNG', title: 'Bybit', description: 'Find out why we have more than 100K active accounts linked with smart-transacts.', buttonColor: '#1a1a1a' },
          { image: 'localcoinswap.PNG', title: 'LocalCoinsSwap', description: 'Find out why we have more than 1M active accounts linked with smart-transacts.', buttonColor: '#ADD8E6' },
          { image: 'deriv.PNG', title: 'Deriv', description: 'Find out why we have more than 1M active accounts linked with smart-transacts.', buttonColor: '#DC143C' },
          { image: 'coinbase.PNG', title: 'Coinbase', description: 'Find out why we have more than 1M active accounts linked with smart-transacts.', buttonColor: '#00008B' },
        ],
        partners: [
          { icon: 'fas fa-user-friends', title: 'Individuals', description: 'Find out why we have more than 5M active accounts worldwide.' },
          { icon: 'fas fa-store', title: 'Businesses', description: 'Join more than 2 million businesses around the world offering smart-transacts.' },
          { icon: 'fas fa-handshake', title: 'Partners and developers', description: 'Work with PayPal to offer your customers world class payment solutions.' },
        ],
        steps: [
          { number: 1, title: 'Sign up', description: 'with just an email address and password.' },
          { number: 2, title: 'Securely add your cards.' },
          { number: 3, title: 'Use the smart-transacts button to check out with just an email address and password.' },
        ],
        summaries: [
          { title: 'Safer and protected', description: 'Shop with peace of mind. We don\'t share your full financial information with sellers. And smart-transacts Buyer Protection covers your eligible purchases if they don\'t show up or match their description.' },
          { title: 'Across devices, worldwide', description: 'With just one account, you can shop at millions of merchants around the world, and send money to friends and family almost anywhere. Use any of your devices to manage your account on the go with the smart-transacts app.' },
          { title: 'Mostly free, always upfront', description: 'It\'s free to open a smart-transacts account and buy something using smart-transacts unless it involves a currency conversion. There are no smart-transacts fees if you use your smart-transacts balance to send money in your own currency to friends and family. There may be fees for other transactions.' },
        ],
      };
    },
    methods: {
      getPhoto() {
        return '/storage/images/';
      },
      toggleMenu() {
        this.isMenuOpen = !this.isMenuOpen;
      },
    },
  };
  </script>
  
  <style scoped>
  body {
      font-family: 'Poppins', sans-serif; /* Use Poppins font */
      margin: 0;
      background-color: #f8f9fa; /* Very light gray background */
      color: #343a40; /* Dark gray text */
  }

  /* General Navbar Styles */
  .navbar {
      display: flex;
      justify-content: space-between; /* Space between logo and nav-buttons */
      align-items: center; /* Vertically center items */
      padding: 10px 20px;
      background: #fff;
      border-bottom: 1px solid #ddd;
      position: relative; /* Needed for absolute positioning of nav-links */
  }

  .logo {
      flex: 1; /* Allow logo to take up space */
  }

  .logo img {
      height: 40px;
  }

  .nav-links {
      list-style: none;
      display: flex;
      justify-content: center; /* Center the links horizontally */
      position: absolute; /* Position absolutely within the navbar */
      left: 50%; /* Move to the center */
      transform: translateX(-50%); /* Adjust for exact centering */
      margin: 0;
      padding: 0;
  }

  .nav-links li {
      margin: 0 15px; /* Space between links */
  }

  .nav-links a {
      text-decoration: none;
      color: #0070ba;
      font-weight: bold;
      transition: color 0.3s;
  }

  .nav-links a:hover {
      color: #005bb5;
  }

  .nav-buttons {
      display: flex;
      align-items: center;
      gap: 15px;
      flex: 1; /* Allow nav-buttons to take up space */
      justify-content: flex-end; /* Align buttons to the right */
  }

  .nav-buttons a {
      text-decoration: none;
      padding: 8px 16px;
      border-radius: 25px;
      font-size: 14px;
      font-weight: bold;
      text-align: center;
      white-space: nowrap;
  }

  .login-btn {
      background: white;
      border: 2px solid #0070ba;
      color: #0070ba;
  }

  .signup-btn {
      background: blue;
      border: 2px solid #0070ba;
      color: white;
  }

  /* Mobile Navbar */
  .hamburger {
      display: none; /* Hide hamburger by default */
      font-size: 24px;
      cursor: pointer;
  }

  @media (max-width: 768px) {
      .nav-links {
          display: none; /* Hide nav-links by default on mobile */
          flex-direction: column; /* Stack links vertically */
          position: absolute; /* Position absolutely */
          top: 60px; /* Position below the navbar */
          left: 0;
          width: 100%;
          background: white;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
          text-align: center;
          padding: 10px 0;
      }

      .nav-links.show {
          display: flex; /* Show nav-links when toggled */
      }

      .nav-links li {
          margin: 10px 0; /* Space between stacked links */
      }

      .hamburger {
          display: block; /* Show hamburger on mobile */
      }
  }

  .hero {
      text-align: center;
      padding: 10px 50px; /* Adjust padding */
      background-color: grey;
  }

  .hero h1 {
      font-size: 2.5rem; /* Slightly smaller heading */
      font-weight: 500; /* Bold heading */
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
      align-items: center;
      width: 600px; /* Or a percentage like 80% */
      margin: 0 auto;
      gap: 20px; /* Space between buttons */
  }

  .cta-buttons p {
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
        background-color: white;
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
      background-color: #1976D2; /* Blue background */
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
      background-color: white;
      padding: 40px; /* Add padding around content */
  }

  /* Base styles for all screen sizes */
  .hero {
      text-align: center;
      padding: 40px 20px;
      background-color: grey;
      box-sizing: border-box; /* Ensure padding is included in width/height */
      width: 100%; /* Ensure the hero section takes full width */
      overflow: hidden; /* Prevent content from overflowing */
  }
  
  .hero h1 {
      font-size: clamp(24px, 6vw, 48px); /* Fluid font size */
      line-height: 1.3;
      margin-bottom: 20px;
      color: white;
      word-wrap: break-word; /* Ensure long words don't overflow */
  }
  
  .hero p {
      font-size: clamp(14px, 4vw, 18px); /* Fluid font size */
      line-height: 1.5;
      margin-bottom: 20px;
      color: white; /* Adjust color as needed */
      word-wrap: break-word; /* Ensure long words don't overflow */
  }
  
  .cta-buttons {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 20px;
      width: 100%; /* Ensure buttons container takes full width */
  }
  
  .cta-button {
      display: inline-block;
      padding: 12px 24px;
      border-radius: 999px;
      font-size: clamp(14px, 4vw, 16px); /* Fluid font size */
      color: white;
      text-decoration: none;
      border: none;
      cursor: pointer;
      width: 100%; /* Full width on smaller screens */
      max-width: 300px; /* Limit button width for larger screens */
      box-sizing: border-box; /* Ensure padding is included in width/height */
  }
  
  .track-button {
      background-color: #E6CE9C;
  }
  
  .accept-button {
      background-color: #007BFF;
  }
  
  .cancel-button {
      background-color: #f08080;
  }
  
  .cta-button a {
      color: white;
      text-decoration: none;
  }
  
  /* Mobile responsiveness */
  @media (max-width: 768px) {
      .hero {
          padding: 20px 10px; /* Reduce padding for smaller screens */
      }
  
      .cta-button {
          padding: 10px 20px; /* Adjust padding for mobile */
      }
  }
  
  @media (max-width: 480px) {
      .cta-button {
          padding: 8px 16px; /* Adjust padding for very small screens */
      }
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
      width: 100%; /* Ensure it takes full width for wrapping */
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