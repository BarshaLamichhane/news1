<template>
 <div>

        <div class="col-md-6">
            <h1>Weather API </h1>
            <form method="post" action="#" v-on:submit.prevent="getData"  autocomplete="on" >
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Enter City</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="Search" v-model="data.city" >
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-10 ">
                    <button type="submit" class="btn btn-success">submit</button>
                    <button type="reset" v-on:click="reloadpage" class="btn btn-info">change city</button>
                </div>
                </div>
                
            </form>
              <div class="jumbotron" v-if="isSearched">

				 
				<table class="table" >
					<tr>
						<th>Country</th>
						<th>City</th>
						<th></th>
						<th>weather</th>
						<th>max temp</th>
						<th>min temp</th>
						<th>rain</th>
						<th>snow</th>
						<th></th>
					</tr>
					<tr v-for="result in results" v-bind:key="result.key">
						<!-- <td>{{this.countryname}}</td>
						<td>{{this.cityname}}</td>
						<td><img :src=weather ></td>
						<td>{{this.weatherdescription}}</td>
						<td>{{this.maxtemp}}&deg;C</td>
						<td>{{this.mintemp}}&deg;C</td>
						<td>{{this.rainfall}}</td>
						<td>{{this.snowfall}}</td> -->
						<td>{{ result.sys.country }}</td>
						<td>{{result.name}} </td>
						<td><img :src=getIcon(result.weather[0].icon) ></td>
						<td>{{result.weather[0].description}}</td>
						<td>{{result.main.temp_max}}</td>
            <td>{{result.main.temp_min}}</td>
					<!--	<td>{{result.main.temp_min}}&deg;C</td> -->
						<td>{{result.rain}}</td>
						<td>{{result.snow}}</td>

            </tr>	
				</table>
         
				
        
          <form >
           <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="c" v-model="choose" >
            <label class="form-check-label">&deg;C</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="f" v-model="choose">
            <label class="form-check-label" for="inlineRadio2">Fahrenhiet</label>
          </div>
          
                <div class="form-group row">
                <div class="col-sm-10 ">
                    <button type="submit" class="btn btn-primary">Fahrenheit</button>
                </div>
                </div>

        </form>  
        
        
                </div>
             
        </div>
       
    </div>
</template>
<script>
export default {
  computed: {
	 
	 
  },
  data() {
    return {
      data: {
        city: ""
	  },
    choose:null,
	  isSearched: false,
    isIn: 'c',
   
    
      // dataa: null

	  results: [],
	  weatherresult:''
    };
  },

  methods: {
    getData() {
      var instance = this;
      axios
        .get(
          //'api/http://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=4b616164a52ad67ad32a30bc4914d74b'
          "api/weatherapi/save?city=" + instance.data.city
        )
        .then(function(response) {
          //instance.dataa = response.data;
			 instance.results = response.data.list 
			 instance.weatherresult=response.data.list
		  console.log(response.data.list);
			instance.isSearched = true
		})
        .catch(function(err) {
          console.log(err);
        });
    },
    getIcon(icon){
       return "http://openweathermap.org/img/w/" +icon +".png"
    },
    reloadpage(){
      location.reload(true);
    },
   
    addition(add){
      return 5+add
    },
    // getCelcius(min_temp,max_temp){
    //   return  min_temp;
    // },
    //  getfahrenheit(min_temp, max_temp){
    //   var y,
    //   y=min_temp*1.8+32;
    //   return y
    // },
    chooseTemp(temp){
      if(this.isIn == temp) return;
      else{
        for(var  i=0; i < this.results.length;i++){
          this.results[i].main.temp_max = to(this.results[i].main.temp_max,temp)
          this.results[i].main.temp_min = to(this.results[i].main.temp_min, temp)
          
        }
        this.isIn = temp;
      }
    },
  },
  watch:{
    'choose': function(val, old){
      this.chooseTemp(val);
    }
  }
  
};
    // cityname: function() {
    //   if (this.dataa != null) {
    //     return this.dataa.list[0].name;
    //   }
    //   return null;
    // },
    // weather: function() {
    //   if (this.dataa != null) {
    //     return (
    //       "http://openweathermap.org/img/w/" +
    //       this.dataa.list[0].weather[0].icon +
    //       ".png"
    //     );
    //   }
    //   return null;
    // },
    // countryname: function() {
    //   if (this.dataa != null) {
    //     return this.dataa.list[0].sys.country || "NO";
    //   }
    //   return null;
    // },
    // weatherdescription: function() {
    //   if (this.dataa != null) {
    //     return this.dataa.list[0].weather[0].description || "NO";
    //   }
    //   return null;
    // },
    // maxtemp: function() {
    //   if (this.dataa != null) {
    //     return this.dataa.list[0].main.temp_max || "NO";
    //   }
    //   return null;
    // },
    // mintemp: function() {
    //   if (this.dataa != null) {
    //     return this.dataa.list[0].main.temp_min || "NO";
    //   }
    //   return null;
    // },
    // rainfall: function() {
    //   if (this.dataa != null) {
    //     return this.dataa.list[0].rain || "NO";
    //   }
    //   return null;
    // },
    // snowfall: function() {
    //   if (this.dataa != null) {
    //     return this.dataa.list[0].snow || "NO";
    //   }
    //   return null;
    // }
</script>

