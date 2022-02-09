<template>
  <div>
    <article>
      <h3>{{ post.title }}</h3>
      <p class="date">{{ post.created_at }}</p>
      <p class="text">{{ post.content }}</p>
    </article>
  </div>
</template>

<script>
export default {
  name: 'PostItem',

  props: {
    // il figlio PostItem riceve dal padre Posts, un oggetto che chiamo post
    'post' : Object
  }
}
</script>

<style lang="scss" scoped>
article{
  margin-bottom: 100px;
  .text{
    margin-bottom: 20px;
  }
}
</style>