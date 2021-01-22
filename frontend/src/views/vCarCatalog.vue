<template>
    <div class="vCarCatalog">
        <vHeader/>
        <div class="container px-0">
            <div class="row no-gutters pt-3"> <!--search cars-->
                <div class="col-9">
                    <vCarSearchBlock/>
                    <div class="container px-0 mt-4"> <!--Список объявлений-->
                        <div v-for="car in cars" :key="car.id">
                            <hr>
                            <vShortCarDescription :car="car"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <vFooter/>
    </div>
</template>

<script>
import vHeader from "../components/vHeader"
import vCarSearchBlock from "../components/vCarSearchBlock"
import vShortCarDescription from "../components/vShortCarDescription"
import vFooter from "../components/vFooter"

export default {
    name: 'vCarCatalog',
    components: {
        vHeader,
        vCarSearchBlock,
        vShortCarDescription,
        vFooter
    },
    data() {
        return {
            cars: []
        }
    },
    created() {
        this.$http.get('car')
            .then((response) => this.cars = response.data)
    }
}
</script>