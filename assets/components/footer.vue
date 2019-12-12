<template >
    <div >
        <div class="container-fluid px-0 py-5 bg-black border-white border-bottom d-none d-md-block" >
            <div class="container_min mx-auto " >
                <div class="row text14 " >
                    <div class="col-3 align-content-center flex-wrap text-addres" >
                        <div >
                            +7 (3822) 900-467<br >
                            г. ТОМСК ПР. МИРА, 36
                        </div >
                        <div class="text10 pt-3" >
                            <router-link to="/plainpage/right" class="text-addres" > Правила пребывания в МираМикс</router-link >
                        </div >
                    </div >
                    <div class="col-3" >
                        <!--<div ><a href="/" class="text-light" >О проекте</a ></div >-->
                        <div >
                            <router-link to="/news" class="text-light" >Новости и акции</router-link >
                        </div >
                        <div >
                            <router-link to="/department" class="text-light" >Отделы ТЦ</router-link >
                        </div >
                    </div >
                    <div class="col-3" >
                        <div >
                            <router-link to="/contacts" class="text-light" >Контакты</router-link >
                        </div >
                        <div >
                            <router-link to="/plainpage/for_renter" class="text-light" >Арендаторам</router-link >
                        </div >
                        <div >
                            <router-link to="/plainpage/ad" class="text-light" >Размещение рекламы в ТЦ</router-link >
                        </div >
                    </div >
                    <div class="col-3" >
                        <div >
                            <router-link to="/path" class="text-light" >Как добраться</router-link >
                        </div >
                        <div >
                            <router-link to="/our_map" class="text-light" >Карта этажей</router-link >
                        </div >

                    </div >
                </div >
            </div >
        </div >
        <div class="container-fluid d-md-none d-block bg-black " >
            <div class="row" >
                <div class="col-12 text-center pt-3" >
                    +7 (3822) 900-467<br >
                    г. ТОМСК ПР. МИРА, 36
                </div >
                <div class="col-12" >
                    <div class="text14 py-3 text-center" >
                        <router-link to="/plainpage/right" class="text-addres" > Правила пребывания в МираМикс</router-link >
                    </div >
                </div >
                <div class="col-6" >
                    <div class="text-center py-1" >
                        <router-link to="/news" class="text-light" >Новости и акции</router-link >
                    </div >
                    <div class="text-center py-1" >
                        <router-link to="/department" class="text-light" >Отделы ТЦ</router-link >
                    </div >
                    <div class="text-center py-1" >
                        <router-link to="/contacts" class="text-light" >Контакты</router-link >
                    </div >
                    <div class="text-center py-1" >
                        <router-link to="/plainpage/for_renter" class="text-light" >Арендатору</router-link >
                    </div >
                </div >
                <div class="col-6" >
                    <div class="text-center py-1" >
                        <router-link to="/plainpage/ad" class="text-light" >Размещение рекламы в ТЦ</router-link >
                    </div >
                    <div class="text-center py-1" >
                        <router-link to="/path" class="text-light" >Как добраться</router-link >
                    </div >
                    <div class="text-center py-1" >
                        <router-link to="/our_map" class="text-light" >Карта этажей</router-link >
                    </div >
                </div >
            </div >
        </div >
        <div class="container-fluid px-0 py-3 bg-black border-white border-bottom" >

            <div class="row social_media_blk py-4 bg-black" >
                <div class="col" >
                    <div class="smm_item  mx-auto" >
                        <div class="smm_in" ><a href="https://instagram.com/tc_miramiks" class="block" ></a >
                        </div >
                    </div >
                </div >
                <div class="col" >
                    <div class="smm_item  mx-auto" >
                        <div class="smm_vk" ><a href="https://vk.com/miramiks.tomsk" class="block" ></a ></div >
                    </div >
                </div >
            </div >
            <div class="" >
                <div class="d-flex justify-content-center py-4" >
                    <router-link to="/" >
                        <img src="/img/logow.png" alt="" class="logo align-self-center" >
                    </router-link >
                </div >
            </div >
        </div >
    </div >
</template >

<script >
    export default {
        name: "footer-my"
    }
</script >

<style scoped >

</style >