<script setup>
import Navigation from '@/Components/Navigation.vue'
import Footer from '@/Components/Footer.vue'
</script>


<template>
    <!-- Todo: Add background image here  -->
     <div class="BGLayout">
    <Navigation />
    <main>
      <slot />    <!-- will be replaced with whatever the page (Home.vue, About.vue, etc.) puts inside the layout. -->
    </main>
    <Footer />
    </div>
</template>


<!-- Custom CSS  -->
<style scoped>
.BGLayout {
  background: url('/resources/src/assets/img/MainBG.jpg') center/cover no-repeat;
  min-height: 100vh;
  background-position: center;
}
</style>
