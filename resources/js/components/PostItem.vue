<template>
  <div>
    <article>
      <h3>{{ post.title }}</h3>
      <p class="date">{{ post.created_at }}</p>
      <p class="text">{{ troncateText }}</p>
    </article>
  </div>
</template>

<script>
export default {
  name: 'PostItem',

  props: {
    // il figlio PostItem riceve dal padre Posts, un oggetto che chiamo post
    'post' : Object
  },

  computed: {
    troncateText(){
      return this.post.content.substr(0, 50) + '...';
    }
  }
}
</script>

<style lang="scss" scoped>
article{
  border: 2px solid black;
  padding: 10px;
  text-align: center;
  margin-bottom: 20px;
  .text{
    margin-bottom: 20px;
  }
}
</style>