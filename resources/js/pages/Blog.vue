<template>
    <table class="table">
        <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">title</th>
              <th scope="col">body</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="post in posts">
                <th>{{ post.id }}</th>
                <td>{{ post.title }}</td>
                <td>{{ post.body }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
import axios from 'axios';


export default {
    data(){
        return {
            posts: null
        }
    },

    mounted() {
        this.getPosts()
    },

    methods: {
        getPosts(){
            axios.get('http://127.0.0.1:8000/api/v1/posts')
                .then(res => {
                    this.posts = res.data;
                })
                .catch(error => {
                console.log(error);
                })
        }
    } // TODO эти посты надо заести в состояние, чтобы каждый раз не дергать API
}
</script>

