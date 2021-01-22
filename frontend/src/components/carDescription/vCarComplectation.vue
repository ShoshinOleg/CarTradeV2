<template>
    <div> <!--Комплектация-->
        <h3 class="pt-3">Комплектация</h3>
        <div> <!--Раздел комплектации-->
            <div class="container px-0">
                    <div class="row no-gutters justify-content-between" v-b-toggle.collapse-1>
                        <div class="col-6">Безопасность</div>
                        <div class="col-6 text-right">2</div>
                    </div>
                    <hr>
                    <b-collapse id="collapse-1" class="mt-3">
                        <div class="row no-gutters">
                            <div class="col-6 text-muted">
                                Подушка безопасности водителя
                            </div>
                            <div class="col-6 text-muted">          
                                Антиблокировочная система (ABS)
                            </div>
                        </div>
                    </b-collapse>
            </div>
        </div>
    </div> <!--Комплектация-->
</template>

<script>

export default {
    name: "vCarComplectation",
    components: {},
    props: []
}
</script>

<style>
</style>