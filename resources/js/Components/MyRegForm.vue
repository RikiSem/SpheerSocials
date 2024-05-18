<template>
    <form @submit.prevent>
        <h1 class="dialogHeader">Регистрация</h1>
        <my-input-login></my-input-login>
        <my-input-pass></my-input-pass>
        <MyButton>Зарегистрироваться</MyButton>
    </form>
</template>

<script>
export default {
    name: "MyRegForm",
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
