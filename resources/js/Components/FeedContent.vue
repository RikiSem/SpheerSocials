<template>
    <div v-show="show" class="feedContent" v-for="item in items">
        <div>
            <div class="feedItemHeader">
                <p>{{ item.date }}</p>
                <p>{{ item.title }}</p>
            </div>
            <div class="feedItemBody">
                <p>{{ item.body }}</p>
                <div >
                    <img v-for="imgRes in item.imgs" :src="imgRes">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FeedContent",
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
