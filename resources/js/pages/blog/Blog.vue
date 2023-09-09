<template>
    <h1>Blog page</h1>
    <div class="w-25">
        <input v-model="title" type="text" class="form-control mb-2" id="title">
        <textarea v-model="body" class="form-control mb-2" id="body"></textarea>
        <div class="form-inline">
            <div ref="dropzone" class="btn btn-success">
                Import file
            </div>
            <button @click.prevent="store" class="btn btn-primary ms-2">
                Save
            </button>
        </div>
    </div>
</template>

<script>
import Dropzone from "dropzone";
import axios from 'axios';

export default {
    data(){
        return {
            dropzone: null,
            title: '',
            body: ''
        }
    }, 

    mounted(){
        this.dropzone = new Dropzone(this.$refs.dropzone, {
            url: '/api/v1/posts',
            autoProcessQueue: false
        })
    },

    methods: {
        store(){
            const data = new FormData();
            const images = this.dropzone.getAcceptedFiles();

            images.forEach(image => {
                data.append('images[]', image);
                this.dropzone.removeFile(image);
            });

            data.append('title', this.title);
            data.append('body', this.body);
            
            axios.post('/api/v1/posts', data);
        }
    }
}
</script>