<template>
  <div>
    <h1>ciao</h1>
    <h1>{{ post.title }}</h1>
    <p>{{ post.content }}</p>
  </div>
</template>

<script>
export default {
  name: 'PostDetail',
  data(){
    return{
      apiUrl: 'http://127.0.0.1:8000/api/posts',
      post:{
        title: '',
        content: '',
        category: {},
        tags: []
      },
      
      
    }

  },
  methods: {
        getApi(){
          axios.get(this.apiUrl + this.$route.params.slug)
          .then(result => {
            this.post = result.data;
            console.log(this.post);
          })
        }
      },
      mounted(){

        this.getApi();
        console.log('vaiiiii');
      }

}
</script>

<style lang="scss" scoped>

</style>