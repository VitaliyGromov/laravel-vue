import Home from '../pages/Home.vue';
import Blog from '../pages/Blog.vue';
import About from '../pages/About.vue';
import Login from '../pages/auth/Login.vue';
import Register from '../pages/auth/Register.vue';

const routes = [
    {
        path: '/',
        component: Home
    }, 
    {
        path: '/blog',
        component: Blog
    },
    {
        path: '/about',
        component: About
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/register',
        component: Register
    }
];

export default routes;