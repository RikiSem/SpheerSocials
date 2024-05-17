import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import App from './App.vue';
import components from './index.js';


const app = createApp(App);
components.forEach(component => {
    app.component(component.name, component)
})

app.mount('#app');
