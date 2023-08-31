<template>
    <input v-bind="$attrs">
</template>

<script>

import { defineComponent } from 'vue';

export default defineComponent({
    props: ['label'],

});

</script>