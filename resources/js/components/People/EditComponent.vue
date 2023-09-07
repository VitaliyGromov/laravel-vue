<template>
    <tr :class="this.$parent.isCurrentPerson(person.id) ? '' : 'd-none'">
        <th>{{ person.id }}</th>
        <th><input type="text" class="form-control" v-model="name"></th>
        <th><input type="text" class="form-control" v-model="last_name"></th>
        <th><input type="number" class="form-control" v-model="age"></th>
        <th><input type="text" class="form-control" v-model="job"></th>
        <th><button @click.prevent="updatePerson(person.id)" class="btn btn-success">Update</button></th>
        <td><button @click.prevent="unsetCurrentPerson" class="btn btn-danger">Cancel</button></td>
    </tr>
</template>

<script>
export default {

    props: ['person'],

    data(){
        return{
            name: null,
            last_name: null,
            age: null,
            job: null,
        }
    },

    methods: {
        unsetCurrentPerson(){
            this.$parent.currentPersonId = null
        },

        updatePerson(id){
            this.$parent.currentPersonId = null;

            axios.put(`api/v1/people/${id}`, {
                name: this.name,
                last_name: this.last_name,
                age: this.age,
                job: this.job

            }).then(this.$parent.getPeople());
        },
    }
}
</script>