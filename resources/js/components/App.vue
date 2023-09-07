<template>
    <PrimaryHeader/>
    <div class="py-4">
        <div class="container">
            <router-view/>
        </div>
    </div>
</template>

<script>

import { defineComponent } from 'vue';
import PrimaryHeader from './PrimaryHeader.vue';
import axios from 'axios';

export default defineComponent({

    components: {
        PrimaryHeader,
    },

    data(){
        return {
            token: null
        }
    },

    mounted(){
        this.getToken();
    },

    updated(){
        this.getToken();
    },

    methods: {
        logout(){
            axios.post('api/v1/logout').then(() => {

                if(localStorage.getItem('x_xsrf_token')){
                    localStorage.removeItem('x_xsrf_token');
                }
            
                this.$router.push('/login');
            });
        },

        getToken(){
            this.token = localStorage.getItem('x_xsrf_token');
        }
    }
});

</script>
