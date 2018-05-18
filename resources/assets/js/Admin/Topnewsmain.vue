
<template>
    <div>
        <news-header></news-header>
        <top-news></top-news>
    </div>
</template>
<script>
import topnews from "./topnewsadmin.vue"
import newsheader from "../components/newsheader.vue";
export default {
    components:{
        'top-news':topnews,
        'news-header':newsheader

    },
  data(){
      return{

      }
  }
}
</script>
