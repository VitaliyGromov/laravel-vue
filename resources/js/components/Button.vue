<template>
    <button v-bind="$attrs">
        <slot></slot>
    </button>
</template>
<script>

import { defineComponent } from 'vue';

export default defineComponent({
  
});
</script>