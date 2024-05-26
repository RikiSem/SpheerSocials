<template>
    <user-page-component>
        <div class="socialPage">
            <strong class="display-6"> Ваши сообщества </strong>
            <div>
                <strong class="lead">Доступно 3 из 3 сообществ для добавления</strong>
                <my-button @click="show = true">+ Сообщество</my-button>
                <my-dialog v-model:show="show">
                    <my-button @click="show = true">Создать свое</my-button>
                    <span class="lead"> или </span>
                    <my-input>искать по названию</my-input>
                    <my-list>
                    </my-list>
                </my-dialog>
            </div>
            <my-list class="socialsList" :items="items"></my-list>
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
            items:[]
        }
    },
    mounted(){
        this.getSocials();
    },
    methods:{
        async getSocials(){
            try {
                this.items = (await axios.get(`/api/getUserSocials/${ useRoute().params.userId }`)).data;
            } catch(e) {
                alert(e)
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
