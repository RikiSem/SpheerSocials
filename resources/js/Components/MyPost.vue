<template>
    <div class="post">
        <div class="feedItemHeader">
            <p>{{ item.date }}</p>
            <p>{{ item.title }}</p>
        </div>
        <div class="feedItemBody">
            <p>{{ item.body }}</p>
            <div class="feedItemImgs">
                <img v-for="(imgRes) in item.imgs" :src="imgRes" class="img">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        item: {
            type: Array
        }
    },
    name: "MyPost",
}
</script>

<style scoped>
.post{

}
.feedItemImgs{
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-content: flex-start;
}
.img {
    width: clamp(15rem, 0.25rem + 2vw, 2rem);
}
</style>
