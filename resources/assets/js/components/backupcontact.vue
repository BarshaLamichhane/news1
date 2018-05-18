<template>
    <div>
        <div class="col-md-6">
            <h1>PLEASE USE THE FORM BELOW TO SEND US YOUR INQUIRY</h1>
            <form >
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control"  placeholder="Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Company</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="Company name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control"  placeholder="Email">
                    </div>
                </div>


                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control"  placeholder="phone">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">subject</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  placeholder="subject">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" rows="10" placeholder="subject"></textarea>
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
    export default{
        data(){
            return{

            }
        }
    }
   
</script>