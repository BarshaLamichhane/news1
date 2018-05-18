
<template>
    <div>
        <div class="col-md-6">
            <h1>Enter your Calendart enteties here your heading here </h1>
            <form method="post" action="#" v-on:submit.prevent="submitcalendar"  autocomplete="on" >
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Month</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="month" v-model="calendardata.month" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Week</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="week" v-model="calendardata.week">
                    </div>
                </div>
                 <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Day</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" rows="10"  placeholder="day" v-model="calendardata.day">
                    </div>
                </div>
                 <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">year</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" rows="10"  placeholder="year" v-model="calendardata.year">
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
         calendardata:{
          month:'',
          week:'',
          day:'',
          year:''
      }

      }
  },
  methods:{
            submitcalendar(){
                axios.post('/api/calendarpost/save', {
                    calendardata: this.calendardata
                }).then(function(response){
                    console.log(response)
                   
                }).catch(function(err){
                    console.log(err)
                })
            }
    }
}
</script>
