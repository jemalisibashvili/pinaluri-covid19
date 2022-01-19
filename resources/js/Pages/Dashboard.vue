<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="flex">
                        <div class="w-1/2">
                        <h1>world map</h1>
                        <div class='w-full h-96' id="map"></div>
                        </div>
                        <div class="w-1/2">
                        {{ country.todayCases }}
                        {{ country.todayDeaths }}
                        {{ country.todayRecovered }}
                            <div class="p-2 rounded shadow">
                                <h3 class="mt-2 text-xl text-center text-indigo-500">Visited Country</h3>
                                <div class="flex p-6 bg-white border-b border-gray-200">
                                   <div class="flex">
                
                                        <Select2
                                        class=" w-96"
                                        v-model="SelectedVisitedCountry"
                                        :settings="{
                                            width:'100%',
                                            ajax: {
                                                url: '/api/countries/list',
                                                dataType: 'json'
                                            },
                                        }"
                                        
                                       @select="VisitedCountrySelected($event)"
                                        />
                                        
                                        <a href="javascript:void(0);"
                                        @click="addVisitedCountry"
                                        class="px-1 ml-3 text-xl font-semibold text-white bg-green-400 hover:bg-green-500  rounded-xl">add</a>
                                    </div>
                                        

                                </div>
                                    <div v-for="vc in visitedCountries" :key="vc.id" class="mt-5 ">
                                        <div class="block w-full pt-3 mb-1 border-b-2 pt-1 block flex relative">{{ vc.name }}
                                            <a href="javascript:void(0)"
                                            class="flex-1-0"
                                            @click="removeVisitedCountry(vc.id)">
                                              <img class="w-6 right-0 absolute" src="https://img.icons8.com/color/48/000000/delete-forever.png"/></a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';
import Select2 from 'vue3-select2-component';
import axios from 'axios';
export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        Select2,
    },
    data() {
        return {
            SelectedVisitedCountry: '',
            visitedCountries: [],
            map:{},
            country: [],
           
        }
    },
    methods: {
        VisitedCountrySelected({id, text}){
            // console.log({id, text})
        },
    worldCountry() {  axios.get("https://disease.sh/v3/covid-19/all")
    .then((response) => {
        this.country=response.data; 
    } );

    },


        getVisitedCountry(){
            axios.get('/api/countries/visited')
            .then((response) => {
                this.visitedCountries = response.data;
            }).then(() => {
            //
         
            }); 
        },

        
        // addVisitedCountry(){
            
        //     if (this.SelectedVisitedCountry !== '') {
        //         axios.post('/api/add-visited-country',{
        //             countryID: this.SelectedVisitedCountry
        //         }).then((response) => {
        //                 this.map.updateChoropleth({
        //                 [response.data.country_code] : '#ff0000'
        //             });
        //             this.getVisitedCountry();
        //         }).catch(function(error){
        //             console.log(error);
        //         })
        //     }else{
        //         console.log('error');
        //     }
        // },
       addVisitedCountry(){
            
            if (this.SelectedVisitedCountry !== '') {
                axios.post('/api/add-visited-country',{
                    countryID: this.SelectedVisitedCountry
                }).then((response) => {
                    this.getVisitedCountry();
                }).catch(function(error){
                    console.log(error)
                })
            }else{
                console.log('error');
            }
        },
        
        removeVisitedCountry(countryID){
            axios.delete('/api/remove-visited-country/'+countryID)
            .catch(function(error){
                console.log(error);
            }).then(() =>{
                this.getVisitedCountry();
            });
        },
        initMap(){
            var basic_choropleth = new Datamap({
  element: document.getElementById("map"),
  projection: 'mercator',
  fills: {
    defaultFill: "#ABDDA4",
    authorHasTraveledTo: "#fa0fa0"
  },
//   data: {
//     USA: { fillKey: "authorHasTraveledTo" },
//     JPN: { fillKey: "authorHasTraveledTo" },
//     ITA: { fillKey: "authorHasTraveledTo" },
//     CRI: { fillKey: "authorHasTraveledTo" },
//     KOR: { fillKey: "authorHasTraveledTo" },
//     DEU: { fillKey: "authorHasTraveledTo" },
//   }
});
        }
    },
    
    created(){
        this.getVisitedCountry();
        setTimeout(()=> {
        this.initMap();
    }, 1000);
    this.worldCountry();


 

       }
    }


</script>















