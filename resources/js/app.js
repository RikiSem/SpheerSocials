import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import App from './App.vue';
import components from './Components/UI';
import router from "./routes/router.js";


const app = createApp(App);
components.forEach(component => {
    app.component(component.name, component)
})

app
    .use(router)
    .mount('#app');
