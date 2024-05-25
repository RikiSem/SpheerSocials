<template>
    <user-page-component>
        <user-settings></user-settings>
    </user-page-component>
</template>

<script>
import UserPageComponent from "../Components/UserPageComponent.vue";
import UserSettings from "../Components/UserSettings.vue";
export default {
    name: "MainPage",
    components: {UserSettings, UserPageComponent},
}
</script>

<style scoped>

</style>
