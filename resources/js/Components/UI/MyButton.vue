<template>
    <button class="btn"><slot></slot></button>
</template>

<script>
export default {
    name: "MyButton"
}
</script>

<style scoped>
    .btn{
        padding: 15px;
        border: 1px solid #4949a7;
        background-color: white;
        margin: 5px;
    }
</style>
