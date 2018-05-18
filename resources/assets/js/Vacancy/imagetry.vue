<template>
   <div>
      <div class="container container-fluid">
         <div class="row">
            <form method="post" action="#" v-on:submit.prevent="submitVacancy" enctype="multipart/form-data">
               <div class="form-row">
                  <div class="form-group col-sm-12  col-md-12 col-lg-12">
                     <label ><b>Background Image:</b></label>
                     <input type="file" class="form-control"  placeholder="upload your Background image for company" ref="imageInput" v-on:change="onFileChange">
                  </div>
               </div>
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
      job: {
        name: "",
        post: "",
        bimage:"",
        image_link: "",
        image_id: "",
        level: "",
        locaton: "",
        education: "",
        //logo:null,
        email: "",
        phone: "",
        availability: "",
        offsal: "",
        experience: "",
        //video:null,
        opening: "",
        gender: "",
        deadline: "",
        about: "",
        jobdescription: "",
        jobspecficaton: ""
      }
    };
  },
  methods: {
    onFileChange(event) {
      console.log(event);
      //this.job.bimage = event.target.files[0];

      var instance = this;
      var formData = new FormData(this.$refs.imageInput);
      formData.append("inputImage", $("input[type=file]")[0].files[0]);
      //formData.append("_token", this.csrf);

      $.ajax({
        url: "/api/imagetry/save",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success(data) {
          instance.job.image_link = "/" + data.vbimage;
          instance.job.image_id = data.id;
          console.log(data);
        },
        error(error) {
          console.log(error);
        }
      });

      /* console.log('called');

                var instance = this;
                var formData = new FormData(this.$refs.imageInput);
                formData.append('inputImage', $('input[type=file]')[0].files[0])
                formData.append('ctrln','User Image');
                $.ajax({
                    url: '/api/image',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success(data){
                        instance.image_link =  '/' +  data.location;
                        instance.user.image_id = data.id;
                        console.log(data);
                    },
                    error(error){
                        console.log(error)
                    }
                });*/
    }
    /*  submitVacancy(){ 
                const form = new FormData();
                form.append('image', this.job.bimage, this.job.bimage.name);        
                axios.post('/api/imagetry/save', form
                ).then(function(response){
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
            },*/
  }
};
</script>