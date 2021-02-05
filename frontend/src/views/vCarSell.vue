<template>
    <div class="vCarSell">
        <vHeader/>
        <div class="container px-0">
            <div>
                <span v-if="this.company">
                    {{this.company.name}}
                </span>
                <span v-if="this.model">
                    / {{this.model.name}}
                </span>
                <span v-if="this.year">
                    / {{this.year}}
                </span>
                <span v-if="this.bodyType">
                    / {{this.bodyType.name}}
                </span>
                <span v-if="this.generation">
                    / {{this.generation.name}}
                </span>
                <span v-if="this.drivetrain">
                    / {{this.drivetrain.name}}
                </span>
                <span v-if="this.modification">
                    / {{this.modification.name}} ({{this.modification.engine.power}} л.с.)
                </span>
            </div>

            
            <b v-if="companies.length && !this.company">Марка</b>
            <vListBlock
                v-if="companies.length && !this.company" 
                :arr="companies"
                @setIndex="setCompany"
            />

            <b v-if="models.length && !this.model" >Модель</b>
            <vListBlock
                v-if="models.length && !this.model" 
                :arr="models"
                @setIndex="setModel"
            />
            <b v-if="years.length">Год выпуска</b>
            <b-form-select 
                v-if="years.length"
                v-model="year" 
                :options="years"
                @input = "selectedYear" 
            >
                <b-form-select-option :value="null" disabled>Выберите год</b-form-select-option>
            </b-form-select>
            <b class="pt-3" v-if="bodyTypes.length">Тип кузова</b>
            <vListBlock
                v-if="bodyTypes.length" 
                :arr="bodyTypes"
                @setIndex="setBodyType"
            />
            <b class="pt-3" v-if="generations.length">Поколение</b>
            <vListBlock
                v-if="generations.length" 
                :arr="generations"
                @setIndex="setGeneration"
            />
           <b class="pt-3" v-if="engineTypes.length">Двигатель</b>
            <vListBlock
                v-if="engineTypes.length" 
                :arr="engineTypes"
                @setIndex="setEngineType"
            />
            <b class="pt-3" v-if="drivetrains.length">Привод</b>
            <vListBlock
                v-if="drivetrains.length" 
                :arr="drivetrains"
                @setIndex="setDrivetrain"
            />
            <b class="pt-3" v-if="modifications.length">Модификация</b>
 <!--           <vListBlock
                v-if="modifications.length" 
                :arr="modifications"
                @setIndex="setModification"
            />
-->
            <table v-if="modifications.length" class="table table-bordered table-striped">
                <tbody>
                    <tr v-for="(mod, index) in modifications" :key="mod.id" @click="setModification(index)">
                        <td>
                            <b>{{mod.engine.power}} л.с.</b>
                        </td>
                        <td>
                            {{mod.name}}
                        </td>
                        <td>
                            {{mod.startManufacturing}} - {{mod.endManufacturing}}
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <vFooter/>
    </div>
</template>

<script>
import vHeader from "../components/vHeader"
import vFooter from "../components/vFooter"
import vListBlock from "../components/ListBlock/vListBlock"

export default {
    name: 'vCarSell',
    components: {
        vHeader,
        vListBlock,
        vFooter
    },
    data() {
        return {
            companies: {},
            company: undefined,
            models: {},
            model: undefined,
            years: [],
            year: null,
            bodyTypes: [],
            bodyType: null,
            generations: [],
            generation: null,
            engineTypes: [],
            egineType: null,

            drivetrains: [],
            drivetrain: null,

            modifications: [],
            modification: null,
            combination: null
        }
    },
    created() {
        this.$http.get('company')
            .then((response) => {
                this.companies = response.data;
                console.log(this.companies);
            });
    },
    methods: {
        setCompany(index) {
            console.log(index);
            this.company = this.companies[index];
            this.$http.get('model/by-company', {params: {id: this.company.id}})
                .then((response) => {
                    this.models = response.data;
                    console.log(this.models);
                });
        },
        setModel(index) {
            console.log(index);
            this.model = this.models[index];
            this.$http.get('model/get-manufacturing-years', {params: {id: this.model.id}})
                .then((response) => {
                    this.years = response.data;
                    //this.year = this.years[0];
                    console.log(this.years);
                });
        },
        selectedYear() {
            console.log("selectedYear");
            this.$http.get('body-type/by-model-year', {
                            params: {   modelId: this.model.id,
                                        year: this.year
                                    }
                            }
                        )
                .then((response) => {
                    this.bodyTypes = response.data;
                    console.log(response.data);
                });
        },
        setBodyType(index) {
            this.bodyType = this.bodyTypes[index];
            console.log('setBodyType', index);
            this.$http.get('generation/by-model-year-body', {
                            params: {  
                                modelId: this.model.id,
                                year: this.year,
                                bodyTypeId: this.bodyType.id
                                }
                            }
                )
                .then((response) => {
                    this.generations = response.data;
                    console.log(response.data);
                });
        },
        setGeneration(index) {
            this.generation = this.generations[index];
            console.log('setGeneration', this.generation);
            this.$http.get('engine-type/by-gen-body-year', {
                            params: {  
                                generationId: this.generation.id,
                                bodyTypeId: this.bodyType.id,
                                year: this.year
                                }
                            }
                )
                .then((response) => {
                    this.engineTypes = response.data;
                    console.log(response.data);
                });
        },
        setEngineType(index) {
            this.engineType = this.engineTypes[index];
            console.log('setEngineType', this.engineType);
            this.$http.get('drivetrain/by-gen-body-year-engine-type', {
                            params: {  
                                generationId: this.generation.id,
                                bodyTypeId: this.bodyType.id,
                                year: this.year,
                                engineTypeId: this.engineType.id
                                }
                            }
                )
                .then((response) => {
                    this.drivetrains = response.data;
                    console.log(response.data);
                });
        },

        setDrivetrain(index) {
            this.drivetrain = this.drivetrains[index];
            this.$http.get('modification', {
                params: {  
                    generationId: this.generation.id,
                    bodyTypeId: this.bodyType.id,
                    year: this.year,
                    engineTypeId: this.engineType.id,
                    drivetrainId: this.drivetrain.id
                    }
                }
                )
                .then((response) => {
                    this.modifications = response.data;
                    console.log(response.data);
                });
            console.log('setDrivetrain', this.drivetrain);
        },
        setModification(index) {
            this.modification = this.modifications[index];
            this.$http.get('combination/by-generation-body-modification', {
                params: {  
                    generationId: this.generation.id,
                    bodyTypeId: this.bodyType.id,
                    modificationId: this.modification.id
                    }
                }
                )
                .then((response) => {
                    this.combination = response.data;
                    console.log(response.data);
                });
            console.log('this.combination ', this.combination );
        }
    }
}
</script>