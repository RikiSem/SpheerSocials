<template>
    <div class="list" v-for="item in items">
        <list-item class="listItem" @click="$router.push(`/social/${ item.id }/${ $route.params.userId }/feed`)">
            <div class="listItemContent">
                <span class="socialName">
                    {{ item.name }}
                </span>
                <span class="socialDescription">
                    {{ item.description }}
                </span>
            </div>
        </list-item>
    </div>
</template>

<script>
export default {
    name: "MySocialsList",
    props:{
        items:{
            type: Array,
            required: true
        }
    }
}
</script>

<style scoped>
.listItemContent{
    overflow-x: hidden;
    overflow-y: hidden;
    display: flex;
}
.socialName, .socialDescription{
    width: 100%;
}

.list{
    width: 100%;
    overflow-y: scroll;
}
.list::-webkit-scrollbar{
    display: none;
}
</style>
