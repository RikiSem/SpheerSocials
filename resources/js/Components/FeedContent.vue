<template>
    <div v-show="show" class="feedContent" v-for="item in items">
        <my-post :item="item"></my-post>
    </div>
</template>

<script>
import MyPost from "./MyPost.vue";
export default {
    name: "FeedContent",
    components: {MyPost},
    props: {
        show: {
            default: false,
            type: Boolean,
        },
        items: {
            default: [],
            type: Array,
        }
    }
}
</script>

<style scoped>
.feedContent{
    display: flex;
    flex-direction: column;
    width: 100%;
}
</style>
