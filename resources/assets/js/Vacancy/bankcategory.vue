<template>
    <div>
        <news-header></news-header>
        <vacancy-header></vacancy-header>
    </div>
</template>
<script>
import newsheader from "../components/newsheader.vue";
import vacancy from "./vacancyheader.vue";

export default {
    components:{
        'news-header':newsheader,
        'vacancy-header':vacancy,    
    },
  data(){
      return{

      }
  }
}
</script>