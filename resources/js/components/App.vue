<template>

  <div>
    <Header />

      <Posts />

    <Footer />
  </div>
  
</template>

<script>
import Header from './partials/Header.vue';
import Footer from './partials/Footer.vue';
import Posts from './Posts.vue';
export default {
  name: "App",
  components: {
    Header,
    Footer,
    Posts
  }
}
</script>

<style lang="scss">

</style>