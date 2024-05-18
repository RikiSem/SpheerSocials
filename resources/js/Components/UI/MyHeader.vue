<template>
    <div class="header row">
        <div class="header_content">
            <img src="../../../../public/imgs/mainPic.png">
            <h1>Название</h1>
        </div>

    </div>
</template>

<script>
export default {
    name: "MyHeader"
}
</script>

<style scoped>
.header{
    display: flex;
    border-bottom: 2px solid #4a5568;
}

img{
    width: 20%;
    border-radius: 50%;
    margin: auto;
}
.header_content {
    flex-direction: column;
    display: flex;
    margin: auto;
}
h1{
    margin: auto;
}
</style>
