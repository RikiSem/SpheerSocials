<template>
    <user-page-component>
        <div class="socialPage">
            <strong class="display-6"> Ваши сообщества </strong>
            <div class="">
                <strong class="lead">Доступно 3 из 3 сообщества для добавления</strong>
                <my-button @click="show = true">+ Сообщество</my-button>
                <my-dialog v-model:show="show">
                    <form>

                    </form>
                    <my-input>Название сообщества</my-input>
                </my-dialog>
            </div>
            <my-list class="socialsList">
                <list-item>item 1</list-item>
            </my-list>
        </div>
    </user-page-component>
</template>

<script>
import UserPageComponent from "../Components/UserPageComponent.vue";
export default {
    name: "MainPage",
    components: {UserPageComponent},
    data(){
        return{
            show: false
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
