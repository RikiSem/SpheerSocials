<template>
    <main-template>
        <template v-slot:navbar>
            <nav-bar>
                <template v-slot:header>
                    <my-header></my-header>
                </template>
                <template v-slot:content>
                    <my-button @click="$router.push(`/social/${ $route.params.id }/:userId/profile`)">Профиль</my-button>
                    <my-button @click="$router.push(`/social/${ $route.params.id }/:userId/feed`)">Лента</my-button>
                    <my-button @click="$router.push(`/social/${ $route.params.id }/:userId/friends`)">Друзья</my-button>
                    <my-button @click="$router.push(`/social/${ $route.params.id }/:userId/messages`)">Сообщения</my-button>
                    <my-button @click="$router.push(`/social/${ $route.params.id }/:userId/settings`)">Настройки</my-button>
                </template>
            </nav-bar>
        </template>
        <template v-slot:content>
            <slot></slot>
        </template>
    </main-template>
</template>

<script>
export default {
    name: "SocialPageComponent"
}
</script>

<style scoped>

</style>
