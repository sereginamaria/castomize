<template>
    <div class="">
        <div class="galary1 mb-5">
            <img  src="../assets/galary1.jpg" >
        </div>
        <div class=" row justify-content-between mx-5">
            <div class="row galary2">
                <img src="../assets/services2.jpg">
            </div>
            <div class="row galary2">
                <img src="../assets/services2.jpg">
            </div>
            <div class="row galary2">
                <img src="../assets/services2.jpg">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Slider3"
    }
</script>

<style scoped>
    .galary1 {
        overflow: hidden;
        width: 100%;
        height: 600px;
    }
    .galary1 img {
        margin-top: -75px;
    }
    .galary2 {
        overflow: hidden;
        width: 450px;
        height: 400px;
    }
</style>