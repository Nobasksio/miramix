<template >
    <div >
        <div class="container-fluid px-0" >
            <div class="container-fluid news-up" :class="entity_kit.bg" >
                <div class="container " >
                    <h3 class="mx-auto text-center py-5 text-light" >{{ name }} </h3 >
                    <div class="container d-flex justify-content-center" >
                    </div >

                </div >
            </div >
            <div >

            </div >
            <div class="container-fluid px-0 news-down2 bg-logo d-flex flex-column justify-content-end"
                  >
                <div class="container " >
                    <div class="row row-news justify-content-center" >
                        <div class="news-card col-lg-4 col-12 px-0" v-for="news_item in news.slice(0,show_num)"
                             :ref="'main'+news_item.type+''+news_item.id"
                             v-on:mouseover="mouseon(news_item.type+''+news_item.id,news_item.type)"
                             v-on:mouseout="mouseout(news_item.type+''+news_item.id,news_item.type)">
                            <div class="img-part" :ref="'image'+news_item.type+''+news_item.id">
                                <img :src="'/uploads/file/'+news_item.image"  alt="" class="w-100" >
                            </div >
                            <div class="part-text " >

                                <div class="float-left" :class="entity_kit.text_color" >
                                    {{ name }}
                                </div >
                                <div class="action_date float-right" >
                                    {{ news_item.date }}
                                </div >

                                <div class="text18 clear_both text-body pt-3 pb-2 font-weight-bold" >
                                    {{ news_item.name }}
                                </div >
                                <div class="discr-news" :ref="'text2'+news_item.type+''+news_item.id" >
                                    <span v-html="news_item.short_description" ></span >
                                </div >
                            </div >
                            <router-link :to="'/'+entity_kit.link_name+'/' + news_item.id" class="stretched-link" ></router-link >
                        </div >
                        <div class="container" v-if="news.length > show_num" >
                            <button type="button"
                                    class="btn btn-block rounded-0 btn-outline-danger bg-red-grad mt-5 py-1 px-0 border-2 button_floor_red bg-red-grad"
                                    @click="show_more" >
                                Показать ещё {{entity_kit.name}}
                            </button >
                        </div >
                    </div >

                </div>

                </div >

            </div >
        </div >
</template >

<script >
    export default {
        name: "news-page",
        props: ['news', 'name'],
        data() {
            return {
                show_num: 3,
                more_class: 'news-down2',
                centre_class: 'news-down3'
            }
        },
        methods: {
            show_more() {
                this.show_num += 3;
            },
            need_padding(row) {
                if (((this.news).length - row * 3) <= 0) {
                    return false;
                } else if (row * 3 < this.show_num) {
                }
                else {
                    return true;
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
                this.$refs[image_name][0].style.height = 45+'%';
                this.$refs[main][0].style.height = 550+'px';
                this.$refs[main][0].style.width = 420+'px';
                this.$refs[main][0].style.boxShadow = "0 0 15px "+shadow;
                this.$refs[main][0].style.marginTop = -25+'px';
                this.$refs[main][0].style.marginBottom = -25+'px';
                this.$refs[text_name][0].style.height = 55+'%';
                this.$refs[text2][0].style.height = 140+'px';
            },
            mouseout(ref_name,type) {
                let main = 'main'+ref_name
                let name1 = 'image'+ref_name
                let name2 = 'text'+ref_name
                let name3 = 'text2'+ref_name
                this.$refs[main][0].style.height = 500+'px';
                this.$refs[main][0].style.width = 380+'px';
                this.$refs[main][0].style.marginTop = 0+'px';
                this.$refs[main][0].style.marginBottom = 0+'px';
                this.$refs[main][0].style.boxShadow = "none";
                this.$refs[name1][0].style.height = 65+'%';
                this.$refs[name2][0].style.height = 35+'%';
                this.$refs[name3][0].style.height = 40+'px';
            }
        },
        computed: {
            entity_kit() {
                if (this.name == 'Новости') {
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
            count_row() {

                return Math.ceil((this.news).length / 3)
            },
        }
    }
</script >

<style scoped >

</style >