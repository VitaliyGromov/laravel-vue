import './bootstrap';
import { createPinia } from 'pinia'
import { createApp } from 'vue';
import router from './router/router';

import App from './components/App.vue';

const pinia = createPinia();

createApp(App)
    .use(router)
    .use(pinia)
    .mount('#app');