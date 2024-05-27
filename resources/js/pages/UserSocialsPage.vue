<template>
    <user-page-component>
        <div class="socialPage">
            <strong class="display-6"> Ваши сообщества </strong>
            <div>
                <strong class="lead">Доступно 3 из 3 сообществ для добавления</strong>
                <my-button @click="show = true">+ Сообщество</my-button>
                <my-dialog v-model:show="show">
                    <my-button @click="showCreateSocialDialog = true">Создать свое</my-button>
                    <my-dialog v-model:show="showCreateSocialDialog">
                        <my-input @changeInput="setNewSocialname" v-model:name="newSocial.name">Название сообщества</my-input>
                        <textarea-about @changeTextareaAbout="setNewSocialDescription" v-model:text="newSocial.description">Описание сообщества</textarea-about>
                        <my-button @click="createNewSocial">Создать</my-button>
                    </my-dialog>
                    <span class="lead"> или </span>
                    <my-input>искать по названию</my-input>
                    <my-socials-list></my-socials-list>
                </my-dialog>
            </div>
            <my-socials-list class="socialsList" :items="items"></my-socials-list>
        </div>
    </user-page-component>
</template>

<script>
import UserPageComponent from "../Components/UserPageComponent.vue";
import axios from "axios";
import {useRoute} from "vue-router";
export default {
    name: "MainPage",
    components: {UserPageComponent},
    data(){
        return{
            show: false,
            showCreateSocialDialog: false,
            items: [],
            newSocial:{
                name: '',
                description: '',
                author: this.$route.params.userId,
            },
        }
    },
    mounted(){
        this.getSocials();
    },
    methods:{
        test(){
            alert(1);
        },
        async getSocials(){
            try {
                this.items = (await axios.get(`/api/getUserSocials/${ useRoute().params.userId }`)).data;
            } catch(e) {
                console.log(e)
            }
        },
        setNewSocialname(name){
            this.newSocial.name = name;
        },
        setNewSocialDescription(description){
            this.newSocial.description = description;
        },
        async createNewSocial(){
            try {
                const resp = await axios.post(`/api/createNewSocial`, this.newSocial);
            } catch(e) {
                console.log(e)
            }
        }
    }
}
</script>

<style scoped>
.socialPage{
    display: flex;
    flex-direction: column;
    margin-left: auto;
    margin-right: auto;
}

</style>
