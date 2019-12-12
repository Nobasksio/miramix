<template >
    <div >
        <bread-crumbs
                level_name="null"
                level_link="null"
                page_name="Отделы ТЦ"
        >

        </bread-crumbs >
        <div class="container text-body" >
            <b-modal id="modal-center" size="xl" scrollable hide-footer v-model="show" centered
                     :title="selected_brand.name" >
                <div class="row brand-detail-card" >
                    <div class="col-12 col-lg-6" >
                        <img :src="'/uploads/file/'+selected_brand.image" alt="" class="img-fluid" >
                    </div >
                    <div class="col-12 col-lg-6 pr-5" >
                        <div class="row justify-content-between align-items-center " >
                            <img :src="'/uploads/file/'+selected_brand.logo" alt="" >
                            <div class="px-3">
                                <div class="h4 text-body" >
                                    {{ selected_brand.floor }} ЭТАЖ
                                </div >
                                <div class="" >
                                    <a :href="selected_brand.link" class="link_brand" >{{ selected_brand.link }}</a >
                                </div >
                            </div >
                        </div >
                        <div v-if="selected_brand.map_place != '' ">
                            <router-link :to="'/our_map/'+selected_brand.floor+'/'+selected_brand.map_place" type="button"
                                    class="clearfix btn btn-block rounded-0 btn-outline-danger bg-red-grad my-3 py-1 px-0 border-2 button_floor_red bg-red-grad" >
                                ПОКАЗАТЬ НА КАРТЕ
                            </router-link >
                        </div >
                        <div class="h-75" >
                            <span v-html="selected_brand.description"></span>
                        </div >

                    </div >
                </div >
            </b-modal >
            <div class="category_hr" >
                <div class="width_min_blk d-flex justify-content-between align-items-center mx-auto pb-4" >
                    <div class="text-body" >
                        Магазины
                    </div >
                    <div class="search" >
                        <div class="search-box" >
                            <input type="text" v-model="search_renter" placeholder=" " /><span
                                @click="clean_search()" ></span >
                        </div >
                    </div >
                </div >
            </div >
            <div class="category d-flex justify-content-center py-3" v-if="show_search" >
                <div class="brands-for-deaprtment pb-3" >
                    <div class="category h3 text-body text-center py-3" >
                        Найдено {{ departments_searched.length }}
                    </div >
                    <div class="row my-3 width_min_blk mx-auto" >
                        <div class="brand_item col m-3 " v-for="brand in departments_searched"
                             v-bind:key="brand.id" @click="select_brand(brand)" >
                            <img :src="'/uploads/file/'+brand.logo" alt="" class="h-100" >
                        </div >
                    </div >
                </div >
            </div >
            <div :class="{ 'category-wrapper-active'  : department.open }" v-for="(department, key) in departments" >
                <div class="category d-flex justify-content-center py-3" :ref="'category'+key" :class="'category'+key"
                     @click="openCat(department,key)">
                    <div class="width_min_blk d-flex justify-content-between align-items-center " >
                        <div class="category-name" >
                            {{ department.name }}
                        </div >
                        <div class="icon_dropdown" >
                            <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate': department.open }"viewBox="0 0 54.44 54.44" >
                                <g id="down" :class="'cls-'+key" data-name="Слой 1" >
                                    <path
                                            d="M27.52,35l.07,0,.12,0,.09,0,.09,0,.11-.06a1.18,1.18,0,0,0,.28-.22L38.56,24.34a1.52,1.52,0,0,0,0-2.1,1.47,1.47,0,0,0-2.1,0L28.72,30l-1.51,1.46L25.74,30h0L18,22.23A1.48,1.48,0,0,0,17,21.8a1.47,1.47,0,0,0-1,.43,1.5,1.5,0,0,0,0,2.11L26.17,34.61a1.61,1.61,0,0,0,.38.27l.09,0,0,0h.07l.11,0,.08,0,.27,0A1.35,1.35,0,0,0,27.52,35Z" />
                                    <path d="M27.22,54.44A27.22,27.22,0,1,1,54.44,27.22,27.25,27.25,0,0,1,27.22,54.44ZM27.22,3A24.22,24.22,0,1,0,51.44,27.22,24.25,24.25,0,0,0,27.22,3Z" />
                                </g >
                            </svg >
                        </div >
                    </div >
                </div >
                <transition name="slide-fade" >
                    <div class="brands-for-deaprtment pb-3" v-show="department.open" >
                        <div class="row my-3 width_min_blk mx-auto" >
                            <div class="brand_item col m-3 " v-for="brand in departments_brand(department.id)"
                                 v-bind:key="brand.id" @click="select_brand(brand)" >
                                <img :src="'/uploads/file/'+brand.logo" alt="" class="h-100" >
                            </div >
                        </div >
                    </div >
                </transition >
            </div >
        </div >
    </div >
</template >

<script >
    export default {
        name: "department-list",
        props: ['departments', 'renters'],
        data() {
            return {
                bg_array: [],
                show: false,
                selected_brand: {
                    image: null,
                    logo: null,
                    floor: null,
                    link: null,
                    desritpion: null,
                    name: null
                },
                show_search: false,
                search_renter: null,
                departments_searched: this.renters
            }

        },
        methods: {
            departments_brand(department_id) {
                let renter_arr = [];
                this.renters.forEach(function (item, i, arr1) {
                    item.departments_id.forEach(function (item2) {
                        if (item2 == department_id) {
                            renter_arr.push(item)
                        }
                    })
                });
                return renter_arr;
            },
            select_brand(brand) {
                this.selected_brand = brand
                this.show = true
            },
            clean_search() {
                this.show_search = false
            },
            openCat(department, key){
                let name_ref = 'category'+key

                console.log(name_ref)
                console.log(this.$refs[name_ref])
                if (department.open == true){
                    department.open = false
                    this.$refs[name_ref][0].classList.remove('category'+key+'-active')
                } else {
                    department.open = true
                    this.$refs[name_ref][0].classList.add('category'+key+'-active')
                }
            }
        },
        watch: {
            search_renter: function (new_search, old_serach) {
                if ((new_search == null) || (new_search == '')) {
                    this.show_search = false;
                    this.departments_searched = this.renters;
                } else {


                    let our_array = this.renters.filter(function (renter) {
                        return (renter.name.toUpperCase()).indexOf(new_search.toUpperCase()) != -1
                    })
                    this.departments_searched = our_array;
                    this.show_search = true;
                }
            }
        }
    }
</script >

<style scoped >
    .slide-fade-enter-active {
        height: 0px;

    }

    .slide-fade-enter-to {
        height: 100%;

    }

    .slide-fade-leave-active {
        height: 100%;
    }

    .slide-fade-leave-to {

        height: 0px;
    }
    svg{
        transition-duration: 1s;
        transition-timing-function: ease;

    }
    .rotate{
        /*transition-timing-function: ease-out;*/
        -webkit-transform: rotate(-180deg);
        -ms-transform: rotate(-180deg);
        transform: rotate(-180deg);
    }
</style >