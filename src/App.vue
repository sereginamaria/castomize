<template>
  <div id="app">
    <Slider1/>
    <Slider2/>
    <Slider3/>
  </div>
</template>

<script>
  import Slider1 from "./components/Slider1.vue";
  import Slider2 from "./components/Slider2.vue";
  import Slider3 from "@/components/Slider3.vue";

  export default {
    name: 'App',
    components: {
      Slider1,
      Slider2,
      Slider3
    }
  }
</script>

<style>

</style>

