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
                <vPicturesCarousel/>
                <vCarComment/>
                <vCarComplectation/>
            </div>
        </div> <!--/Тело объявления-->
    </div>
</template>

<script>
import vPicturesCarousel from "../vPicturesCarousel"
import vCarPropertiesList from "./vCarPropertiesList"
import vCarDescriptionTopBar from "./vCarDescriptionTopBar"
import vCarOwnerDescription from "./vCarOwnerDescription"
import vCarComplectation from "./vCarComplectation"
import vCarComment from "./vCarComment"

export default {
    name: "vCarDescriptionBody",
    components: {
        vPicturesCarousel,
        vCarPropertiesList,
        vCarDescriptionTopBar,
        vCarOwnerDescription,
        vCarComplectation,
        vCarComment,
    },
    props: ['car'],
}
</script>

<style>
</style>