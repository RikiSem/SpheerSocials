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
        padding: 7px 15px 7px 15px;
        border: 1px solid #4949a7;
        border-radius: 10px;
        background-color: white;
        margin: 5px;
        word-wrap: break-word;
        transition: 0.25s;
    }
    .btn:hover{
        background-color: #4949a7;
        color: white;
    }
</style>
