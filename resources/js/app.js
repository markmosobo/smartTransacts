// resources/js/app.js
import './bootstrap';
import { createApp } from 'vue';
import router from './router'; // Import the router

import App from './App.vue'; // Create a main App component

// Mount the app with the router
createApp(App).use(router).mount('#app');
          
