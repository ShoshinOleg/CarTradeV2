<template>
    <router-link class="linkedCard" :to="{name: 'vCarDescription', params: {id: car.id}}">
        <div class="row no-gutters"> <!--Объявление-->
            <div class="col-4">
                <vCarPicturesCarousel v-if="this.car.id" :carId="this.car.id"/>
            </div>
            
            <div class="col-8 pl-1"> <!--Правая часть элемента-->
                <div class="row no-gutters ">
                    <div class="col-8 p-0"> <!--Описание-->
                        <div class="row no-gutters">
                            <div class="col-8 ">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <strong>{{car.name}}</strong>
                                    </div>
                                </div>
                                <div class="row no-gutters carDescription">
                                    <div class="col-8 pt-1">
                                        <div class="row no-gutters">{{car.combination.modification.engine.volume}} л. /
                                             {{car.combination.modification.engine.power}} л.с. / 
                                             {{car.combination.modification.engine.engineType.name}}</div>
                                        <div class="row no-gutters">{{car.combination.modification.transmission.name}}</div>
                                        <div class="row no-gutters">{{car.combination.bodyType.name}}</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row no-gutters">{{car.combination.modification.drivetrain.name}}</div>
                                        <div class="row no-gutters">{{car.color.name}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 pl-1"> <!--Цена, бэйдж - хорошая цена, расчет кредита-->
                                <strong>{{car.price}} ₽</strong>
                                <span class="badge badge-info">Хорошая цена</span>
                            </div>
                        </div>
                        <div class="row no-gutters mt-2"> <!--Badges-->
                            <span class="badge badge-secondary mr-1">Только на CarTrade</span>
                            <span class="badge badge-primary mr-1">От собственника</span>
                            <span class="badge badge-warning mr-1">Отчет по VIN</span>
                        </div>
                        <div class="row no-gutters"> <!--Дополнительное(место, время публикации)-->

                        </div>
                        
                    </div>
                    <div class="col-4"> <!--Год/пробег-->
                        <div class="row no-gutters">
                            <div class="col-6">{{car.year}}</div>
                            <div class="col-6">{{car.odometer}} км</div>
                        </div>
                        
                    </div>
                </div> 
            </div>
        </div> <!--/Объявление-->
    </router-link>
    
</template>

<script>
import vCarPicturesCarousel from "./vCarPicturesCarousel"

export default {
    name: 'vShortCarDescription',
    components: {
        vCarPicturesCarousel
    },
    props: {
        car: {},
    },
}
</script>