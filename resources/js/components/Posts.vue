<template>
  <main class="container">
    <h1>I miei Post</h1>

    <PostItem 
      v-for="post in posts"
      :key="post.id"
      :post="post"
    />

    <div class="navigation">
      <button
        @click="getPosts(pagination.current - 1)"
        :disabled="pagination.current === 1"
        > 
        << prev
        </button>

        <button
          v-for="i in pagination.last"
          :key="i"
          @click="getPosts(i)"
        >
          {{ i }}
        </button>

      <button
        @click="getPosts(pagination.current + 1)"
        :disabled="pagination.current === pagination.last"

      > 
        >> next

      </button>
    </div>

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
      apiUrl: 'http://127.0.0.1:8000/api/posts?page=',

      // una volta effettuata la chiamata salvo tutti i miei dati in posts
      posts: null,

      pagination: {}

    }
  },

  // creo una funzione mounted che si attiva ogni volta che carico la pagina
  mounted(){
    // al caricamento della pagina richiamo la funzione
    this.getPosts();
  }, 

  
  methods: {
    // creo una funzione che fa la chiamata axios
    getPosts(page = 1){
      axios.get(this.apiUrl + page)
      .then(result => {
        this.posts = result.data.data
        //console.log('ARRAY--->', this.posts);

        this.pagination = {
          current : result.data.current_page,
          last : result.data.last_page

        }
          console.log('ARRAY CON PAGINATE--->', this.pagination);
      })
    }
  }

}
</script>

<style lang="scss" scoped>
main{
  padding: 50px;
  h1{
    margin-bottom: 10px;
  }
  .navigation{
    margin-bottom: 100px;
    button{
      padding: 5px;
      cursor: pointer;
    }
  }
}

</style>