<template >
    <div class="container" >
        <bread-crumbs
                level_name="Новости и Акции"
                level_link="news"
                :page_name="our_new.name"
        >

        </bread-crumbs>
        <div class="container_news" >
            <h2 class="news-h2" :class="entity_kit.text_color">
                {{ name }}
            </h2>
            <h1 class="news-h1">
                {{ our_new.name }}
            </h1>
            <div class="action_date">
                {{ our_new.date }}
                <!-- -  {{ details.date_finish }}-->
            </div>
            <div class="container-fluid px-0 py-4">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img :src="'/uploads/file/'+our_new.image" alt="" class="img-fluid" >
                    </div>
                    <div class="col-lg-7 col-12">
                        <span v-html="our_new.description"></span>
                    </div>
                    <div class="col-lg-5 d-block d-lg-none">
                        <img :src="'/uploads/file/'+our_new.image" class='img-fluid' alt="" >
                    </div>
                </div>
            </div>
        </div >
        <slider-actions :entity_items="app_state.news_real" name_m="Новости" />
    </div >
</template >

<script >
    export default {
        name: "action-detail-page",
        props:['app_state'],
        data: function(){
            return{
                id_news:this.$route.params.id,
                name:'Акции',
            }
        },
        computed:{
            entity_kit() {
                if (this.name == 'Новости') {
                    return {
                        name: 'новостей',
                        bg: 'bg-violet',
                        text_color: 'text-violet',
                        link_name:'news'
                    }
                } else {
                    return {
                        name: 'акций',
                        bg: 'bg-my-red',
                        text_color: 'text-my-red',
                        link_name:'action'
                    }
                }
            },
            our_new: function () {
                let self = this;
                let our_array = [{}]
                try {
                 our_array = this.app_state.news_real.filter(function (news) {
                    return news.id == self.id_news
                })
                } catch (e) {

                }
                return our_array[0]
            }
        },
        watch:{
            '$route' (val){
                this.id_news = val.params.id
            }
        }
    }
</script >

<style scoped >

</style >