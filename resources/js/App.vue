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
            <div class="col-12 auth_btns">
                <my-button @click="dialogLoginVisible = true">Вход</my-button>
                <my-button @click="dialogRegVisible = true">Регистрация</my-button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            dialogLoginVisible: false,
            dialogRegVisible: false
        }
    }
}
</script>

<style scoped>
    .container {
        flex-direction: column;
        display: flex;
        width: border-box;
        height: 90vh;
        overflow-y: hidden;
    }
    .content{
        display: flex;
        margin: auto;
        height: 100%;
        overflow-y: hidden;
    }
    .auth_btns {
        margin: auto;
    }
</style>
