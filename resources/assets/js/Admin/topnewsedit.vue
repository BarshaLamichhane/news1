<template>
<div> 
  <form action="#" method="post">
  <div class="col-md-10 blogShort" v-for="pnews in postednews" :key="pnews.key">
                     <h1  >{{pnews.news_heading}}</h1>
                     <h5> <b>createdAt:</b>{{ getMomentDate( pnews.created_at)}}</h5>
                     
                     <article><p>
                         {{pnews.news_body}}
                         </p> 
                     </article>
                     <button type="button" class="btn btn-danger" v-on:click="onDelete(pnews)" >Delete</button>
                     <button type="button" class="btn btn-link" v-on:click="onEdit()" >Edit</button>
                
                 </div>
      </form>
</div>

</template>
<script>
const moment = require("moment");
export default {
  data() {
    return {
      postednews: null
    };
  },
  created() {
    this.fetchNews();
  },

  /*methods:{
            fetchCustomer(){

                this.$http.get("/api/newspost").then((response)=>{
                    this.customers=response.data                    
                });
            },*/
  methods: {
    fetchNews() {
      var instance = this;
      axios.get("/api/newspostt")
        .then(function(response) {
          //console.log(response);
          instance.postednews = response.data;
        })
        .catch(function(err) {
          console.log(err);
        });
		},
		getMomentDate(date){
			return moment(date).format('YYYY-MMM-DD HH:mm');
		},
    onDelete(abcd){
      var instance = this;
      axios.delete("/api/newsdelete/"+abcd.id)
      
      .then(function(response){
                    if(response.data.message == "deleted"){
                        alert("Successfully deleted")
                    }else{
                         alert("can't delete")
                    }
                }).catch(function(err){
                    console.log(err)
                })
       },
       onEdit(){
         
         this.$router.push("/topnewsedit");
       }
  }
}; 

</script>
