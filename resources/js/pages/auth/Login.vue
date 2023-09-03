<template>
        <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" v-model="email">
        </div>
        <div class="form-group mb-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" v-model="password">
        </div>
        <button type="submit" class="btn btn-primary">
            Login
        </button>
</template>

<script>
import axios from 'axios';
import { defineComponent } from 'vue';


export default defineComponent({
    data(){
        return {
            email: null,
            password: null,
        }
    },

    methods: {
        login(){
            axios.post('/api/v1/login', {
                email: this.email,
                password: this.password,
            }).then(
                this.email = null,
                this.password = null,
            )
        }
    }
});
</script> 