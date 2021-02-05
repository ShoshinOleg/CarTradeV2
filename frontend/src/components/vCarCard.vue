<template>
    <router-link :to="{name: 'vCarDescription'}" class="linkedCard col-md-4 col-sm-6 col-xs-12 pxs-0">
        <b-card
            tag="article"
            no-body
        >
            <b-card-body class="px-0">
                <vCarPicturesCarousel v-if="this.car.id" :carId="this.car.id"/>
                <b-card-title class="pt-2">{{car.name}}, {{car.year}}</b-card-title>
                <b-card-text>{{car.price}} ₽</b-card-text>
            </b-card-body>
        </b-card>
    </router-link>
</template>

<script>
import vCarPicturesCarousel from "./vCarPicturesCarousel"

export default {
    name: "vCard",
    components: {
        vCarPicturesCarousel
    },
    props: ['car']
}
</script>