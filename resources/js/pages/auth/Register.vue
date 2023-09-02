<template>
    <Form>
        <div class="form-group mb-2">
            <LabelComponent for="name">Name</LabelComponent>
            <InputComponent type="text" class="form-control" id="name" placeholder="Enter your name" name="name" v-model="form.name"/>
        </div>
        <div class="form-group mb-2">
            <LabelComponent for="last_name">Last name</LabelComponent>
            <InputComponent type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_name" v-model="form.last_name"/>
        </div>
        <div class="form-group mb-2">
            <LabelComponent for="email">Email</LabelComponent>
            <InputComponent type="email" class="form-control" id="email" placeholder="Enter email" name="email" v-model="form.email"/>
        </div>
        <div class="form-group mb-2">
            <LabelComponent for="password">Password</LabelComponent>
            <InputComponent type="password" class="form-control" id="password" placeholder="Password" name="password" v-model="form.password"/>
        </div>
        <Button type="submit" class="btn btn-primary">
            {{ processing ? "Please, wait" : "Register" }}
        </Button>
    </Form>
</template>

<script>
import { defineComponent } from 'vue';
import Form from '../../components/Form.vue';
import InputComponent from '../../components/InputComponent.vue';
import Button from '../../components/Button.vue';
import LabelComponent from '../../components/LabelComponent.vue';
import axios from 'axios';

export default defineComponent({
    components: {
        Form, InputComponent, Button, LabelComponent
    },

    data() {
        return {
            form: {
                name: '',
                last_name: '',
                email: '',
                password: '',
            },

            processing: false
        }
    },
});
</script> 