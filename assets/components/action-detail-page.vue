<template >
    <div class="container" >
        <bread-crumbs
                level_name="Новости и Акции"
                level_link="news"
                :page_name="our_action.name"
        >

        </bread-crumbs>
        <div class="container_news" >
            <h2 class="news-h2" :class="entity_kit.text_color">
                {{name}}
            </h2>
            <h1 class="news-h1">
                {{ our_action.name }}
            </h1>
            <div class="action_date">
                {{ our_action.date_start }}
                 -  {{ our_action.date_finish }}
            </div>
            <div class="container-fluid px-0 py-4">
                <div class="row">
                    <div class="col-5">
                        <img :src="'/uploads/file/'+our_action.image" alt="" >
                    </div>
                    <div class="col-7">
                        <span v-html="our_action.description"></span>
                    </div>
                </div>
            </div>
        </div >
        <slider-actions :entity_items="app_state.actions" name_m="Акции">
        </slider-actions>
    </div >
</template >

<script >
    export default {
        name: "action-detail-page",
        props:['app_state'],
        data: function(){
            return{
                id_action:this.$route.params.id,
                name:'Новости',
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
            our_action: function () {
                let self = this;
                let our_array = this.app_state.actions.filter(function (action) {
                    return action.id == self.id_action
                })
                return our_array[0]
            }
        },
        watch:{
            '$route' (val){
                this.id_action = val.params.id
            }
        }
    }
</script >

<style scoped >

</style >