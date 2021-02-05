<template>
    <div class="col-9 pr-3"> <!--Левая часть (Основная часть)-->
        <vCarDescriptionTopBar :car="car"/>
        <vCarOwnerDescription/>
        <div class="row no-gutters"> <!--Тело объявления-->
            <div class="col-4 pr-3"> <!--Левая часть тела объявления-->
                <vCarPropertiesList :car="car" />
                <div class="bg-success text-white text-center rounded py-2 my-2">
                    Показать VIN
                </div>
                <hr>
                <a href="#">Характеристики модели в каталоге</a>
            </div> <!--/Левая часть тела объявления-->
            <div class="col-8"> <!--Правая часть тела объявления-->
                <vCarPicturesCarousel v-if="this.car.id" :carId="this.car.id"/>
                <!--<vPicturesCarousel v-if="carImagesPaths.length > 0" :photos="this.carImagesPaths"/>-->
                <vCarComment/>
                <vCarComplectation/>
                <!--<img v-for="(path, index) in carImagesPaths" :key="index"
                    :src="path"> -->
                    
            </div>
        </div> <!--/Тело объявления-->
    </div>
</template>

<script>
import vCarPicturesCarousel from "../vCarPicturesCarousel"
import vCarPropertiesList from "./vCarPropertiesList"
import vCarDescriptionTopBar from "./vCarDescriptionTopBar"
import vCarOwnerDescription from "./vCarOwnerDescription"
import vCarComplectation from "./vCarComplectation"
import vCarComment from "./vCarComment"

export default {
    name: "vCarDescriptionBody",
    components: {
        vCarPicturesCarousel,
        vCarPropertiesList,
        vCarDescriptionTopBar,
        vCarOwnerDescription,
        vCarComplectation,
        vCarComment,
    },
    props: {
        car: {},
    },
    
    /*data() {
        return {
            carImagesDesc: [],
            carImagesPaths: [],
            path: "http://localhost:1199/v1/images?id=1",
            image: undefined
        }
    },
    updated() {
        if(this.car.id && this.carImagesDesc.length == 0) {
            console.log('updated car.id', this.car.id);
            this.$http.get('images/get-list-images-by-ad', {params: {adId: this.car.id}})
                .then((response) => {
                    this.carImagesDesc = response.data;
                    console.log(this.carImagesDesc);
                    this.carImagesPaths = [];
                    this.carImagesDesc.forEach(element => {
                        this.carImagesPaths.push("http://localhost:1199/v1/images?id=" + element.id);
                    });
                    console.log(this.carImagesPaths);

                }
                );
        }
        
    }
    */
}
</script>

<style>
</style>