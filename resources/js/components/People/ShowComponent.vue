<template>
 <tr :class="this.$parent.isCurrentPerson(person.id) ? 'd-none' : '' ">
        <th>{{ person.id }}</th>
        <td>{{ person.name }}</td>
        <td>{{ person.last_name }}</td>
        <td>{{ person.age }}</td>
        <td>{{ person.job }}</td>
        <td><button @click.prevent="choosePerson(person.id, person.name, person.last_name, person.age, person.job)" class="btn btn-primary">Edit</button></td>
        <td><button @click.prevent="deletePerson(person.id)" class="btn btn-danger">Delete</button></td>
    </tr>
</template>

<script>

export default {
    props: ['person'],

    methods: {
        deletePerson(id){
            axios.delete(`api/v1/people/${id}`)
                .then(this.getPeople());
        },

        choosePerson(id, name, last_name, age, job){
            this.$parent.currentPersonId = id;
            const editName = `edit_${id}`;

            const fullEditName = this.$parent.$refs[editName][0];

            fullEditName.name = name,
            fullEditName.last_name = last_name,
            fullEditName.age = age,
            fullEditName.job = job
        },
    }
}
</script>