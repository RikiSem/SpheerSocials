<template>
    <div class="container">
        <div class="content">
            <div>
                <slot name="navbar"></slot>
            </div>
            <div>
                <slot name="content"></slot>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "MainTemplate",
}
</script>

<style scoped>
.content{
    width: 100%;
    height: 100%;
    display: flex;
}
.container{
    padding: 0;
}
</style>
