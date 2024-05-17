<template>
    <h1>{{ val }}</h1><br>
    <input type="text" v-bind:value="val" @input="val = $event.target.value">
</template>

<script>
    export default {
        data() {
            return {
                val: ''
            }
        }
    }
</script>

<style scoped>

</style>