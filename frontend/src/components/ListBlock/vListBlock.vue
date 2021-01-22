<template>
    <div class="vListBlock">
        <div class="row no-gutters">
            <div class="col-3 pt-2 company-name" v-for="(item, index) in arr" :key="item.id" @click="setIndex(index)">
                    {{item.name}}
                <!-- <span class="text-muted">{{company.countCars}}</span> -->
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "vListBlock",
    components: {
    },
    props: ['arr'],
    methods: {
        setIndex(index) {
            this.$emit('setIndex', index);
        }
    }
}
</script>