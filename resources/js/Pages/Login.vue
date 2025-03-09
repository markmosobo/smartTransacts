<template>
    <body>
        <div class="container">
            <div class="login-section">
                <div class="logo">
                    <img :src="getPhoto() + '/paxful.png'" alt="Paxful Logo">
                    paxful
                </div>
                <div class="welcome-text">Welcome back!</div>
                <div class="signup-link">Don't have an account? <a href="/register" style="text-decoration: underline;">Sign up</a></div>
                <form @submit.prevent="submitLogin">

                    <div class="input2">
                        <label for="email">Email/Phone Number</label>
                        <input type="text" v-model="form.email" id="email" placeholder="Email/Phone Number" required>
                    </div>
                    <div class="input2">
                        <label for="password">Password</label>
                        <input :type="showPassword ? 'text' : 'password'" v-model="form.password" id="password" placeholder="Password" required>
                        <i class="fa-solid" :class="showPassword ? 'fa-eye-slash' : 'fa-eye'" @click="togglePassword"></i>
                    </div>
                    <div class="forgot-password"><a href="#" style="text-decoration: underline;">Forgot password?</a></div>
                    <button type="submit">Sign in</button>
                </form>
            </div>
            <div class="illustration-section">
                <div class="illustration">
                    <img :src="getPhoto() + '/svg.PNG'" alt="Illustration">
                </div>
            </div>
        </div>
    
    </body>
        
    </template>
          
    <script>
    import axios from "axios";
    
    export default {
    data() {
        return {
          form: {
            email: "",
            password: ""
          },
          showPassword: false,
        };
    },
    methods: {
        getPhoto()
        {
            return "/storage/images/";
        },
        togglePassword() {
          this.showPassword = !this.showPassword;
        },
        async submitLogin() {
          this.errorMessage = "";
    
          try {
            const response = await axios.post("/api/login", this.form);
            
            if (response.data.status == 'success') {
                this.$router.push({ path: '/mfa', query: { email: this.form.email } });
            } else {
              this.errorMessage = response.data.message || "Invalid credentials.";
            }
          } catch (error) {
            this.errorMessage = "Login failed. Please check your credentials.";
          }
    
          this.loading = false;
        }
    },
    mounted()
    {
        // const togglePassword = document.getElementById('togglePassword');
        // const passwordInput = document.getElementById('password');
    
        // togglePassword.addEventListener('click', function () {
        // const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        // passwordInput.setAttribute('type', type);
        // this.querySelector('i').classList.toggle('fa-eye');
        // this.querySelector('i').classList.toggle('fa-eye-slash');
        // });
    }
    };
    </script>
    
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
    
            .input-group, .input2 {
                margin-bottom: 20px;
                position: relative;
            }
    
            label {
                font-size: 14px;
                font-weight: 500;
                margin-bottom: 6px;
                display: block;
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
    
            .fa-eye, .fa-eye-slash {
                position: absolute;
                right: 15px;
                top: 45px;
                cursor: pointer;
                color: #ccc;
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
    
            /* Mobile-specific styles */
            @media (max-width: 767px) {
                .container {
                    padding: 0 20px; /* Adds equal space on both left and right sides */
                }
    
                .login-section {
                    width: 100%; /* Ensures the login section takes full width on mobile */
                }
    
                .logo {
                    margin-top: 20px; /* Adds space at the top */
                }
    
                .welcome-text {
                    margin-top: 40px; /* Adds space at the top */
                }
    
                .input-group, .input2 {
                    margin-bottom: 15px; /* Reduces space between input fields */
                }
    
                button {
                    margin-top: 20px; /* Adds space above the button */
                }
    
                .forgot-password {
                    text-align: right; /* Centers the forgot password link */
                }
            }
        </style>