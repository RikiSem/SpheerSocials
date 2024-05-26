import {createRouter, createWebHistory} from "vue-router";
import AuthPage from "../pages/AuthPage.vue";
import MainPage from "../pages/MainPage.vue";
import UserSocialsPage from "../pages/UserSocialsPage.vue";
import SocialPage from "../pages/SocialPage.vue";


const routes = [
    {
        path: '/',
        component: AuthPage
    },
    {
        path: '/user/:userId/settings',
        name: 'homePage',
        component: MainPage
    },
    {
        path: '/user/:userId/socials',
        component: UserSocialsPage
    },
    {
        path: '/social/:id',
        component: SocialPage
    }
]

const router = createRouter({
    routes,
    history: createWebHistory()
});

export default router;
