<template >
    <div class="container-fluid px-0 py-4 bg_yelow" id="wrapper" >

        <div class="container blc_subscribe mx-auto my-4" >
            <div class="row" >
                <div class="col-1 d-none d-md-block" >
                    <img src="/img/heart.png" alt="" class="heart" id="layer-1" ref="heart">
                </div >
                <div class="col-lg-4 col-12 pt-lg-5 pt-3 pb-3" >
                    <div class="text-warning subscribe_h" >
                        Подпишись<br >
                        на нашу рассылку
                    </div >
                    <div class="text-white pt-3 text12" >
                        и регулярно получайте купоны
                        на розыгрыши бытовой и цифровой техники
                        и других полезных призов!
                    </div >
                </div >
                <transition name="slide-fade" mode="out-in">
                    <template >
                        <div class="col-lg-6 col-12 pt-lg-5 pt-3 pb-3" v-if="show_form" key="id1" >

                                <div class="row" >
                                    <div class="col-6 pr-0" >
                                        <input type="email" class="form-control rounded-0 text12 input_standart"
                                               id="exampleInputEmail1"
                                               v-model="email"
                                               aria-describedby="emailHelp" placeholder="Адрес электронной почты" >
                                    </div >
                                    <div class="col-6" >
                                        <button type="button" :disabled="disable"
                                                v-on:mouseover="chechvalid()"
                                                v-on:mouseout="removetool()"
                                                @click="saveEmail"
                                                class="btn btn-outline-warning rounded-0 btn-block input_standart" >
                                            ПОДПИСАТЬСЯ
                                            <b-spinner type="grow" small v-show="loading"
                                                       label="Loading..." ></b-spinner >
                                        </button>
                                    </div >
                                </div >
                                <div class="row pt-3 " >
                                    <div class="col-lg-1 col-2" >
                                        <label class="toggleButton" >
                                            <input type="checkbox" v-model="agree" >
                                            <div >
                                                <svg viewBox="0 0 44 44" >
                                                    <path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758"
                                                          transform="translate(-2.000000, -2.000000)" ></path >
                                                </svg >
                                            </div >
                                        </label >
                                    </div >
                                    <div class="col ml-2 mb-2 text-white text10 align-self-center" @click="agree = !agree">
                                        Я прочитал (-а) и принимаю<br >
                                        Политику конфиденциальности
                                    </div >
                                </div >
                        </div >

                        <div class="col-lg-6 col-12 pt-lg-5 pt-3 pb-3" v-if="!show_form" key="id2" >
                            <div class="text-warning subscribe_h" >
                                Спасибо за подписку!<br />
                                Ваша мама будет вами гордиться!
                            </div >
                            <div class="text-white pt-3 text12" >
                                Вам на почту должно прийти письмо для подтверждения подписки.
                            </div >
                        </div >
                    </template >
                </transition >

                <div class="col-1 d-none d-md-block" >
                    <img src="/img/phoneglue.png" alt="" class="phone_glue" ref="phone" id="layer-2" >
                </div >
            </div >
        </div >
    </div >

</template >

<script >
    const axios = require('axios');
    export default {
        name: "subsrib-form",
        data: function () {
            return {
                email: null,
                agree: false,
                loading: false,
                show_form: true,
                show_tolltip:false
            }
        },
        methods: {
            chechvalid:function(){
                if (!this.disable) {
                    this.show_tolltip = true;
                } else {
                    this.show_tolltip = false;
                }
            },
            removetool: function(){
                this.show_tolltip = false;
            },
            beforeEnter: function (el) {
                el.style.opacity = 0
            },

            enter: function (el, done) {
                Velocity(el, {opacity: 1, fontSize: '1.4em'}, {duration: 300})
                Velocity(el, {fontSize: '1em'}, {complete: done})
            },
            leave: function (el, done) {
                Velocity(el, {translateX: '15px', rotateZ: '50deg'}, {duration: 600})
                Velocity(el, {rotateZ: '100deg'}, {loop: 2})
                Velocity(el, {
                    rotateZ: '45deg',
                    translateY: '30px',
                    translateX: '30px',
                    opacity: 0
                }, {complete: done})
            },
            saveEmail: function () {
                this.loading = true
                let data_request = JSON.stringify({
                    email: this.email,
                });

                this.show_form = false;

                this.$refs.phone.classList.add('shake')
                this.$refs.heart.classList.add('tada')

                let text = ''
                axios.post('/ajax/subscriber/new',
                    "data=" + data_request
                ).then(response => {

                    text = 'Настройки проекта успешно сохранены'

                    this.$bvToast.toast(text, {
                        title: 'Проект сохранен',
                        autoHideDelay: 5000,
                        variant: 'success',
                        appendToast: true

                    })
                    this.loading = false

                }).catch(error => {
                    this.$bvToast.toast(`При сохранении проекта возникли проблемы`, {
                        title: 'Ошибка сохранения',
                        autoHideDelay: 5000,
                        variant: 'danger',
                        appendToast: true
                    })
                });
            },
        },
        computed: {
            disable: function () {
                let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if (reg.test(this.email) == false || this.agree == false) {
                    return true;
                } else {
                    return false;
                }
            }
        }
    }

    // var toggle = document.querySelector('.toggleButton input')
    // var animate = setInterval(() => {
    //     toggle.checked = !toggle.checked
    // }, 3000)
    //
    // document.querySelector('body').addEventListener('click', () => {
    //     clearInterval(animate);
    // })
</script >

<style scoped >
    .shake{
        animation: wobble 1s;
    }
    .tada{
        animation: tada 1s;
    }
    .slide-fade-leave-active {
        animation: zoomOutRight 1s;
    }

    .slide-fade-leave-to {

        opacity: 0;
    }

    .slide-fade-enter-active {
        animation:  tada 1s;

    }

    .slide-fade-enter-to {


    }
</style >