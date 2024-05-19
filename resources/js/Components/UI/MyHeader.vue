<template>
    <div class="header row">
        <div class="header_content">
            <img src="../../../../public/imgs/mainPic.png">
            <h1><strong>Spheer</strong></h1>
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
    height: 30%;
    display: flex;
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
    padding: 10px;
}
h1{
    margin: auto;
    font-family: "Bahnschrift";
    font-size: 50pt;
}
</style>
