<template>
  <main class="container">
    <h1>I miei Post</h1>

    <PostItem 
      v-for="post in posts"
      :key="post.id"
      :post="post"
    />

  </main>
</template>

<script>
import PostItem from './PostItem.vue';
export default {
  name: 'Posts',
  
  components: {
    PostItem
  },

  data(){
    return{
      apiUrl: 'http://127.0.0.1:8000/api/posts',

      // una volta effettuata la chiamata salvo tutti i miei dati in posts
      posts: null

    }
  },

  // creo una funzione mounted che si attiva ogni volta che carico la pagina
  mounted(){
    // al caricamento della pagina richiamo la funzione
    this.getPosts();
  }, 

  
  methods: {
    // creo una funzione che fa la chiamata axios
    getPosts(){
      axios.get(this.apiUrl)
      .then(result => {
        this.posts = result.data
        console.log('ARRAY--->', this.posts);
      })
    }
  }

}
</script>

<style lang="scss" scoped>
main{
  h1{
    margin-bottom: 10px;
  }
}

</style>