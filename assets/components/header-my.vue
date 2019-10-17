<template >
    <div class="container-fluid center px-0 mx-0" >
        <div class="d-flex d-md-block justify-content-center p-0 p-md-5 w-100" >
            <a href="/" ><img src="/img/logo.png" alt="" class="logo align-self-center d-none d-md-inline" ></a >
        </div >
        <nav class="navbar navbar-expand-lg navbar-light px-2 py-3" >
            <div class="d-flex d-md-none">
                <div class="d-flex justify-content-center p-0 p-md-5 w-100" >
                    <a href="/" ><img src="/img/logo.png" alt="" class="img-fluid px-5" ></a >
                </div >
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation" >
                    <span class="navbar-toggler-icon" ></span >
                </button >
            </div >
            <div class="d-lg-block collapse navbar-collapse" id="navbarSupportedContent" >
                <div class="width_min_blk d-flex justify-content-between mx-auto collapse navbar-collapse" >
                    <ul class="navbar-nav width_min_blk d-flex justify-content-between mx-auto" >
                        <li class="nav-item " >
                            <router-link class="nav-link link_menu" to="/news" >Новости и акции</router-link >
                        </li >
                        <li class="nav-item " >
                            <router-link class="nav-link link_menu" to="/department" >Отделы ТЦ</router-link >
                        </li >
                        <li class="nav-item " >
                            <router-link class="nav-link link_menu" to="/contacts" >Контакты</router-link >
                        </li >
                        <li class="nav-item " >
                            <router-link class="nav-link link_menu" to="/plainpage/for_renter" >Арендаторам</router-link >
                        </li >
                        <li class="nav-item" >
                            <router-link class="nav-link link_menu" to="/plainpage/ad" >Размещение рекламы в ТЦ</router-link >
                        </li >
                        <li class="nav-item d-inline d-md-none" >
                            <router-link class="nav-link link_menu" to="/our_map" >Карта этажей</router-link >
                        </li >
                        <li class="nav-item d-inline d-md-none" >
                            <router-link class="nav-link link_menu" to="/path" >Как добраться</router-link >
                        </li >
                    </ul >

                </div >
            </div >
        </nav >
    </div >
</template >

<script >
    export default {
        name: "header-my",
        props:['app_state']
    }
</script >

<style scoped >

</style >