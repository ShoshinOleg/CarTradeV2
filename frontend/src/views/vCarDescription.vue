<template>
    <div class="vCarDescription">
        <vHeader/>
        <div class="container px-0"> <!--Main container-->
            <div class="row no-gutters">
                <vCarDescriptionBody :car="car"/>
                <div class="col-3"> <!--Правая часть (колонка для рекламы)-->
                    Тут должна быть реклама
                </div>
            </div>
        </div><!--Main container-->
        <vFooter/>
    </div>
</template>

<script>
import vHeader from "../components/vHeader"
import vFooter from "../components/vFooter"
import vCarDescriptionBody from "../components/carDescription/vCarDescriptionBody"



export default {
    name: 'vCarDescription',
    components: {
        vHeader,
        vCarDescriptionBody,
        vFooter
    },
    created(){
        const carId = this.$route.params.id;
        this.$http.get('car/list', {params: {id: carId}})
            .then((response) => {
                this.car = response.data;
            });
    },
    data() {
        return {
            car: {}
        }
    }
}
</script>