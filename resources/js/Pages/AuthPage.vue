<template>
    <div class="container">
        <my-header></my-header>
        <div class="content row">
            <my-dialog class="formLogin" v-model:show="dialogLoginVisible">
                <login-form></login-form>
            </my-dialog>
            <my-dialog class="formReg" v-model:show="dialogRegVisible">
                <my-reg-form></my-reg-form>
            </my-dialog>
            <div class="auth_btns">
                <my-button @click="dialogLoginVisible = true">Вход</my-button>
                <my-button @click="dialogRegVisible = true">Регистрация</my-button>
            </div>
        </div>
        <my-footer></my-footer>
    </div>
</template>

<script>
export default {
    name: "AuthPage",
    data() {
        return {
            dialogLoginVisible: false,
            dialogRegVisible: false
        }
    }
}
</script>

<style scoped>
.content{
    display: flex;
    margin: auto;
    height: 100%;
}
.auth_btns {
    display: flex;
    margin: auto;
}
</style>
