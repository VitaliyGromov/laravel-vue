<template>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="m-2">
                <router-link class="navbar-brand" to="/">Home</router-link>
                <router-link class="navbar-brand" to="/about">About</router-link>
                <router-link class="navbar-brand" to="/blog">Blog</router-link>
            </div>
            <div class="m-2">
                <router-link class="navbar-brand" to="/login">Login</router-link>
                <router-link class="navbar-brand" to="/register">Register</router-link>
            </div>
        </div>
    </nav>
</template>

<script>
import { defineComponent } from 'vue';

export default defineComponent({

});

</script>
