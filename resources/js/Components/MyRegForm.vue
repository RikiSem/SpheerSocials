<template>
    <form @submit.prevent>
        <h1 class="dialogHeader">Регистрация</h1>
        <my-input-login @changeLogin="setLogin"></my-input-login>
        <my-input-mail @changeEmail="setMail"></my-input-mail>
        <my-input-pass @changePass="setPass"></my-input-pass>
        <MyButton>Регистрация</MyButton>
    </form>
</template>

<script>
export default {
    name: "MyRegForm",
    data() {
        return {
            loginAuth: {
                login: '',
                mail: '',
                pass: '',
            }
        }
    },
    methods: {
        setLogin(login) {
            this.loginAuth.login = login;
        },
        setPass(pass) {
            this.loginAuth.pass = pass;
        },
        setMail(mail) {
            this.loginAuth.mail = mail;
        }
    },
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
