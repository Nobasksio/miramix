<template >
    <div class="container-fluid d-flex px-0 py-5" >

        <div class="col grey_line" >

        </div >
        <div class="col-auto" >
            <router-link to="/" class="link_bread" >Главная</router-link > <span class="text12" > /</span >
            <router-link :to="'/'+level_link" class="link_bread" v-if="level_name!='null'">{{ level_name }}</router-link > <span class="text12" v-if="level_name!='null'"> /</span >
            <a class="link_bread" >{{ page_name }}</a >
        </div >
        <div class="col grey_line" >

        </div >
    </div >
</template >

<script >
    export default {
        name: "bread_crumbs",
        props:['level_name','level_link','page_name']
    }
</script >

<style scoped >

</style >