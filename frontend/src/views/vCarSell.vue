<template>
    <div class="vCarSell">
        <vHeader/>
        <div class="container px-0">
            <span v-if="this.company">
                {{this.company.name}}
            </span>
            <span v-if="this.model">
                / {{this.model.name}}
            </span>
            <vListBlock
                v-if="companies.length && !this.company" 
                :arr="companies"
                @setIndex="setCompany"
            />

            <vListBlock
                v-if="models.length && !this.model" 
                :arr="models"
                @setIndex="setModel"
            />
            <h4 v-if="years.length">Год выпуска</h4>
            <b-form-select 
                v-if="years.length"
                v-model="year" 
                :options="years"
                @input = "selectedYear" 
            >
                <b-form-select-option :value="null" disabled>Выберите год</b-form-select-option>
            </b-form-select>
            <h4 class="pt-2" v-if="bodyTypes.length">Тип кузова</h4>
            <vListBlock
                v-if="bodyTypes.length" 
                :arr="bodyTypes"
                @setIndex="setBodyType"
            />

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
            bodyType: null
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
            this.$http.get('company/models', {params: {id: this.company.id}})
                .then((response) => {
                    this.models = response.data;
                    console.log(this.models);
                });
        },
        setModel(index) {
            console.log(index);
            this.model = this.models[index];
            this.$http.get('model/years', {params: {id: this.model.id}})
                .then((response) => {
                    this.years = response.data;
                    //this.year = this.years[0];
                    console.log(this.years);
                });
        },
        selectedYear() {
            console.log("selectedYear");
            this.$http.get('model/body', {params: {modelId: this.model.id,
                                                    year: this.year
                                                    }}
                            )
                .then((response) => {
                    this.bodyTypes = response.data;
                    console.log(response.data);
                });
        },
        setBodyType(index) {
            this.bodyType = this.bodyTypes[index];
            console.log('setBodyType', index);
        }
    }
}
</script>