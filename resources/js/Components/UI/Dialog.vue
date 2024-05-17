<template>
    <div class="mainDialog">
        <div class="dialog">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    name: "Dialog",
    props:{
        show:{
            type: Boolean,
            default: false,
        }
    }
}
</script>

<style scoped>
    .mainDialog{
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.5);
        position: fixed;
        display: flex;
    }
    .dialog{
        margin: auto;
        background: white;
    }
</style>
