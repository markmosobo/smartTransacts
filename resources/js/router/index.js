// resources/js/router/index.js
import { createRouter, createWebHistory } from 'vue-router';

// Import your components
import Home from '../Pages/Home.vue';
import Login from '../Pages/Login.vue'; 
import Register from '../Pages/Register.vue'; 
import Mfa from '../Pages/Mfa.vue'; 

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home,
  },
  {
    path: '/login',
    name: 'login',
    component: Login,
  },
  {
    path: '/register',
    name: 'register',
    component: Register,
  },
  {
    path: '/mfa',
    name: 'mfa',
    component: Mfa,
  },
  // Add more routes here
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;