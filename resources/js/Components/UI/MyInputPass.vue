<template>
    <input @change="$emit('changePass', this.pass)" v-model="pass" type="password" placeholder="Password" >
</template>

<script>
export default {
    name: "MyInputPass",
    data(){
        return {
            pass: ''
        }
    }
}
</script>

<style scoped>
* {
    padding: 5px;
    width: 100%;
    margin: 5px;
}
</style>
