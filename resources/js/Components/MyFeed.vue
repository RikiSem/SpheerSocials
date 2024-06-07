<template>
    <div class="feedNavigations">
        <my-button class="btn" @click="openPublic">Общая лента</my-button>
        <my-button class="btn" @click="openPrivate">Ваша лента</my-button>
    </div>
    <feed-content :show="publicFeed" :items="publicFeedData"></feed-content>
    <feed-content :show="privateFeed" :items="privateFeedData"></feed-content>
</template>

<script>
import FeedContent from "./FeedContent.vue";
export default {
    name: "MyFeed",
    components: {FeedContent},
    data() {
        return {
            publicFeed: true,
            privateFeed: false,
            privateFeedData: [
                {
                    id: 1,
                    title: 'тестовый заголовок в привате 1',
                    body: 'тестовый текст в привате 1',
                    date: Date.now(),
                    imgs: [
                        'https://i.pinimg.com/736x/48/aa/24/48aa24379e05c30b3358925e80bb85c6.jpg',
                        'https://cs14.pikabu.ru/post_img/big/2023/04/11/6/1681200095130946275.jpg'
                    ],
                },
                {
                    id: 2,
                    title: 'тестовый заголовок в привате 2',
                    body: 'тестовый текст в привате 2',
                    date: Date.now(),
                    imgs: [
                        'https://cs13.pikabu.ru/post_img/big/2023/04/07/7/168086774517208100.jpg',
                        'https://cs14.pikabu.ru/post_img/big/2023/04/07/7/168086774615373935.jpg'
                    ],
                }
            ],
            publicFeedData: [
                {
                    id: 1,
                    title: 'тестовый заголовок в паблике 1',
                    body: 'тестовый текст в паблике 1',
                    date: Date.now(),
                    imgs: [
                        'https://pibig.info/uploads/posts/2021-04/1618919236_23-pibig_info-p-anime-tyan-anime-krasivo-24.jpg',
                    ],
                },
                {
                    id: 2,
                    title: 'тестовый заголовок в паблике 2',
                    body: 'тестовый текст в паблике 2',
                    date: Date.now(),
                    imgs: [
                        'https://cs12.pikabu.ru/post_img/big/2022/04/17/5/1650176562190944613.jpg'
                    ],
                }
            ],
        }
    },
    mounted() {
        this.getFeedData();
    },
    methods: {
        getFeedData(){

        },
        openPublic(){
            this.privateFeed = false;
            this.publicFeed = true;
        },
        openPrivate(){
            this.privateFeed = true;
            this.publicFeed = false;
        },
    }
}
</script>

<style scoped>
.feedNavigations{
    display: flex;
    width: 100%;
    height: fit-content;
    border-bottom: 3px solid #4949a7;
}
.btn{
    margin: auto;
    width: 100%;
    border: none;
    border-radius: 0px;
}
</style>
