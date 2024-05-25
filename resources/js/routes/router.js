import {createRouter, createWebHistory} from "vue-router";
import AuthPage from "../pages/AuthPage.vue";
import MainPage from "../pages/MainPage.vue";
import UserSocialsPage from "../pages/UserSocialsPage.vue";


const routes = [
    {
        path: '/',
        component: AuthPage
    },
    {
        path: '/user/settings',
        component: MainPage
    },
    {
        path: '/test',
        component: MainPage
    },
    {
        path: '/user/socials',
        component: UserSocialsPage
    }
]

const router = createRouter({
    routes,
    history: createWebHistory()
});

export default router;
