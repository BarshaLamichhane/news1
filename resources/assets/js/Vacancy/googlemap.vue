<template>
  <div>
     
     <form method="post" action="#" v-on:submit.prevent="getData"  autocomplete="on" >
                <div class="form-group row">
                <div class="col-sm-10 ">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
                </div>

            </form>
  </div>
</template>
<script>
export default {
    data(){
        return{
            googleresult:''
        }

    },
   methods: {
    getData() {
      var instance = this;
      axios
        .get(
          //'api/http://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=4b616164a52ad67ad32a30bc4914d74b'
          "api/googlemapapi/save"
        )
        .then(function(response) {
			 instance.googleresult=response.data
		  console.log(response.data.list);
		})
        .catch(function(err) {
          console.log(err);
        });
    }
   }
}
</script>

