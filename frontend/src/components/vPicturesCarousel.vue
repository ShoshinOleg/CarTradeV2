<template>
    <div class="container p-0">
        <div class="col col-12 p-0">
            <div class="customCarousel">
                <img class="customCarousel__cover" :src="coverSrc">
                <div class="customCarousel__button-container" @mouseleave="mouseLeave">
                    <div class="customCarousel__button" v-for="(photo, index) in photos" :key="index" @mouseover="mouseOver(photo)">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'vPicturesCarousel',
    data() {
    return {
      /*photos: [
        require('../assets/img/imgCars/SkodaRapid/SkodaRapid1.webp'),
        require('../assets/img/imgCars/SkodaRapid/SkodaRapid2.webp'),
        require('../assets/img/imgCars/SkodaRapid/SkodaRapid3.webp')
      ],*/
      forceCoverPhoto: null,
      placeholderUrl: "//placehold.it/380x285"
    };
  },
  props: {
    photos: {
      type: Array,
      default() {
        return [];
      }
    }
  },
  computed: {
    coverSrc() {
      return  this.forceCoverPhoto
            ? this.forceCoverPhoto
            : this.photos.length > 0
              ? this.photos[0]
              : this.placeholderUrl;
    }
  },
  methods: {
    mouseOver(photo) {
      this.forceCoverPhoto = photo;
    },
    mouseLeave() {
      this.forceCoverPhoto = null;
    }
  }
}
</script>


<style>
    .customCarousel {
    position: relative;
    }

    .customCarousel__cover {
    max-width: 100%;
    height: auto;
    background-size: cover;
    }

    .customCarousel__button-container {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    /*left: 0;*/
    /*background-color: red;*/
    display: flex;
    }

    .customCarousel:not(:hover) .customCarousel__button {
    opacity: 0;
    }

    .customCarousel__button {
    position: relative;
    flex: 1;
    min-height: 7px; /* другая ширина? */
    opacity: 1;
    transition: opacity .3s;
    }

    .customCarousel__button:after {
    position: absolute;
    bottom: 8px;
    right: 1px;
    left: 1px;
    height: 3px;
    content: "";
    background: rgba(255, 255, 255, 0.7);
    transition: background-color .3s;
    }

    .customCarousel__button:hover:after {
    background-color: rgb(97, 143, 97); /* TODO: brand color */
    }

</style>

