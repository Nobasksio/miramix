<template >
    <div >
        <div class="container-fluid px-0" v-for="n in count_row" v-if="show_num >= n*3" >
            <div class="container-fluid news-up" :class="entity_kit.bg" >
                <div class="container " >
                    <h3 class="mx-auto text-center py-5 text-light" >{{ name }} </h3 >
                    <div class="container d-flex justify-content-center" >
                        <div class="row" >
                            <div class="news-card col-lg-4 col-12 " v-for="news_item in news.slice((n-1)*3,n*3)" >
                                <div class="img-part" >
                                    <img src="/img/news.png" alt="" class="w-100" >
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
                                    <div class="discr-news" >
                                        <span v-html="news_item.short_description" ></span >
                                    </div >
                                </div >
                                <router-link :to="'/'+entity_kit.link_name+'/' + news_item.id" class="stretched-link" ></router-link> >
                            </div >
                        </div >
                    </div >

                </div >
            </div >
            <div>

            </div>
            <div class="container-fluid px-0 news-down2 bg-logo d-flex flex-column justify-content-end"
                 :class="[ need_padding(n) ? more_class : centre_class ]" >
                <div class="container" v-if="news.length > show_num" >
                    <button type="button"
                            class="btn btn-block rounded-0 btn-outline-danger bg-red-grad my-5 py-1 px-0 border-2 button_floor_red bg-red-grad"
                            @click="show_more" >
                        Показать ещё {{entity_kit.name}}
                    </button >
                </div >
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