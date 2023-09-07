<template>
    <Modal header="Add new person" buttonName="Add person">
        <div class="form-group mb-2">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" v-model="name">
        </div>
        <div class="form-group mb-2">
            <label for="last_name">Last name</label>
            <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" v-model="last_name">
        </div>
        <div class="form-group mb-2">
            <label for="email">Age</label>
            <input type="number" class="form-control" id="age" placeholder="Enter age" v-model="age">
        </div>
        <div class="form-group mb-2">
            <label for="job">Job</label>
            <input type="text" class="form-control" id="job" placeholder="Enter job" v-model="job">
        </div>
        <button @click.prevent="addPerson" type="submit" class="btn btn-primary">
            Save
        </button>
    </Modal>
</template>

<script>
import axios from 'axios';
import Modal from '../Modal.vue';

export default {
    components: {
        Modal
    },

    data(){
        return{
            name: null,
            last_name: null,
            age: null,
            job: null,
        };
    },

    mounted(){
        this.$parent.getPeople()
    },

    methods: {
        addPerson(){
            axios.post('/api/v1/people', {
                name: this.name,
                last_name: this.last_name,
                age: this.age,
                job: this.job,
            }).then(this.$parent.getPeople());
        },
    }
}
</script>