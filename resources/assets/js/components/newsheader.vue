<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Newsportal</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <router-link to="/" class="nav-link">Home </router-link>
      </li>
       <li class="nav-item active">
        <router-link to="/about" class="nav-link" >About</router-link>
      </li>
       <li class="nav-item active">
         <router-link to="/contact" class="nav-link" >Contact</router-link>
      </li>
       <li class="nav-item active">
        <router-link to="/topnewsretrive" class="nav-link" >Top-News</router-link>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="#">Newscategories</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Media-Integration</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Story</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Interview</a>
      </li>
      <li class="nav-item active">
        <router-link  to="/vacancy" class="nav-link">Opportunity/vaccancy</router-link>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Horoscope</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Tourism and Travels</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Health</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">videos</a>
          <div class="dropdown-divider"></div>
          <router-link to="weather" class="dropdown-item" >weather</router-link>
          <div class="dropdown-divider"></div>
          <router-link to="calender" class="dropdown-item" >Calender</router-link>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
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
