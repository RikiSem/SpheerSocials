<template>
    <input @change="$emit('changeLogin', this.login)" v-model="login" type="text" placeholder="Login" required>
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
        padding: 7px;
        width: 100%;
        margin: 5px;
        border: 1px solid #4949a7;
        border-radius: 10px;
    }
</style>
