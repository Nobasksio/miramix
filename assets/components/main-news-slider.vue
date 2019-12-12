<template >
    <div class="container-fluid px-0" >
        <div class="container-fluid news-up px-0" >
            <div class="container px-0 " >
                <h3 class="mx-auto text-center pt-2 pb-4" >Новости и акции</h3 >
                <div class="container-news  mx-auto px-0" ref="wrapper">
                    <div class=" d-flex px-0 card-carousel-cards_wrapper"
                         :style="{ transform: 'translateX' + '(' + currentOffset + 'px' + ')'}" >
                            <div class="news-card"  v-for="news_item in news"
                                 :ref="'main'+news_item.type+''+news_item.id"
                                 v-on:mouseover="mouseon(news_item.type+''+news_item.id,news_item.type)"
                                 v-on:mouseout="mouseout(news_item.type+''+news_item.id,news_item.type)">
                                <div class="img-part" :ref="'image'+news_item.type+''+news_item.id" >
                                    <img :src="'/uploads/file/'+news_item.image" alt="" class="w-100" >
                                </div >
                                <div class="part-text ofh" :ref="'text'+news_item.type+''+news_item.id" >

                                    <div class="text-danger float-left" v-if="news_item.type=='action'" >
                                        АКЦИИ
                                    </div >
                                    <div class="text-violet float-left" v-else >
                                        НОВОСТИ
                                    </div >
                                    <div class="action_date float-right" >
                                        {{ news_item.date }}
                                    </div >

                                    <div class="text18 clear_both text-body pt-3 pb-2 font-weight-bold" >
                                        {{ news_item.name }}
                                    </div >
                                    <div class="discr-news ofh" :ref="'text2'+news_item.type+''+news_item.id" >
                                        <span v-html="news_item.short_description" ></span >
                                    </div >
                                </div >
                                <router-link :to="'/'+news_item.type+'/' + news_item.id" class="stretched-link" ></router-link >
                            </div >
                    </div >
                </div >
            </div >
        </div >

        <div class="container-fluid px-md-0 bg-blue-grad news-down d-flex flex-column justify-content-end" >
            <div class="container px-0 container-news " >
                <div class="d-md-none justify-content-between arrow-blc d-flex py-3" >
                    <div class="left2 nav-arrow mr-2" @click="moveCarousel(-1)" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.01 16.63" >
                            <title >logoРесурс 2</title >
                            <g id="Слой_2" data-name="Слой 2" >
                                <g id="Слой_1-2" data-name="Слой 1" >
                                    <path class="card-carousel--nav__left2"
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
                                    <path class="card-carousel--nav__right2" :disabled="atEndOfList"
                                          d="M28.89,8.79l0-.07v0a.1.1,0,0,0,0,0l0-.08s0,0,0-.06a1.23,1.23,0,0,0,0-.19,1.38,1.38,0,0,0,0-.22s0,0,0,0L29,8a.14.14,0,0,0,0-.07l0-.06,0-.08a1.26,1.26,0,0,0-.16-.2L21.44.3A1.08,1.08,0,0,0,20,.3a1,1,0,0,0-.31.74,1,1,0,0,0,.31.74l5.47,5.48H1.05a1,1,0,0,0,0,2.1H25.43L20,14.83a1.06,1.06,0,0,0-.31.75,1,1,0,0,0,.31.74,1.06,1.06,0,0,0,1.49,0L28.7,9.05A1.09,1.09,0,0,0,28.89,8.79Z" />
                                </g >
                            </g >
                        </svg >
                    </div >
                </div >
                <router-link to="/news"
                   class="btn btn-news btn-block btn-outline-light mb-4 mx-auto py-1 px-0 rounded-0" >
                    СМОТРЕТЬ ВСЁ
                </router-link >
                <div class=" justify-content-end arrow-blc d-none d-md-flex" >
                    <div class="left2 nav-arrow mr-2" @click="moveCarousel(-1)" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.01 16.63" >
                            <title >logoРесурс 2</title >
                            <g id="Слой_2" data-name="Слой 2" >
                                <g id="Слой_1-2" data-name="Слой 1" >
                                    <path class="card-carousel--nav__left2"
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
                                    <path class="card-carousel--nav__right2" :disabled="atEndOfList"
                                          d="M28.89,8.79l0-.07v0a.1.1,0,0,0,0,0l0-.08s0,0,0-.06a1.23,1.23,0,0,0,0-.19,1.38,1.38,0,0,0,0-.22s0,0,0,0L29,8a.14.14,0,0,0,0-.07l0-.06,0-.08a1.26,1.26,0,0,0-.16-.2L21.44.3A1.08,1.08,0,0,0,20,.3a1,1,0,0,0-.31.74,1,1,0,0,0,.31.74l5.47,5.48H1.05a1,1,0,0,0,0,2.1H25.43L20,14.83a1.06,1.06,0,0,0-.31.75,1,1,0,0,0,.31.74,1.06,1.06,0,0,0,1.49,0L28.7,9.05A1.09,1.09,0,0,0,28.89,8.79Z" />
                                </g >
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
        name: "main-news-slider",
        props: ['news'],
        data() {
            return {
                currentOffset: 0,

            }
        },
        computed: {
            atEndOfList() {
                return this.currentOffset <= (this.paginationFactor * -1) * (this.news.length - this.windowSize);
            },
            atHeadOfList() {
                return this.currentOffset === 0;
            },

            paginationFactor(){
                if (screen.width<400){
                    return 315
                } else{
                    return 380
                }
            },
            windowSize(){
                if (screen.width<400){
                    return 1
                }  else if (screen.width<1140){
                    return 2
                } else {
                    return 3
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
            mouseon(ref_name,type) {

                let main = 'main'+ref_name
                let image_name = 'image'+ref_name
                let text_name = 'text'+ref_name
                let text2 = 'text2'+ref_name
                let shadow = '#d0172c';

                if (type == 'news'){
                    shadow = '#55408c'
                }
                this.$refs['wrapper'].style.paddingTop = 40+'px'
                this.$refs['wrapper'].style.paddingBottom = 40+'px'
                this.$refs['wrapper'].style.marginTop = -40+'px'
                this.$refs['wrapper'].style.marginBottom = -40+'px'
                this.$refs[image_name][0].style.height = 45+'%';
                this.$refs[main][0].style.height = 550+'px';
                this.$refs[main][0].style.width = 420+'px';
                this.$refs[main][0].style.boxShadow = "0 0 15px "+shadow;
                this.$refs[main][0].style.marginTop = -25+'px';
                this.$refs[main][0].style.marginBottom = -25+'px';
                this.$refs[text_name][0].style.height = 55+'%';
                this.$refs[text2][0].style.height = 120+'px';
            },
            mouseout(ref_name,type) {
                let main = 'main'+ref_name
                let name1 = 'image'+ref_name
                let name2 = 'text'+ref_name
                let name3 = 'text2'+ref_name
                this.$refs['wrapper'].style.paddingTop = 0+'px'
                this.$refs['wrapper'].style.marginTop = 0+'px'
                this.$refs['wrapper'].style.paddingBottom = 0+'px'
                this.$refs['wrapper'].style.marginBottom = 0+'px'
                this.$refs[main][0].style.height = 500+'px';
                this.$refs[main][0].style.width = 380+'px';
                this.$refs[main][0].style.marginTop = 0+'px';
                this.$refs[main][0].style.marginBottom = 0+'px';
                this.$refs[main][0].style.boxShadow = "none";
                this.$refs[name1][0].style.height = 65+'%';
                this.$refs[name2][0].style.height = 35+'%';
                this.$refs[name3][0].style.height = 40+'px';
            }

        }
    }
</script >

<style scoped >
    .nav-arrow {
        width: 30px;
    }
    @media (min-width: 401px) {
        .arrow-blc {
            width: 100px;
            float: right;
            margin-top: -50px;
        }
    }
    @media (max-width: 400px) {
        .arrow-blc {
            width: 100%;
            margin-top: 50px;
        }
    }


</style >