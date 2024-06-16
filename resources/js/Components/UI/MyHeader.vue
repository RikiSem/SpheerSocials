<template>
    <div class="header">
        <div class="header_content">
            <img :src="this.picUrl">
            <p class="h4">Spheer</p>
        </div>

    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "MyHeader",
    data(){
      return{
          picUrl: '',
      }
    },
    mounted(){
        this.getHeaderPic();
    },
    methods:{
        async getHeaderPic(){
            const response = await (axios.get('/api/getHeaderPic'));
            this.picUrl = response.data;
        }
    }
}
</script>

<style scoped>
.header{
    height: 30%;
    display: flex;
}

img{
    width: clamp(5rem, 0.25rem + 2vw, 2rem);
    border-radius: 50%;
    margin: auto;
}
.header_content {
    flex-direction: column;
    display: flex;
    margin: auto;
    padding: 10px;
}
p{
    margin: auto;
    font-family: "Bahnschrift";
    font-size: clamp(1rem, 0.25rem + 2vw, 2rem);
}
</style>
