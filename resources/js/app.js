import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import App from './Components/App.vue';

const app = createApp(App);
    
app.mount('#app');