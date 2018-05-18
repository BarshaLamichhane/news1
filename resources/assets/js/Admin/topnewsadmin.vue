<template>
    <div>
        <div class="col-md-6">
            <h1>Include your heading here </h1>
            <form method="post" action="#" v-on:submit.prevent="submitPost"  autocomplete="on" >
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Heading</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="3" placeholder="subject" v-model="news.heading" ></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">News-Body</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10"  placeholder="subject" v-model="news.body"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-10 ">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
                </div>

            </form>
        </div>
    </div>
</template>
<script>
export default {
  data(){
      return{
          news:{
          heading:'',
          body:''
      }

      }
  },
  methods:{
            submitPost(){
                axios.post('/api/newspost/save', {
                    news: this.news
                }).then(function(response){
                    if(response.data.message == "Success"){
                        alert("Successfully created")
                    }else{
                         alert("can't create")
                    }
                }).catch(function(err){
                    console.log(err)
                })
            }
    }
}
</script>
