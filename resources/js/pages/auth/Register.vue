<template>
        <div class="form-group mb-2">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" v-model="name">
        </div>
        <div class="form-group mb-2">
            <label for="last_name">Last name</label>
            <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" v-model="last_name">
        </div>
        <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" v-model="email">
        </div>
        <div class="form-group mb-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" v-model="password">
        </div>
        <button @click.prevent="register" type="submit" class="btn btn-primary">
            Register
        </button>
</template>

<script>
import { defineComponent } from 'vue';
import axios from 'axios';

export default defineComponent({
    
    data() {
        return {
            name: null,
            last_name: null,
            email: null,
            password: null,
        }
    },

    methods: {
        register(){
            axios.get('sanctum/csrf-token').then(res => {
                axios.post('/api/v1/register', {
                    name: this.name,
                    last_name: this.last_name,
                    email: this.email,
                    password: this.password
                }).then(res => {
                    localStorage.setItem('x_xsrf_token', res.config.headers['X-XSRF-TOKEN']);

                    this.name = '',
                    this.last_name = '',
                    this.email = '',
                    this.password = ''

                });
            });
        }
    }
});
</script> 