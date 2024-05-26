<template>
    <input @change="$emit('changePass', this.pass)" v-model="pass" type="password" placeholder="Пароль" required>
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
        padding: 7px;
        width: 100%;
        margin: 5px;
        border: 1px solid #4949a7;
        border-radius: 10px;
    }
</style>
