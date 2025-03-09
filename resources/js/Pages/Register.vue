<template>
    <div class="container">
      <div class="login-section">
        <div class="logo">
          <img :src="getPhoto() + '/paxful.png'" alt="Paxful Logo" />
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
        <div class="signup-link">Already have an account? <a href="/login">Sign in</a></div>
        <form @submit.prevent="submitRegister">
          <div class="input2">
              <label for="email">Email/Phone Number</label>
              <input type="text" v-model="form.email" id="email" placeholder="Email/Phone Number" required>
          </div>
          <button type="submit">Next</button>
        </form>
      </div>
      <div class="illustration-section">
        <div class="illustration">
          <img :src="getPhoto() + '/registersvg.PNG'" alt="Illustration" />
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
        return {
          form: {
            email: "",
          },
        };
    },
    methods: {
      getPhoto() {
        return "/storage/images/";
      },
      async submitRegister() {
          this.errorMessage = "";
    
          try {
            const response = await axios.post("/api/register", this.form);
            console.log(response)
            if (response.data.status == 'success') {
              this.$router.push('/login')
            } else {
              this.errorMessage = response.data.message || "Invalid credentials.";
            }
          } catch (error) {
            this.errorMessage = "Login failed. Please check your credentials.";
          }
    
          this.loading = false;
        }
    },
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
  
  .step.active {
    background-color: white;
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
  
  .input-group {
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
  }

  .input2 {
      margin-bottom: 20px;
      position: relative;
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
  