<template>
  <div>
      <news-header></news-header>
      <weather></weather>
      
     
  </div>
</template>
<script>
import weather from "./weatheruser.vue"
import weatherresult from "./weatherresult.vue"
import newsheader from "../components/newsheader.vue";
export default {
    components:{
        'weather':weather,
         'news-header':newsheader,
         'user-weather':weatherresult
         
    },
  data(){
      return{

      }
    }
 
}
</script>
