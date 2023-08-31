<template>
    <Form>
        <div class="form-group mb-2">
            <label for="email">Email</label>
            <InputComponent type="email" class="form-control" id="email" placeholder="Enter email"/>
        </div>
        <div class="form-group mb-2">
            <label for="password">Password</label>
            <InputComponent type="password" class="form-control" id="password" placeholder="Password"/>
        </div>
        <div class="form-group form-check mb-2">
            <InputComponent type="checkbox" class="form-check-input" id="remember-me"/>
            <label class="form-check-label" for="remember-me">Remember me</label>
        </div>
        <Button type="submit" class="btn btn-primary">
            Login
        </Button>
    </Form>
</template>

<script>
import { defineComponent } from 'vue';
import Form from '../../components/Form.vue';
import InputComponent from '../../components/InputComponent.vue';
import Button from '../../components/Button.vue';

export default defineComponent({
    components: {
        Form, InputComponent, Button
    },
});
</script> 