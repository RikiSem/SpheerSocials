<template>
    <input @change="$emit('changeLogin', this.login)" v-model="login" type="text" placeholder="Login" >
</template>

<script>
export default {
    name: "MyInputLogin",
    data(){
        return {
            login: ''
        }
    }

}
</script>

<style scoped>
    *{
        padding: 5px;
        width: 100%;
        margin: 5px;
    }
</style>
