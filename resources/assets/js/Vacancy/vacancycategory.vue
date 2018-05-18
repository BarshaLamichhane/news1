<template>
    <div>
         <div class="col-md-6">
            <form action="#" autocomplete="on" >
                <div class="form-group row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control"  placeholder="Name" name="name" >
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control"  placeholder="Name" name="name">
                    </div>
                    <div class="col-sm-4">
                        <select class="selectpicker" >
                            <option selected disabled value="">Please select one</option>
                            <option v-for="ctg in category" :key="ctg.key">{{ ctg }}</option>    
                        </select>
                    </div>
                </div>  
            </form>
        </div> 
        <div class="col-md-6 jumbotron">
            <form action="#" autocomplete="on" >
                <h4>JOBS BY CATEGORY</h4>
                <hr class="my-4">  
                <ul>  
                 <li v-for="catt in category" :key="catt.key">                                                                                                                                                                           
                <router-link :to=catt.to>{{catt.name}}</router-link>
                </li>
                </ul>
            </form>
        </div> 
    </div>
</template>
<script>
export default {
  data(){
      return{
          category:[
              {name:'Banking/Insurance/Financal' , to:'/bank'}, 
              {name:'IT and Communcations' ,to:'/itcomm'}, 
              {name:'Construction/Engineering/Architect' , to:'/construction'}, 
              {name:'Medical/Nursing', to:'medical'}, 
              {name:'Engineerng/Technician', to:'engineerng'},
           ],
      }
  }
}
</script>
