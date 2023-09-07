const routes = [
    {
        path: '/blog',
        name: 'blog',
        component: () => import('../pages/blog/Blog.vue'),
    },
    {
        path: '/login',
        name: 'login',
        component: () => import('../pages/auth/Login.vue'),
    },
    {
        path: '/register',
        name: 'register',
        component: () => import('../pages/auth/Register.vue'),
    },
];

export default routes;