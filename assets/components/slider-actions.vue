<template >
    <div class="" >
        <div class="container-fluid px-0  bg-logo d-flex  " >
            <div class="container_news h-100 pb-5" :class="entity_kit.bg" >
                <h3 class="mx-auto text-center py-4 text-light" >{{ name_m }} </h3 >
                <div class="d-flex justify-content-between align-items-center h-100" >
                    <div class="previous px-lg-3 px-1 d-flex align-items-center" @click="moveCarousel(-1)" >

                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 240.823 240.823" style="enable-background:new 0 0 240.823 240.823;"
                             xml:space="preserve" >
                        <g >
                            <path class="card-carousel--nav__left2"
                                  :disabled="atHeadOfList"
                                  id="Chevron_Right" d="M57.633,129.007L165.93,237.268c4.752,4.74,12.451,4.74,17.215,0c4.752-4.74,4.752-12.439,0-17.179
                                l-99.707-99.671l99.695-99.671c4.752-4.74,4.752-12.439,0-17.191c-4.752-4.74-12.463-4.74-17.215,0L57.621,111.816
                                C52.942,116.507,52.942,124.327,57.633,129.007z" />
                        </g >

                        </svg >

                    </div >
                    <div class="container-fluid ofh" >

                        <div class="d-flex card-carousel-cards_wrapper"
                             :style="{ transform: 'translateX' + '(' + currentOffset + 'px' + ')'}" >
                                <div class="news-card-preview" v-for="news_item in entity_items" >
                                    <div class="img-part" >
                                        <img src="/img/news.png" alt="" class="w-100" >
                                    </div >
                                    <div class="part-text " >

                                        <div class="float-left text10" :class="entity_kit.text_color" >
                                            {{ name_m }}
                                        </div >
                                        <div class="action_date float-right text10" >
                                            {{ news_item.date_start }} - {{ news_item.date_finish }}
                                        </div >

                                        <div class=" clear_both text-body pt-3 pb-2 font-weight-bold text12" >
                                            {{ news_item.name }}
                                        </div >
                                        <div class="discr-news-prview text10" >
                                            <span v-html="news_item.short_description" ></span >
                                        </div >
                                    </div >
                                    <router-link :to="'/'+entity_kit.link_name+'/' + news_item.id" class="stretched-link" ></router-link >
                                </div >

                        </div >
                    </div >
                    <div class="previous px-lg-3 px-1 d-flex align-items-center" @click="moveCarousel(1)" >

                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 240.823 240.823" style="enable-background:new 0 0 240.823 240.823;"
                             xml:space="preserve" >
                    <g >
                        <path class="card-carousel--nav__right2"
                              :disabled="atEndOfList"
                              id="Chevron_Right_1_" d="M183.189,111.816L74.892,3.555c-4.752-4.74-12.451-4.74-17.215,0c-4.752,4.74-4.752,12.439,0,17.179
                            l99.707,99.671l-99.695,99.671c-4.752,4.74-4.752,12.439,0,17.191c4.752,4.74,12.463,4.74,17.215,0l108.297-108.261
                            C187.881,124.315,187.881,116.495,183.189,111.816z" />
                    </g >
                    </svg >

                    </div >
                </div >
            </div >
        </div >
    </div >
</template >

<script >
    export default {
        name: "slider-actions",
        props: ['entity_items', 'name_m'],
        data() {
            return {
                currentOffset: 0,
            }
        },
        computed: {
            atEndOfList() {
                return this.currentOffset <= (this.paginationFactor * -1) * (this.entity_items.length - this.windowSize);
            },
            atHeadOfList() {
                return this.currentOffset === 0;
            },
            entity_kit() {
                if (this.name_m == 'Новости') {
                    return {
                        name: 'новостей',
                        bg: 'bg-violet',
                        text_color: 'text-violet',
                        link_name: 'news'
                    }
                } else {
                    return {
                        name: 'акций',
                        bg: 'bg-my-red',
                        text_color: 'text-my-red',
                        link_name: 'action'
                    }
                }
            },
            paginationFactor(){
                if (screen.width<400){
                    return 320
                } else {
                    return 320
                }
            },
            windowSize(){
                if (screen.width<400){
                    return 1
                } else {
                    return 2
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

</style >