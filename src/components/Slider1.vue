<template>
    <div class="container-fluid main-background ">
        <div class="row slider1-container">
            <div class="slider1">
                <div class='container d-flex justify-content-between'>
                    <div class='slider1-logo'>
                        <img src="../assets/logo.png" alt="h" width="50" height="50">
                    </div>
                    <div class='slider1-menu'>
                        <ul>
                            <li>Главная</li>
                            <li>Обо мне</li>
                            <li>Работы</li>
                            <li>Идеи</li>
                        </ul>
                    </div>
                    <div class='slider1-social'>
                        <ul>
                            <li>Телеграмм</li>
                            <li>Вотс</li>
                            <li>Инст</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container d-flex flex-column col-xl-6 slider1-text">
                <p class="text-center ">Кастомизация</p>
                <p class="text-center">одежды и кроссовок</p>
                <div class=" d-flex justify-content-center">
                    <button class="btn-lg btn btn-outline-light ">наши услуги</button>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
    export default {
        name: "Slider1",
    }
</script>

<style lang="sass">
    *
        margin: 0
        padding: 0
        font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif
        text-transform: uppercase
        letter-spacing: 2px
        font-size: 12px

        .main-background
            height: 755px
            background: url("../assets/sl1-background.jpg") no-repeat
            background-size: cover
            box-shadow: 0 0 0 400px rgba(0, 0, 0, 0.33) inset


        .slider1-container
            height: inherit
            display: block

        .slider1
            width: 100%
            background: rgba(0, 0, 0, 0.7)
            height: 80px
            position: fixed
            top: 0
            z-index: 900

        .slider1-menu ul, .slider1-social ul
            display: flex
            justify-content: space-between

        .slider1-menu ul li, .slider1-social ul li
            list-style-type: none
            color: #ffffff
            padding-left: 20px
            padding-right: 20px

        .slider1-menu, .slider1-social
            width: auto
            padding-top: 30px

        .slider1-text
            padding-top: 250px
            color: #ffffff
            float: right
            font-weight: bold
            button
                font-weight: bold
                text-transform: uppercase
                width: 200px
                height: 60px

        .slider1-text p:nth-child(1)
            font-size: 60px
            margin-bottom: 0

        .slider1-text p:nth-child(2)
            font-size: 35px
</style>