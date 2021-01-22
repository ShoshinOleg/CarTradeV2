<template>
    <div class="row no-gutters"> <!--Блок краткого описания сверху-->
        <div class="col-7">
            <div class="row no-gutters "> <!--Название-->
                <h2>{{car.name}}</h2>
            </div>
            <div class="row no-gutters"> <!--Дополнительная информация-->
                <div class="row no-gutters d-inline mr-4"> <!--Дата размещения-->
                    {{car.createdAt}}
                </div>
                <div class="row no-gutters d-inline mr-4"> <!--Количество просмотров-->
                    <i class="fas fa-eye"></i> 99 (3 сегодня)
                </div>
                <div class="row no-gutters d-inline"> <!--Идентификатор объявления-->
                    № {{car.id}}
                </div>  
            </div>
        </div>
        <div class="col-5 text-right"> <!--Блок цены-->
            <div>
                <h2>{{car.formattedPrice}}</h2>
            </div>
            <div>
                от 9 700 ₽ / мес
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "vCarDescriptionTopBar",
    components: {},
    props: ['car']
}
</script>

<style>
</style>