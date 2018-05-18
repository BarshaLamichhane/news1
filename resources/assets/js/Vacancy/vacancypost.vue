<template>
   <div>
      <div class="container container-fluid">
         <div class="row">
            <form method="post" action="#" v-on:submit.prevent="submitVacancy" enctype="multipart/form-data">
               <div class="form-row">
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Company Name:</b></label>
                     <input type="text" class="form-control"  placeholder="Enter Your company name" v-model="job.name" >
                  </div>
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Vacancy Post:</b></label>
                     <input type="text" class="form-control"  placeholder="Enter vacancy Post name" v-model="job.post">
                  </div>
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Background Image:</b></label>
                     <input type="file" class="form-control"  placeholder="upload your Background image for company" v-on:change="onFileChange">
                  </div>
               </div>
             <!--  <div class="form-row">
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Job Level:</b></label>
                     <input type="text" class="form-control"  placeholder="Enter seniority level(senior or junior or medium)" v-model="job.level">
                  </div>
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>job location:</b></label>
                     <input type="text" class="form-control"  placeholder="Enter the location of job" v-model="job.location">
                  </div>
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Education Degree:</b></label>
                     <input type="text" class="form-control"  placeholder="Enter  required education degree" v-model="job.education">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Company Logo:</b></label>
                     <input type="file" class="form-control" v-on:change="onLogoChange">
                  </div> 
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Company Email:</b></label>
                     <input type="email" class="form-control"  placeholder="Enter company email address for contact" v-model="job.email">
                  </div>
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Phone No:</b></label>
                     <input type="number" class="form-control"  placeholder="Enter company phone number" v-model="job.phone">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Job Availability:</b></label>
                     <input type="text" class="form-control"  placeholder="Enter wheather full tiime or part time " v-model="job.availability">
                  </div>
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>offered salary:</b></label>
                     <input type="text" class="form-control"  placeholder="Enter the offered salary"  v-model="job.offsal">
                  </div>
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Min.Experience Year:</b></label>
                     <input type="text" class="form-control"  placeholder="Enter required minimum experience year " v-model="job.experience">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-sm-12  col-md-12 col-lg-12">
                     <label ><b>upload video:</b></label>
                     <input type="file" class="form-control" v-on:change="onVideoSelect">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>No of Openings:</b></label>
                     <input type="text" class="form-control"  placeholder="Enter no of vacancies opened for that post" v-model="job.opening">
                  </div>
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Preferred Gender:</b></label>
                     <input type="text" class="form-control"  placeholder="Enter the required gender for job" v-model="job.gender">
                  </div>
                  <div class="form-group col-sm-4  col-md-4 col-lg-4">
                     <label ><b>Deadline:</b></label>
                     <input type="date" class="form-control"  placeholder="Enter the final deadline " v-model="job.deadline">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-sm-12  col-md-12 col-lg-12">
                     <label ><b>About:</b></label>
                     <textarea type="text" class="form-control" rows="5"  placeholder="Enter Your company name" v-model="job.about"></textarea>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-sm-12  col-md-12 col-lg-12">
                     <label ><b>Job Description:</b></label>
                     <textarea type="text" class="form-control" rows="5"  placeholder="Enter Your company name" v-model="job.jobdescription" ></textarea>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-sm-12  col-md-12 col-lg-12">
                     <label ><b>Job Specification:</b></label>
                     <textarea type="text" class="form-control" rows="5"  placeholder="Enter Your company name" v-model="job.jobspecfication"></textarea>
                  </div>
               </div>-->
                <button type="submit" class="btn btn-primary">Post</button>
            </form>
         </div>
      </div>
   </div>
</template>
<script>
   export default {
     data() {
       return {
           job:{
               name:'',
               post:'',
               bimage:null,
               form:new FormData(),
               level:'',
               locaton:'',
               education:'',
               //logo:null,
               email:'',
               phone:'',
               availability:'',
               offsal:'',
               experience:'',
               //video:null,
               opening:'',
               gender:'',
               deadline:'',
               about:'',
               jobdescription:'',
               jobspecficaton:''
               
           }
       };
     },
    methods:{
         onFileChange(event){
         console.log(event.target.files[0])
         this.vacancy.bimage=event.target.files[0]
     },
        submitVacancy(){
                this.form.append('pic',this.bimage);
                const config ={ headers:{ 'Content-Type':'multipart/form-data' }};               
                axios.post('/api/vacancypost/save',  {
                    vacancy:this.job
                }).then(function(response){
                   console.log(response)
                if(response.data.message == "Success"){
                      alert ('vacancy posted successfully');
                  }
                  else{
                      alert ('sorry vacancy post failed')
                  }
                }).catch(function(err){
                    console.log(err)
                })
            },
         onFileChange(event){
         console.log(event.target.files[0])
         this.bimage=event.target.files[0]
     },
       /* onLogoChange(){
             console.log(event.target.files[0])
         this.logo=event.target.files[0]
        },
         onVideoSelect(){
             console.log(event.target.files[0])
         this.video=event.target.files[0]
        }*/
    }
   };
</script>