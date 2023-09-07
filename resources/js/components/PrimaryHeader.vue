<template>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="m-2">
                <router-link v-if="this.$parent.token" class="navbar-brand" to="/blog">Blog</router-link>
            </div>
            <div class="m-2">
                <router-link v-if="!this.$parent.token" class="navbar-brand" to="/login">Login</router-link>
                <router-link v-if="!this.$parent.token" class="navbar-brand" to="/register">Register</router-link>
            </div>
            <div class="m-2">
                <Dropdown name="Profile">
                    <a class="m-2 nav-link" href="#">My Posts</a>
                    <a class="m-2 nav-link" href="#">Profile settings</a>
                    <a v-if="this.$parent.token" class="m-2 nav-link" href="#" @click="this.$parent.logout">Logout</a>
                </Dropdown>
            </div>
        </div>
    </nav>
</template>

<script>
import Dropdown from '../components/Dropdown.vue';

export default {
    components: {
        Dropdown
    }
}
</script>
