<template>
 <div>
      <h1>{{this.cityname}}</h1>    
</div>
</template>
<script>
export default {
 
 computed: {
    cityname: function(){
      if(this.dataa != null){
        return this.dataa.list[0].name;
      }
      return "name not inserted"
    },
    weather:function(){
       if(this.dataa != null){
        return this.dataa.list[0].weather[0].icon || "NO"
      }
      return "No weather information updated"
    }
  },
  data() {
    return {
      data: {
        city: "",
      },
      dataa: null
    };
  },
  created() {
    this.getData();
  },

  methods: {
    

    getData() {
      var instance = this;
      axios
        .get(
          //'api/http://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=4b616164a52ad67ad32a30bc4914d74b'
          "api/weatherapiresult/save?city=" + instance.data.city
        )
        .then(function(response) {
          instance.dataa= response.data;
         console.log(response.data.list)
        })
        .catch(function(err) {
          console.log(err);
        });
    }
  }
};
</script>


