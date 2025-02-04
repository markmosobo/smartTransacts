<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paxful Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Align items at the top */
            height: auto; /* Adjust height to auto */
            font-weight: 400;
            line-height: 1.5;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            width: 100%; /* Full width */
            max-width: 1200px;
            align-items: flex-start; /* Align items at the top */
            justify-content: center;
            padding: 0; /* Remove any padding */
        }

        .back-button {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .progress-bar {
            display: flex;
            align-items: center;
            margin-top: 10px;
            gap: 10px;
        }

        .step {
            width: 50px;
            height: 4px;
            background-color: gray;
            border-radius: 2px;
        }

        .step active {
            background-color: white;
        }


        .illustration-section {
            display: flex;
            width: 50%;
            align-items: center;
            justify-content: center;
            height: 100%; /* Ensure it takes full height */
        }

        .illustration-section {
            display: none;
        }

        .illustration img {
            width: 100%; /* Make image fill the container */
            height: 100%; /* Make image fill the container */
            object-fit: cover; /* Ensure the image covers the whole section */
        }

        .logo {
            font-size: 30px;
            font-weight: 600;
            padding-top: 5px;
            margin: 0 0 20px 0; /* Removed the left margin */
        }

        .logo img {
            height: 24px;
        }

        .welcome-text {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 10px;
            margin-top: 80px;
        }

        .signup-link {
            margin-bottom: 20px;
            font-size: 14px;
        }

        .signup-link a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .input-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        .input2 {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 14px;
            background-color: #1F1F1F;
            color: #fff;
            border: none;
            border-radius: 10px; /* Rounded pill shape */
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 14px;
            background-color: #A8E239;
            color: #000;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            margin-top: 10px;
        }

        .forgot-password {
            margin-top: 5px;
            text-align: right;
            font-size: 14px;
        }

        .forgot-password a {
            color: #ECECEC;
            text-decoration: none;
        }

        @media (min-width: 768px) {
            .container {
                flex-direction: row;
                justify-content: space-between;
            }

            .login-section {
                width: 40%;
                text-align: left;
            }

            .illustration-section {
                display: flex;
                width: 50%;
                align-items: center;
                justify-content: center;
            }

            .illustration img {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-section">
            <div class="logo">
                <img src="images/paxful.png" alt="Paxful Logo">
                paxful
            </div>
            <div class="back-button">&lt; <a style="color:white;" href="/">Back</a></div>
            <div class="progress-bar">
                <div class="step active"></div>
                <div class="step"></div>
                <div class="step"></div>
                <div class="step"></div>
                <div class="step"></div>
            </div>
            <div class="welcome-text">Create an account</div>
            <div class="signup-link">Already have an account? <a href="/">Sign in</a></div>
            <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" id="email" name="email" placeholder="Enter your email here" required>
            </div>
            <button type="submit">Next</button>
            </form>
        </div>
        <div class="illustration-section">
            <div class="illustration">
                <img src="images/registersvg.png" alt="Illustration">
            </div>
        </div>
    </div>

</body>
</html>
