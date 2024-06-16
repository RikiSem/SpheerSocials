<template>
    <div class="post">
        <div class="feedItemHeader">
            <p>{{ item.date }}</p>
            <p>{{ item.title }}</p>
        </div>
        <div class="feedItemBody">
            <p>{{ item.body }}</p>
            <div class="feedItemImgs">
                <img @click="showImg(imgRes)" v-for="(imgRes) in item.imgs" :src="imgRes" class="img">
            </div>
            <post-control-panel></post-control-panel>
        </div>
        <img-modal v-model:show="showImgModal">
            <img :src="this.currentImg">
        </img-modal>
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
    data(){
        return{
            showImgModal: false,
            currentImg: ''
        }
    },
    methods: {
        showImg(img){
            this.currentImg = img;
            this.showImgModal = true;
        }
    }
}
</script>

<style scoped>
.post{
    padding: 5px;
    min-width: 70%;
    margin: 5px auto;
    border-radius: 7px;
    border: 1px solid var(--color);
}
.feedItemImgs{
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-content: flex-start;
}
.img {
    cursor: pointer;
    margin: 5px;
    width: clamp(7rem, 0.25rem + 2vw, 2rem);
}
</style>
