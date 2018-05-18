<template>
<div>
 <news-header></news-header>
  <news-user></news-user>
  </div>
</template>
<script>
import Newsusermain from "./TopNewsUser.vue";
import newsheader from "../components/newsheader.vue";
export default {
  components:{
      'news-user':Newsusermain,
      'news-header':newsheader
  }
}
</script>

