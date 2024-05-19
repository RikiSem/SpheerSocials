<template>
    <form @submit.prevent>
        <h1 class="dialogHeader">Вход</h1>
        <my-input-login @changeLogin="setLogin"></my-input-login>
        <my-input-pass @changePass="setPass"></my-input-pass>
        <MyButton @click="auth">Войти</MyButton>
    </form>
</template>

<script>

export default {
    name: "LoginForm",
    data() {
        return {
            loginAuth: {
                login: '',
                pass: '',
            }
        }
    },
    methods:{
        setLogin(login){
            this.loginAuth.login = login;
        },
        setPass(pass){
            this.loginAuth.pass = pass;
        },
        async auth(){
            const response = await axios.post('/api/login', this.loginAuth);
            console.log(response)
        }
    }
}
</script>

<style scoped>
* {
    display: flex;
    flex-direction: column;
    align-items: center;
}
h1{
    text-align: center
}
</style>
