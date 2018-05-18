<template>
    <div>
        <div class="col-md-6">
            <h1>PLEASE USE THE FORM BELOW TO SEND US YOUR INQUIRY</h1>
            <form method="post" action="#"  v-on:submit.prevent="submitQuery" autocomplete="on" >
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="Name" name="name" v-model="contact.name" v-validate="'required'" >
                    </div>
                        <span v-if="errors.has('name')" class="help-block alert-danger"> 
                            {{  errors.first('name') }}
                        </span>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" placeholder="Title" v-model="contact.title" v-validate="'required'" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Company</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="company" placeholder="Company name" v-model="contact.company" v-validate="'required'"  >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="Email" v-model="contact.email" v-validate="'required'">
                    </div>
                </div>


                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="phone" placeholder="phone" v-model="contact.phone" v-validate="'required'" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">subject</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="subject"  placeholder="subject" v-model="contact.subject" v-validate="'required'" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" name="message" placeholder="subject" v-model="contact.message" v-validate="'required'" ></textarea>
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-sm-10 ">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
                contact : {
                    name:'', //this works as name="name"
                    title:'',
                    company:'',
                    email:'',
                    phone:'',
                    subject:'',
                    message:''    
                }
                
            }
        },
        methods:{
            submitQuery(){
                axios.post('/api/save/query', {
                    contact: this.contact
                }).then(function(response){
                    console.log(response)
                   
                }).catch(function(err){
                    console.log(err)
                })
            }
        }
    }
</script>