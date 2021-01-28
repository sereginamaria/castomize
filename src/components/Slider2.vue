<template>
    <div>
        <div class="container">
            <div class="d-flex justify-content-center my-5 slider2-title">
                <p>наши услуги</p>
            </div>
            <div class="mb-5">
                <div class="row d-flex justify-content-between text-justify mb-5">
                    <div>
                        <img src="../assets/services2.jpg" width="450" height="300">
                    </div>
                    <div class="col-7 mt-5">
                        <h1>Кастомизация одежды</h1>
                        <p>Мы создаем яркие и уникальные принты ручной работы</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-between text-justify">
                    <div class="col-8 mt-5">
                        <h1>Кастомизация кроссовок</h1>
                        <p></p>
                    </div>
                    <div><img src="../assets/services1.jpg" width="300" height="300">

                    </div>
                </div>
                <div class="row d-flex justify-content-between text-justify">
                    <div>
                        <img src="../assets/services3.jpg" width="300" height="300">
                    </div>
                    <div class="col-8 mt-5">
                        <h1>Кастомизация обуви</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Slider2"
    }
</script>

<style scoped lang="sass">
    .slider2-title p
        text-transform: uppercase
        font-size: 40px
</style>