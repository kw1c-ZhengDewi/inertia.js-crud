<script setup>
import Navigation from '@/Components/Navigation.vue'
import Footer from '@/Components/Footer.vue'
</script>


<template>
    <Navigation />
    <main>
      <slot />    <!-- will be replaced with whatever the page (Home.vue, About.vue, etc.) puts inside the layout. -->
    </main>
    <Footer />
</template>


<!-- styling in vanilla CSS -->
<style>

</style>
