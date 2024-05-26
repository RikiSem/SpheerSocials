<template>
    <div class="list" v-for="item in items">
        <list-item @click="$router.push(`/social/${item.id}`)">{{ item.name }}</list-item>
    </div>
</template>

<script>
export default {
    name: "MyList",
    props:{
        items:{
            type: Array,
            required: true
        }
    }
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
