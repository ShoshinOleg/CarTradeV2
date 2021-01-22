<template>
    <section>
        <div class="row no-gutters">
          <div class="input-group mb-3">
            <input class="form-control" type="search" placeholder="Поиск по объявлениям" aria-label="Search" aria-describedby="buttonSearch">
            <div class="input-group-append">
              <button class="btn btn-outline-success" type="button" id="buttonSearch">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-12 pt-3 px-0">
            <h4 >Легковые автомобили</h4>
            <p>5 395 предложений, из них 1 133 размещены только на CarTrade</p>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-12 px-0">
              <b-card no-body border-variant="light" class="noneBlueLink">
                <b-tabs pills card>
                  <b-tab title="Все" active>
                    <b-card-text>
                      <div class="row no-gutters">
                          <div class="col-3 pt-2 company-name" v-for="company in companies" :key="company.id">
                            {{company.name}}
                             <!-- <span class="text-muted">{{company.countCars}}</span> -->
                          </div>
                      </div>
                    </b-card-text>
                  </b-tab>
                  <b-tab title="Новые">
                    <b-card-text>
                      <div class="row no-gutters">
                          <div class="col-3 pt-2" v-for="company in companies" :key="company.id">
                             {{company.name}} <span class="text-muted">{{company.countCars}}</span>
                          </div>
                      </div>
                    </b-card-text>
                  </b-tab>
                  <b-tab title="С пробегом">
                    <b-card-text>
                      <div class="row no-gutters">
                          <div class="col-3 pt-2" v-for="company in companies" :key="company.id">
                             {{company.name}} <span class="text-muted">{{company.countCars}}</span>
                          </div>
                      </div>
                    </b-card-text>
                  </b-tab>
                </b-tabs>
              </b-card>
          </div>
        </div>


        <div class="row no-gutters">
          <div class="col-7">
          </div>
          <div class="col-5">
            <button class="btn btn-primary w-100">Показать 5 367 предложений</button>
          </div>
        </div>

    </section>
</template>

<script>
export default {
  data() {
    return {
      companies: {}
    }
  },
  created() {
    this.$http.get('company')
      .then((response) => {
          this.companies = response.data;
      });
  }
}
</script>

<style>
  .company-name:hover {
    color: #1d9e28;
  }
</style>