<template>
    <div>
        <news-header></news-header>
        <vacancy-header></vacancy-header>
        <vacancy-category></vacancy-category>
    </div>
</template>
<script>
import newsheader from "../components/newsheader.vue";
import vacancy from "./vacancyheader.vue";
import vacancycategory from "./vacancycategory.vue";
export default {
    components:{
        'news-header':newsheader,
        'vacancy-header':vacancy,
        'vacancy-category':vacancycategory
       
    },
  data(){
      return{

      }
  }
}
</script>
