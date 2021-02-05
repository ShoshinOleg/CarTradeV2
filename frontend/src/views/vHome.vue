<template>
    <div class="vHome">
        <vHeader/>
        <div class="container px-0">
            <div class="container px-0">
                <div class="row no-gutters pt-3"> <!--search cars-->
                    <div class="col-9">
                        <vCarSearchBlock/>
                    </div>
                </div>
            </div>
            <h2>Избранное</h2>
            <vCarCardsCarousel :cars="cars"/>
            <h2>Просмотренные</h2>
            <vCarCardsCarousel :cars="cars"/>
        </div>
        <vFooter/>
    </div>
</template>

<script>
    import vHeader from "../components/vHeader"
    import vCarSearchBlock from "../components/vCarSearchBlock"
    import vCarCardsCarousel from "../components/vCarCardsCarousel"
    import vFooter from "../components/vFooter"

    export default {
        name: "vHome",
        components: {
            vHeader,
            vCarSearchBlock,
            vCarCardsCarousel,
            vFooter
        },
        data() {
            return {
                cars: [],
                img: null
            }
        },
        created() {
            this.$http.get('car/index')
                .then((response) => this.cars = response.data);
        }
    }
</script>
