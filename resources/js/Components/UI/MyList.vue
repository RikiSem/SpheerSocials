<template>
    <div class="list">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "MyList"
}
</script>

<style scoped>
.list{
    width: 100%;
    overflow-y: scroll;
}
.list::-webkit-scrollbar{
    display: none;
}
</style>
