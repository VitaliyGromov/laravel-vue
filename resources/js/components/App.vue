<template>
    <PrimaryHeader/>
    <div class="py-4">
        <div class="container">
            <router-view/>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import PrimaryHeader from './PrimaryHeader.vue';

export default defineComponent({

    components: {
        PrimaryHeader,
    },

    setup(){
        return {
            name: "Vitaliy"
        }
    }
});
</script>
