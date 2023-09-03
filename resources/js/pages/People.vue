<template>
    <table class="table">
        <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">name</th>
              <th scope="col">lastname</th>
              <th scope="col">age</th>
              <th scope="col">job</th>
              <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <template v-for="person in people">
                <tr :class="isCurrentPerson(person.id) ? 'd-none' : '' ">
                    <th>{{ person.id }}</th>
                    <td>{{ person.name }}</td>
                    <td>{{ person.last_name }}</td>
                    <td>{{ person.age }}</td>
                    <td>{{ person.job }}</td>
                    <td><button @click.prevent="choosePerson(person.id, person.name, person.last_name, person.age, person.job)" class="btn btn-primary">Edit</button></td>
                </tr>
                <tr :class="isCurrentPerson(person.id) ? '' : 'd-none'">
                    <th>{{ person.id }}</th>
                    <th><input type="text" class="form-control" v-model="name"></th>
                    <th><input type="text" class="form-control" v-model="last_name"></th>
                    <th><input type="number" class="form-control" v-model="age"></th>
                    <th><input type="text" class="form-control" v-model="job"></th>
                    <th><button @click.prevent="updatePerson(person.id)" class="btn btn-success">Update</button></th>
                    <td><button @click.prevent="unsetCurrentPerson" class="btn btn-danger">Cancel</button></td>
                </tr>
            </template>
        </tbody>
    </table>
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
import Modal from '../components/Modal.vue';


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

            people: null,

            currentPersonId: null,
        };
    },

    mounted(){
        this.getPeople()
    },

    methods: {
        addPerson(){
            axios.post('/api/v1/people', {
                name: this.name,
                last_name: this.last_name,
                age: this.age,
                job: this.job,
            }).then(this.getPeople());
        },

        getPeople(){
            axios.get('api/v1/people')
                .then(res => {
                    this.people = res.data.data
                });
        },

        choosePerson(id, name, last_name, age, job){
            this.currentPersonId = id;
            this.name = name,
            this.last_name = last_name,
            this.age = age,
            this.job = job
        },

        unsetCurrentPerson(){
            this.currentPersonId = null
        },

        isCurrentPerson(id){
            return this.currentPersonId === id;
        },
        
        updatePerson(id){
            this.currentPersonId = null;

            axios.put(`api/v1/people/${id}`, {
                name: this.name,
                last_name: this.last_name,
                age: this.age,
                job: this.job

            }).then(this.getPeople());
        }
    }
}
</script>