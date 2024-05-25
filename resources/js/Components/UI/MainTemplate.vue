<template>
    <div class="container">
        <div class="content">
            <div class="nav">
                <slot name="navbar"></slot>
            </div>
            <div class="contentBody" >
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
.contentBody{
    margin-left: 5rem;
    margin-top: 5%;
}
.container{
    padding: 0;
}
</style>
