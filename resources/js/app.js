import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import HelloVue from './Components/HelloVue.vue';

const app = createApp(HelloVue);
    
app.mount('#app');