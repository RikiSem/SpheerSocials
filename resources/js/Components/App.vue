<template>
    <h1>{{ val }}</h1><br>
    <button @click="getTest">aasdasd</button>
</template>

<script>
import axios from 'axios';
    export default {
        data() {
            return {
                val: '--',
            }
        },
        methods: {
            async getTest() {
                try {
                    this.val = (await axios.get('/api/test')).data;
                } catch (e) {
                    alert('Error');
                }
            }
        }
    }
</script>

<style scoped>

</style>