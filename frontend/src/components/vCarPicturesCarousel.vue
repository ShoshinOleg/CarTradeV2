<template>
    <div v-if="this.carId">
        <vPicturesCarousel v-if="carImagesPaths.length > 0" :photos="this.carImagesPaths"/>
    </div>
</template>

<script>
import vPicturesCarousel from "./vPicturesCarousel"
export default {
    name: 'vCarPicturesCarousel',
    components: {
        vPicturesCarousel
    },
    props: {
        carId: null,
    },
    data() {
        return {
            carImagesDesc: [],
            carImagesPaths: []
        }
    },
    created() {
        this.$http.get('images/get-list-images-by-ad', {params: {adId: this.carId}})
            .then((response) => {
                this.carImagesDesc = response.data;
                this.carImagesPaths = [];
                this.carImagesDesc.forEach(element => {
                    this.carImagesPaths.push("http://localhost:1199/v1/images?id=" + element.id);
                });
            }
            );
    }
}
</script>