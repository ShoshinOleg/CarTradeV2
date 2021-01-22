<template>
    <div>
        <div class="row no-gutters">
            <div class="col-5 text-muted">Год выпуска</div>
            <div class="col-7">{{car.year}}</div>
        </div>
        <div class="row no-gutters">
            <div class="col-5 text-muted">Пробег</div>
            <div class="col-7">{{car.odometer}} км</div>
        </div>
        <div v-if="car.combination"> <!--если так не сделать, то вылетает ошибка-->
            <div class="row no-gutters">
                <div class="col-5 text-muted">Кузов</div>
                <div class="col-7">{{car.combination.bodyType.name}}</div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 text-muted">Цвет</div>
                <div class="col-7">{{car.color.name}}</div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 text-muted">Двигатель</div>
                <div class="col-7">{{car.combination.modification.engine.volume}} л /
                    {{car.combination.modification.engine.power}} л.с. /
                    {{car.combination.modification.engine.engineType.name}}</div>
            </div>
            <div class="row no-gutters">
                <div class="col-5 text-muted">Привод</div>
                <div class="col-7">{{car.combination.modification.drivetrain.name}}</div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-5 text-muted">Владельцы</div>
            <div class="col-7">{{car.countOwners}}</div>
        </div>
        
        <!--<div class="row no-gutters">
            <div class="col-5 text-muted">Налог</div>
            <div class="col-7">---- ₽ / год</div>
        </div>
        <div class="row no-gutters">
            <div class="col-5 text-muted">Руль</div>
            <div class="col-7"> --- </div>
        </div>
        <div class="row no-gutters">
            <div class="col-5 text-muted">Состояние</div>
            <div class="col-7"> --- </div>
        </div>
        <div class="row no-gutters">
            <div class="col-5 text-muted">ПТС</div>
            <div class="col-7">---</div>
        </div>
        <div class="row no-gutters">
            <div class="col-5 text-muted">Таможня</div>
            <div class="col-7">---</div>
        </div>
        <div class="row no-gutters">
            <div class="col-5 text-muted">Обмен</div>
            <div class="col-7">---</div>
        </div>
        <div class="row no-gutters">
            <div class="col-5 text-muted">VIN</div>
            <div class="col-7">---</div>
        </div> -->
    </div>
</template>

<script>

export default {
    name: "vCarPropertyList",
    components: {},
    props: [
        'car'
    ]
}
</script>

<style>
</style>