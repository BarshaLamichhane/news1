<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <router-link to="#" class="navbar-brand" >Opportunties</router-link>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <router-link to="vhome" class="nav-link">Home </router-link>
      </li>
       <li class="nav-item active">
        <router-link to="/career" class="nav-link" >Career Resources</router-link>
      </li>
       <li class="nav-item active">
         <router-link to="/trainings" class="nav-link" >Trainings</router-link>
      </li>
       <li class="nav-item active">
        <router-link to="/tender" class="nav-link" >Tender Announcement</router-link>
      </li>
       <li class="nav-item active">
        <router-link to="/postjob" class="nav-link">Post Job</router-link>
      </li>
      <li class="nav-item active">
        <router-link to="/imagetry" class="nav-link">Image Try</router-link>
      </li>
       <li class="nav-item active">
        <router-link to="/googlemap" class="nav-link">Google map</router-link>
      </li>
      <li class="nav-item active">
        <router-link  to="/register" class="nav-link" >Register</router-link>
      </li>
      <li class="nav-item active">
        <router-link to="/login" class="nav-link">log in</router-link>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Interview</a>
      </li> 
    </ul>
  </div>
</nav>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
