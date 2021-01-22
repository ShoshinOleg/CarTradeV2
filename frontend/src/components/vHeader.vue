<template>
      <header class="mainHeader">
    <div class="container py-0 d-flex justify-content-between">
      <nav class="navbar navbar-expand-lg navbar-light bg-light px-0 pb-0">
        <router-link class="navbar-brand" :to="{name: 'vHome'}">CarTrade</router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <router-link class="nav-link" :to="{name: 'vCarCatalog'}">Легковые</router-link>
            </li>
            <li class="nav-item">
                <router-link class="nav-link" :to="{name: 'vCarSell'}">Продать</router-link>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Коммерческие</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Мото</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Запчасти</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Отчеты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Журнал</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="dropdown">
        <router-link :to="{name: 'vProfile'}">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-alt"></i> MyNickName
            </button>
        </router-link>

        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <a class="dropdown-item" href="profile.html">Настройки</a>
          <a class="dropdown-item" href="#">Объявления</a>
          <a class="dropdown-item" href="#">Отзывы</a>
        </div>
      </div> 
    </div>
    <hr class="py-0"> 
  </header>
</template>

<script>
    export default {
        name: "vHeader"  
    }
</script>