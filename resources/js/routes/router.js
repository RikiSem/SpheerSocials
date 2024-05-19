import {createRouter, createWebHistory} from "vue-router";
import AuthPage from "../pages/AuthPage.vue";
import MainPage from "../pages/MainPage.vue";


const routes = [
    {
        path: '/',
        component: AuthPage
    },
    {
        path: '/test',
        component: MainPage
    }
]

const router = createRouter({
    routes,
    history: createWebHistory()
});

export default router;
