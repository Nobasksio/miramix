<template >
    <div class="container-fluid" >
        <bread-crumbs
                level_name="Отделы ТЦ"
                level_link="department"
                :page_name="our_renter.name"
        >
        </bread-crumbs >
        <div class="container" >
            <div class="row pb-5" >
                <div class="col-md d-md-block d-none" >
                    <img :src="'/uploads/file/'+our_renter.image" alt="" class="img-fluid" >
                </div >
                <div class="col-md col-12 pr-5" >
                    <div class="row justify-content-between align-items-center px-0" >
                        <img :src="'/uploads/file/'+our_renter.logo" alt="" >
                        <div >
                            <div class="h4 text-body" >
                                {{ our_renter.floor }} ЭТАЖ
                            </div >
                            <div class="" >
                                <a :href="our_renter.link" class="link_brand" >{{ our_renter.link }}</a >
                            </div >
                        </div >
                    </div >
                    <div  v-if="our_renter.map_place !='' ">
                        <router-link :to="'/our_map/'+our_renter.floor+'/'+our_renter.map_place" type="button"
                                class="clearfix btn btn-block rounded-0 btn-outline-danger bg-red-grad my-3 py-1 px-0 border-2 button_floor_red bg-red-grad" >
                            ПОКАЗАТЬ НА КАРТЕ
                        </router-link >
                    </div >
                    <div class="h-75" >
                        <span v-html="our_renter.description " ></span >
                    </div >
                </div >
                <div class="d-md-none col-12" >
                    <img :src="'/uploads/file/'+our_renter.image" alt="" class="img-fluid" >
                </div >
            </div >
        </div >
    </div >
</template >

<script >
    export default {
        name: "renter-page",
        props: ['app_state'],
        data: function(){
            return{
                renter_id:this.$route.params.id,
            }
        },
        computed:{
            our_renter: function () {
                let self = this;
                let our_array = this.app_state.renters.filter(function (renter) {
                    return renter.id == self.renter_id
                })
                return our_array[0]
            }
        },
        watch:{
            '$route' (val){
                this.renter_id = val.params.id
            }
        }
    }
</script >

<style scoped >

</style >