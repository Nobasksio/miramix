<template >
    <div class="container_fluid">
        <bread-crumbs
                level_name="null"
                level_link="null"
                :page_name="our_articel.name_page"
        >
        </bread-crumbs >

    <div class="container">
        <div class="h3 text-center py-3">{{our_articel.name_page}}</div>
        <div class="text-body plain_text_blk">
            <span v-html="our_articel.text_page"></span>
        </div>
    </div>
    </div>
</template >

<script >
    export default {
        name: "plain-page",
        props:['app_state'],
        data(){
            return{
                name_page: this.$route.params.name_page
            }
        },
        computed:{
            our_articel: function () {
                let self = this;
                let our_array = this.app_state.plainpages.filter(function (plain_page) {
                    return plain_page.link_name == self.name_page
                })
                return our_array[0]
            }
        },
        watch:{
           '$route' (val){
               this.name_page = val.params.name_page
            }
        }
    }
</script >

<style scoped >

</style >