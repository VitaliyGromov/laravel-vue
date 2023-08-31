<template>
    <Form>
        <div class="form-group mb-2">
            <LabelComponent for="email">Email</LabelComponent>
            <InputComponent type="email" class="form-control" id="email" placeholder="Enter email"/>
        </div>
        <div class="form-group mb-2">
            <LabelComponent for="password">Password</LabelComponent>
            <InputComponent type="password" class="form-control" id="password" placeholder="Password"/>
        </div>
        <div class="form-group mb-2">
            <LabelComponent for="confirm-password">Confirm password</LabelComponent>
            <InputComponent type="password" class="form-control" id="confirm-password" placeholder="Password one more time"/>
        </div>
        <Button type="submit" class="btn btn-primary">
            Register
        </Button>
    </Form>
</template>

<script>
import { defineComponent } from 'vue';
import Form from '../../components/Form.vue';
import InputComponent from '../../components/InputComponent.vue';
import Button from '../../components/Button.vue';
import LabelComponent from '../../components/LabelComponent.vue';

export default defineComponent({
    components: {
        Form, InputComponent, Button, LabelComponent
    },
});
</script> 