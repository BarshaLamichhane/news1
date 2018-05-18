<template>
<div>
    <news-header></news-header>
    <img width="2000px" height="800px" :src="image"/>
    <contact-form></contact-form>
</div>
</template>
<script>
import contactform from "./contactform.vue";
import newsheader from "./newsheader.vue";
    export default {
        components:{
            'news-header':newsheader,
            'contact-form':contactform,
        },
        data() {
            
            return{
        
                image:'../images/contactimage.jpg'

            }
        }
    }
</script>