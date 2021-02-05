<template>
    <b-container class="py-4 px-0">
        <b-carousel
        indicators
        controls
        no-wrap
        >
            <b-carousel-slide>
                <template slot="img">
                    <b-row>
                        <vCarCard v-for="car in cars" :key="car.id" :car="car"/>
                    </b-row>
                </template>
            </b-carousel-slide>
            <b-carousel-slide>
                <template slot="img">
                    <b-row>
                        <vCarCard v-for="car in cars" :key="car.id" :car="car"/>
                    </b-row>
                </template>
            </b-carousel-slide>
        </b-carousel>
    </b-container>
</template>

<script>
import vCarCard from "./vCarCard"

export default {
    name: "vCarsCarousel",
    components: {
        vCarCard
    },
    props: [
        'cars'
    ]
}
</script>

<style>
    .carousel-indicators li {
        background-color: black;
    }
</style>