<template>

  <header>
    <nav>
      <ul>
      <li>
        <a href="">Home</a> 
        <a class="active" href="">Blog</a> 
        <a href="">Chi siamo</a> 
        <a href="">Contatti</a>
      </li>
    </ul>
    </nav>
    
  </header>

</template>

<script>
export default {
  name: 'Header'
}
</script>

<style lang="scss" scoped>
header{
  background-color: cadetblue;
  text-align: center;
  padding: 20px 0;

  ul{
    list-style: none;
    li{
      a{
        margin: 0 10px;
         text-decoration: none;
         color: white;
        &:hover{
          text-decoration: underline;
        } 
        &.active{
          color: crimson;
        }
      }
    }
  }
}
</style>