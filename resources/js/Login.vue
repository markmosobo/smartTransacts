<template>
    <div class="container">
        <div class="login-section">
            <div class="logo">
                <img src="paxful.png" alt="Paxful Logo" /> paxful
            </div>
            <div class="welcome-text">Welcome back!</div>
            <div class="signup-link">Don't have an account? <a href="#">Sign up</a></div>
            <div class="input-group">
                <label for="email">Email/Phone Number</label>
                <input type="text" id="email" placeholder="Email/Phone Number" />
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Password" />
            </div>
            <div class="forgot-password"><a href="#">Forgot password?</a></div>
            <button>Sign in</button>
        </div>
        <div class="illustration-section">
            <div class="illustration">
                <img src="svg.png" alt="Illustration" />
            </div>
        </div>
    </div>
</template>

<style>
    body {
        font-family: 'Inter', sans-serif;
        margin: 0;
        background-color: #000;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: stretch; /* Ensure it fills the full height */
        height: 100vh; /* Full viewport height */
        font-weight: 400;
        line-height: 1.5;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        height: 100vh; /* Full viewport height */
        align-items: stretch;
        justify-content: space-between;
        padding: 0;
    }

    .illustration-section {
        display: flex;
        width: 50%;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .illustration img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .login-section {
        width: 50%;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
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
        border-radius: 10px;
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

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            height: auto;
        }

        .login-section, .illustration-section {
            width: 100%;
            height: auto;
            padding: 20px;
        }
    }
</style>



  
 