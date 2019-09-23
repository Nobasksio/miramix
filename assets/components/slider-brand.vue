<template >
    <div class="container-fluid" >
        <div class="container ofh px-0 " >
            <div class="container d-flex justify-content-between card-carousel-cards_wrapper px-0"
                 :style="{ transform: 'translateX' + '(' + currentOffset + 'px' + ')'}" >
                <div class="card-brand d-flex flex-column justify-content-between" v-for="brand in brands" >
                    <div class="py-5 border-grey border-bottom h-65 d-flex align-items-center justify-content-center" >
                        <div class="d-flex " >
                            <router-link :to="'/renter/' + brand.id" class="">
                            <img :src="'/uploads/file/'+brand.logo" alt="" class="logo_brand_main align-items-center" >
                            </router-link>
                        </div >

                    </div >
                    <div class="text-center py-2 px-3" >
                    <span v-for="department in brand.departments" >
                        {{ department }}
                    </span >
                    </div >
                    <router-link :to="'/our_map/'+brand.floor+'/'+brand.id+'/'"
                            class="btn btn-block rounded-0 btn-outline-danger py-1 px-0 button_floor_red" >
                        {{brand.floor }} ЭТАЖ
                    </router-link >

                </div >
            </div >
        </div >

        <div class="container px-0" >
            <div class="d-md-none justify-content-between arrow-blc d-flex py-3" >
                <div class="left2 nav-arrow mr-2" @click="moveCarousel(-1)" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.01 16.63" >
                        <title >logoРесурс 2</title >
                        <g id="Слой_2" data-name="Слой 2" >
                            <g id="Слой_1-2" data-name="Слой 1" >
                                <path class="card-carousel--nav__left"
                                      :disabled="atHeadOfList"
                                      d="M.12,7.84l0,.06v0A.43.43,0,0,0,.06,8l0,.08a.14.14,0,0,0,0,.06,1.11,1.11,0,0,0,0,.19,1.38,1.38,0,0,0,0,.22.43.43,0,0,1,0,.05l0,.08s0,0,0,.06l0,.07,0,.07a.72.72,0,0,0,.16.2l7.26,7.27a1.08,1.08,0,0,0,1.49,0,1,1,0,0,0,.31-.74,1.06,1.06,0,0,0-.31-.75L3.59,9.37H28a1.05,1.05,0,1,0,0-2.1H3.58L9.06,1.79a1,1,0,0,0,0-1.48,1.06,1.06,0,0,0-1.49,0L.31,7.57A1.17,1.17,0,0,0,.12,7.84Z" />
                            </g >
                        </g >
                    </svg >
                </div >
                <div class="right2 nav-arrow mr-2"
                     @click="moveCarousel(1)" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.01 16.63" >
                        <defs >
                        </defs >
                        <title >logoРесурс 1</title >
                        <g id="Слой_2" data-name="Слой 2" >
                            <g id="Слой_1-2" data-name="Слой 1" >
                                <path class="card-carousel--nav__right" :disabled="atEndOfList"
                                      d="M28.89,8.79l0-.07v0a.1.1,0,0,0,0,0l0-.08s0,0,0-.06a1.23,1.23,0,0,0,0-.19,1.38,1.38,0,0,0,0-.22s0,0,0,0L29,8a.14.14,0,0,0,0-.07l0-.06,0-.08a1.26,1.26,0,0,0-.16-.2L21.44.3A1.08,1.08,0,0,0,20,.3a1,1,0,0,0-.31.74,1,1,0,0,0,.31.74l5.47,5.48H1.05a1,1,0,0,0,0,2.1H25.43L20,14.83a1.06,1.06,0,0,0-.31.75,1,1,0,0,0,.31.74,1.06,1.06,0,0,0,1.49,0L28.7,9.05A1.09,1.09,0,0,0,28.89,8.79Z" />
                            </g >
                        </g >
                    </svg >
                </div >
            </div >
            <div class="justify-content-end arrow-blc d-none d-md-flex pt-3" >
                <div class="left2 nav-arrow mr-2" @click="moveCarousel(-1)" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.01 16.63">
                        <title>logoРесурс 2</title>
                        <g id="Слой_2" data-name="Слой 2">
                            <g id="Слой_1-2" data-name="Слой 1">
                                <path class="card-carousel--nav__left"
                                      :disabled="atHeadOfList"
                                        d="M.12,7.84l0,.06v0A.43.43,0,0,0,.06,8l0,.08a.14.14,0,0,0,0,.06,1.11,1.11,0,0,0,0,.19,1.38,1.38,0,0,0,0,.22.43.43,0,0,1,0,.05l0,.08s0,0,0,.06l0,.07,0,.07a.72.72,0,0,0,.16.2l7.26,7.27a1.08,1.08,0,0,0,1.49,0,1,1,0,0,0,.31-.74,1.06,1.06,0,0,0-.31-.75L3.59,9.37H28a1.05,1.05,0,1,0,0-2.1H3.58L9.06,1.79a1,1,0,0,0,0-1.48,1.06,1.06,0,0,0-1.49,0L.31,7.57A1.17,1.17,0,0,0,.12,7.84Z"/>
                            </g>
                        </g>
                    </svg>
                </div >
                <div class="right2 nav-arrow mr-2"
                     @click="moveCarousel(1)" >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.01 16.63">
                        <defs>
                        </defs>
                        <title>logoРесурс 1</title>
                        <g id="Слой_2" data-name="Слой 2">
                            <g id="Слой_1-2" data-name="Слой 1">
                                <path class="card-carousel--nav__right" :disabled="atEndOfList"
                                        d="M28.89,8.79l0-.07v0a.1.1,0,0,0,0,0l0-.08s0,0,0-.06a1.23,1.23,0,0,0,0-.19,1.38,1.38,0,0,0,0-.22s0,0,0,0L29,8a.14.14,0,0,0,0-.07l0-.06,0-.08a1.26,1.26,0,0,0-.16-.2L21.44.3A1.08,1.08,0,0,0,20,.3a1,1,0,0,0-.31.74,1,1,0,0,0,.31.74l5.47,5.48H1.05a1,1,0,0,0,0,2.1H25.43L20,14.83a1.06,1.06,0,0,0-.31.75,1,1,0,0,0,.31.74,1.06,1.06,0,0,0,1.49,0L28.7,9.05A1.09,1.09,0,0,0,28.89,8.79Z"/>
                            </g>
                        </g>
                    </svg>
                </div >
            </div >
            <router-link to='/department' type="button"
                    class="clearfix btn btn-block rounded-0 btn-outline-danger bg-red-grad mb-lg-5  mt-lg-3 my-3 py-1 px-0 border-2 button_floor_red bg-red-grad" >
                Смотреть все отделы
            </router-link >
        </div >

    </div >
</template >

<script >
    export default {
        name: "slider-brand",
        props: ['brands'],
        data() {
            return {
                currentOffset: 0,

            }
        },
        computed: {
            atEndOfList() {
                return this.currentOffset <= (this.paginationFactor * -1) * (this.brands.length - this.windowSize);
            },
            atHeadOfList() {
                return this.currentOffset === 0;
            },
            paginationFactor(){
                if (screen.width<400){
                    return 340
                } else {
                    return 240
                }
            },
            windowSize(){
                if (screen.width<400){
                    return 1
                } else {
                    return 5
                }
            }
        },
        methods: {
            moveCarousel(direction) {
                // Find a more elegant way to express the :style. consider using props to make it truly generic
                if (direction === 1 && !this.atEndOfList) {
                    this.currentOffset -= this.paginationFactor;
                } else if (direction === -1 && !this.atHeadOfList) {
                    this.currentOffset += this.paginationFactor;
                }
            },
            oncursor() {

            }

        }

    }
</script >

<style scoped >
    .nav-arrow {
        width: 30px;
    }
</style >