<template >
    <div >
        <v-btn @click="show_toast = !show_toast" >Button</v-btn >
        <transition name="toast" >
            <div class="my-toast" ref='toast' v-show="show_toast" >
                <div class="toast-content" >
                    <div class="close-my" @click="close_toast" >
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.642 15.642"
                             xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 15.642 15.642" >
                            <path fill-rule="evenodd"
                                  d="M8.882,7.821l6.541-6.541c0.293-0.293,0.293-0.768,0-1.061  c-0.293-0.293-0.768-0.293-1.061,0L7.821,6.76L1.28,0.22c-0.293-0.293-0.768-0.293-1.061,0c-0.293,0.293-0.293,0.768,0,1.061  l6.541,6.541L0.22,14.362c-0.293,0.293-0.293,0.768,0,1.061c0.147,0.146,0.338,0.22,0.53,0.22s0.384-0.073,0.53-0.22l6.541-6.541  l6.541,6.541c0.147,0.146,0.338,0.22,0.53,0.22c0.192,0,0.384-0.073,0.53-0.22c0.293-0.293,0.293-0.768,0-1.061L8.882,7.821z" />
                        </svg >
                    </div >
                    <transition name="question"  mode="out-in">
                        <div v-if="!show_thanks" class="" key="k1">
                            <div class="toast-content-question" >
                                <div >
                                    Вы делали заказ {{ order_test.date }} на {{ order_test.summ }} руб<br >
                                    Как бы вы его оценили?
                                </div >
                            </div >
                            <div class="toast-content-starts" v-show="show_rait" >
                                <div class="star"
                                     ref="star1"
                                     v-on:mouseover="mouseon(1)"
                                     v-on:mouseout="mouseout(1)"
                                     @click="make_choise(1)"
                                >
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 487.222 487.222" style="enable-background:new 0 0 487.222 487.222;" xml:space="preserve">
                                <g>
                                    <path d="M486.554,186.811c-1.6-4.9-5.8-8.4-10.9-9.2l-152-21.6l-68.4-137.5c-2.3-4.6-7-7.5-12.1-7.5l0,0c-5.1,0-9.8,2.9-12.1,7.6
                                        l-67.5,137.9l-152,22.6c-5.1,0.8-9.3,4.3-10.9,9.2s-0.2,10.3,3.5,13.8l110.3,106.9l-25.5,151.4c-0.9,5.1,1.2,10.2,5.4,13.2
                                        c2.3,1.7,5.1,2.6,7.9,2.6c2.2,0,4.3-0.5,6.3-1.6l135.7-71.9l136.1,71.1c2,1,4.1,1.5,6.2,1.5l0,0c7.4,0,13.5-6.1,13.5-13.5
                                        c0-1.1-0.1-2.1-0.4-3.1l-26.3-150.5l109.6-107.5C486.854,197.111,488.154,191.711,486.554,186.811z M349.554,293.911
                                        c-3.2,3.1-4.6,7.6-3.8,12l22.9,131.3l-118.2-61.7c-3.9-2.1-8.6-2-12.6,0l-117.8,62.4l22.1-131.5c0.7-4.4-0.7-8.8-3.9-11.9
                                        l-95.6-92.8l131.9-19.6c4.4-0.7,8.2-3.4,10.1-7.4l58.6-119.7l59.4,119.4c2,4,5.8,6.7,10.2,7.4l132,18.8L349.554,293.911z"/>
                                </g>
                                </svg>
                                </div >
                                <div class="star"
                                     ref="star2"
                                     v-on:mouseover="mouseon(2)"
                                     v-on:mouseout="mouseout(2)"
                                     @click="make_choise(2)"
                                >
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 487.222 487.222" style="enable-background:new 0 0 487.222 487.222;" xml:space="preserve">
                                <g>
                                    <path d="M486.554,186.811c-1.6-4.9-5.8-8.4-10.9-9.2l-152-21.6l-68.4-137.5c-2.3-4.6-7-7.5-12.1-7.5l0,0c-5.1,0-9.8,2.9-12.1,7.6
                                        l-67.5,137.9l-152,22.6c-5.1,0.8-9.3,4.3-10.9,9.2s-0.2,10.3,3.5,13.8l110.3,106.9l-25.5,151.4c-0.9,5.1,1.2,10.2,5.4,13.2
                                        c2.3,1.7,5.1,2.6,7.9,2.6c2.2,0,4.3-0.5,6.3-1.6l135.7-71.9l136.1,71.1c2,1,4.1,1.5,6.2,1.5l0,0c7.4,0,13.5-6.1,13.5-13.5
                                        c0-1.1-0.1-2.1-0.4-3.1l-26.3-150.5l109.6-107.5C486.854,197.111,488.154,191.711,486.554,186.811z M349.554,293.911
                                        c-3.2,3.1-4.6,7.6-3.8,12l22.9,131.3l-118.2-61.7c-3.9-2.1-8.6-2-12.6,0l-117.8,62.4l22.1-131.5c0.7-4.4-0.7-8.8-3.9-11.9
                                        l-95.6-92.8l131.9-19.6c4.4-0.7,8.2-3.4,10.1-7.4l58.6-119.7l59.4,119.4c2,4,5.8,6.7,10.2,7.4l132,18.8L349.554,293.911z"/>
                                </g>
                                </svg>
                                </div >
                                <div class="star"
                                     ref="star3"
                                     v-on:mouseover="mouseon(3)"
                                     v-on:mouseout="mouseout(3)"
                                     @click="make_choise(3)"
                                >
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 487.222 487.222" style="enable-background:new 0 0 487.222 487.222;" xml:space="preserve">
                                <g>
                                    <path d="M486.554,186.811c-1.6-4.9-5.8-8.4-10.9-9.2l-152-21.6l-68.4-137.5c-2.3-4.6-7-7.5-12.1-7.5l0,0c-5.1,0-9.8,2.9-12.1,7.6
                                        l-67.5,137.9l-152,22.6c-5.1,0.8-9.3,4.3-10.9,9.2s-0.2,10.3,3.5,13.8l110.3,106.9l-25.5,151.4c-0.9,5.1,1.2,10.2,5.4,13.2
                                        c2.3,1.7,5.1,2.6,7.9,2.6c2.2,0,4.3-0.5,6.3-1.6l135.7-71.9l136.1,71.1c2,1,4.1,1.5,6.2,1.5l0,0c7.4,0,13.5-6.1,13.5-13.5
                                        c0-1.1-0.1-2.1-0.4-3.1l-26.3-150.5l109.6-107.5C486.854,197.111,488.154,191.711,486.554,186.811z M349.554,293.911
                                        c-3.2,3.1-4.6,7.6-3.8,12l22.9,131.3l-118.2-61.7c-3.9-2.1-8.6-2-12.6,0l-117.8,62.4l22.1-131.5c0.7-4.4-0.7-8.8-3.9-11.9
                                        l-95.6-92.8l131.9-19.6c4.4-0.7,8.2-3.4,10.1-7.4l58.6-119.7l59.4,119.4c2,4,5.8,6.7,10.2,7.4l132,18.8L349.554,293.911z"/>
                                </g>
                                </svg>
                                </div >
                                <div class="star"
                                     ref="star4"
                                     v-on:mouseover="mouseon(4)"
                                     v-on:mouseout="mouseout(4)"
                                     @click="make_choise(4)"
                                >
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 487.222 487.222" style="enable-background:new 0 0 487.222 487.222;" xml:space="preserve">
                                <g>
                                    <path d="M486.554,186.811c-1.6-4.9-5.8-8.4-10.9-9.2l-152-21.6l-68.4-137.5c-2.3-4.6-7-7.5-12.1-7.5l0,0c-5.1,0-9.8,2.9-12.1,7.6
                                        l-67.5,137.9l-152,22.6c-5.1,0.8-9.3,4.3-10.9,9.2s-0.2,10.3,3.5,13.8l110.3,106.9l-25.5,151.4c-0.9,5.1,1.2,10.2,5.4,13.2
                                        c2.3,1.7,5.1,2.6,7.9,2.6c2.2,0,4.3-0.5,6.3-1.6l135.7-71.9l136.1,71.1c2,1,4.1,1.5,6.2,1.5l0,0c7.4,0,13.5-6.1,13.5-13.5
                                        c0-1.1-0.1-2.1-0.4-3.1l-26.3-150.5l109.6-107.5C486.854,197.111,488.154,191.711,486.554,186.811z M349.554,293.911
                                        c-3.2,3.1-4.6,7.6-3.8,12l22.9,131.3l-118.2-61.7c-3.9-2.1-8.6-2-12.6,0l-117.8,62.4l22.1-131.5c0.7-4.4-0.7-8.8-3.9-11.9
                                        l-95.6-92.8l131.9-19.6c4.4-0.7,8.2-3.4,10.1-7.4l58.6-119.7l59.4,119.4c2,4,5.8,6.7,10.2,7.4l132,18.8L349.554,293.911z"/>
                                </g>
                                </svg>
                                </div >
                                <div class="star"
                                     ref="star5"
                                     v-on:mouseover="mouseon(5)"
                                     v-on:mouseout="mouseout(5)"
                                     @click="make_choise(5)"
                                >
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 487.222 487.222" style="enable-background:new 0 0 487.222 487.222;" xml:space="preserve">
                                <g>
                                    <path d="M486.554,186.811c-1.6-4.9-5.8-8.4-10.9-9.2l-152-21.6l-68.4-137.5c-2.3-4.6-7-7.5-12.1-7.5l0,0c-5.1,0-9.8,2.9-12.1,7.6
                                        l-67.5,137.9l-152,22.6c-5.1,0.8-9.3,4.3-10.9,9.2s-0.2,10.3,3.5,13.8l110.3,106.9l-25.5,151.4c-0.9,5.1,1.2,10.2,5.4,13.2
                                        c2.3,1.7,5.1,2.6,7.9,2.6c2.2,0,4.3-0.5,6.3-1.6l135.7-71.9l136.1,71.1c2,1,4.1,1.5,6.2,1.5l0,0c7.4,0,13.5-6.1,13.5-13.5
                                        c0-1.1-0.1-2.1-0.4-3.1l-26.3-150.5l109.6-107.5C486.854,197.111,488.154,191.711,486.554,186.811z M349.554,293.911
                                        c-3.2,3.1-4.6,7.6-3.8,12l22.9,131.3l-118.2-61.7c-3.9-2.1-8.6-2-12.6,0l-117.8,62.4l22.1-131.5c0.7-4.4-0.7-8.8-3.9-11.9
                                        l-95.6-92.8l131.9-19.6c4.4-0.7,8.2-3.4,10.1-7.4l58.6-119.7l59.4,119.4c2,4,5.8,6.7,10.2,7.4l132,18.8L349.554,293.911z"/>
                                </g>
                                </svg>
                                </div >
                            </div >
                        </div >
                        <div class="ab" v-if="show_thanks" key="k2">

                            <div class="thank_you" v-show="show_thanks" >
                                <div class="thank_you-text" >
                                    Спасибо за оценку
                                </div >
                                <div class="thank_you-helper" v-show="!show_details" >
                                    <div class="bad_rait-header pb-2" >
                                        {{ text_buy }}
                                    </div >
                                    Сообщение закроется через {{ currentTime }} сек.
                                </div >
                            </div >
                            <div class="bad_rait" v-show="show_details" >
                                <div class="bad_rait-header" >
                                    {{ text_detail }}
                                </div >
                                <div class="bad_rait-btn_group" >
                                    <v-btn-toggle class="group fill"

                                                  v-model="feedback.problem_type"
                                    >

                                        <v-btn :key="item.id"
                                               :value="item.id"
                                               color="select"
                                               flat
                                               outline
                                               class="my-btn"
                                               v-for="(item, key) in problem_types"
                                        >
                                            {{item.label}}

                                        </v-btn >

                                    </v-btn-toggle >

                                </div >
                                <div v-show="feedback.problem_type != null" >

                                    <div class="bad_rait-products" v-if="feedback.problem_type==1" >
                                        <v-switch class=" mb-0 mt-0"
                                                  color="primary"
                                                  :label="item.name"
                                                  :key="key"
                                                  :value="key"
                                                  v-model="feedback.problem_products"
                                                  v-for="(item, key) in order_test.products"
                                        ></v-switch >
                                    </div >
                                    <div class="bad_rait-products" v-if="feedback.problem_type == 2" >
                                        <v-switch class=" mb-0 mt-0"
                                                  color="primary"
                                                  :label="item.label"
                                                  :key="item.id"
                                                  :value="item.id"
                                                  v-model="feedback.problem_servese_choise"
                                                  v-for="(item, key) in service_problems"
                                        ></v-switch >
                                    </div >
                                    <div >
                                        <v-textarea class="mb-0"
                                                    hint=""
                                                    label="Расскажите подробнее"
                                                    outline=""
                                                    rows="2"
                                                    v-model="feedback.comment"
                                        ></v-textarea >
                                    </div >
                                    <v-btn
                                            @click="submitSend"
                                            class="c-submit-confirm mt-0 ma-0"
                                            color="primary"
                                            block
                                    >
                                        Отправить
                                    </v-btn >
                                </div >
                            </div >
                        </div >
                    </transition >
                    <!--<transition name="thanks" >-->

                    <!--</transition >-->
                </div >
            </div >
        </transition >
    </div >
</template >


<script >

    export default {
        name: "my-toast",
        props: ['order'],
        data: function () {
            return {
                show_rait: true,
                show_thanks: false,
                show_details: false,
                show_toast: false,
                text_detail: ' Расскажите, что вас расстроило?',
                text_buy: 'Спасибо за обратную связь. Она помогает нам становится лучше.',
                mytt: null,
                currentTime: 5,
                feedback:{
                    order_id: this.order.ID,
                    rait: null,
                    problem_type: null,
                    comment: null,
                    problem_products: [],
                    problem_servese_choise: [],
                },
                problem_types:
                    [
                        {
                            label: 'Еда',
                            id: 1
                        },
                        {
                            label: 'Сервис',
                            id: 2
                        }
                    ],
                service_problems: [{
                    label: 'Долгое ожидание',
                    id: 1
                },
                    {
                        label: 'Грубое общение call-центра',
                        id: 2
                    },
                    {
                        label: 'Плохая упаковка',
                        id: 3
                    },
                    {
                        label: 'Опоздание',
                        id: 4
                    },
                    {
                        label: 'Общение курьера',
                        id: 5
                    },
                    {
                        label: 'Другое',
                        id: 100
                    },

                ],
                order_test:
                    {
                        products: [
                            {
                                name: 'Филадельфия',
                                id: 1
                            },
                            {
                                name: 'Каппа маки',
                                id: 2
                            },
                            {
                                name: 'Унаги калифорния',
                                id: 3
                            },
                            {
                                name: 'Ацумари сет',
                                id: 4
                            },
                        ],
                        summ:
                            1234,
                        date:
                            '12.22.2019'
                    }
            }
        }
        ,
        methods: {
            make_choise(rait) {
                let start = 1;
                this.feedback.rait = rait
                for (let i = start; i < 6; i++) {
                    let name = 'star' + i;


                    if (i < rait) {
                        this.$refs[name].classList.add('star-active')
                        this.$refs[name].classList.remove('tada')
                    } else if (i == rait) {
                        this.$refs[name].classList.add('star-active')
                        this.$refs[name].classList.add('tada')
                        this.rait = rait;
                    } else {
                        this.$refs[name].classList.remove('star-active')
                        this.$refs[name].classList.remove('tada')
                    }

                }
                let height = 0;
                if (rait == 5) {
                    setTimeout(() => {
                        height = 160;
                        this.show_thanks = true;
                        this.show_rait = false;
                        this.$refs['toast'].style.height = height + 'px';

                    }, 1000)
                    this.startTimer();
                } else {
                    let height = 0;
                    if (rait == 4) {
                        this.text_detail = 'Расскажите что повлияло на вашу оценку?'
                        height = 200
                    } else {
                        height = 160
                    }
                    setTimeout(() => {
                        this.show_rait = false;
                        this.show_thanks = true;
                        this.show_details = true;
                        this.$refs['toast'].style.height = height + 'px';
                    }, 1000)
                }
            },
            mouseon(rait) {
                let start = 1;
                for (let i = start; i < 6; i++) {
                    let name = 'star' + i;
                    try {
                        if (i <= rait) {
                            this.$refs[name].classList.add('star-active')
                        } else {
                            this.$refs[name].classList.remove('star-active')
                        }
                    } catch (e) {

                    }
                }
                console.log('myau')
            }
            ,
            mouseout(rait) {
                let start = 1;
                for (let i = start; i < 6; i++) {
                    let name = 'star' + i;
                    try {
                        if (this.feedback.rait < i) {
                            this.$refs[name].classList.remove('star-active')
                        }
                    } catch (e) {

                    }
                }
            }
            ,
            close_toast() {
                this.show_toast = false
            }
            ,
            startTimer() {
                this.mytt = setInterval(() => {
                    this.currentTime--
                }, 1000)
            }
            ,
            stopTimer() {
                clearTimeout(this.mytt)
            },
            submitSend() {
                this.show_thanks = true;
                this.show_details = false;
                this.startTimer();
            }
        },
        watch: {
            currentTime(time) {
                if (time === 0) {
                    this.stopTimer()
                    this.show_toast = false
                }
            },
            'feedback.problem_type'(val){
                if (val != null){
                    this.$refs['toast'].style.height = 'auto';
                    this.$refs['toast'].style.overflow = 'scroll';
                }
            }
        }
    }
</script >

<style scoped >
    .my-toast {
        position: absolute;
        top: 0;
        right: 0px;
        width: 316px;
        margin: 00px 0 30px 30px;
        box-shadow: 0 0 35px rgba(0, 0, 0, 0.5);
        z-index: 110000003;
        background: #ffffff;
        height: 130px;

        transition-duration: 0.5s;
        overflow: hidden;
    }

    .toast-content {
        padding: 15px 20px;
        min-height: 160px;
        transition: 1.5s linear;
    }

    .toast-content-question {
        text-align: center;
        color: #000000;
        font-size: 13px;
    }

    .toast-content-starts {
        padding: 10px 0 10px;
        display: flex;
        justify-content: space-around;
    }

    .star {
        width: 45px;
    }

    .star-active svg {
        fill: #ce8714;
    }

    .star:hover svg {
        fill: #ce8714;
        cursor: pointer;
    }

    .close-my {
        width: 15px;
        float: right;
        margin-top: -10px;
        margin-right: -10px;
        fill: #999999;
    }

    .close-my:hover svg {
        fill: #000000;
        cursor: pointer;
    }

    .tada {
        animation: tada 1s;
    }

    @-webkit-keyframes tada {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        10%,
        20% {
            -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    @keyframes tada {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        10%,
        20% {
            -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    @-webkit-keyframes slideInRight {
        from {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes slideInRight {
        from {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }


    .slideInRight {
        -webkit-animation-name: slideInRight;
        animation-name: slideInRight;
    }

    @-webkit-keyframes slideInDown {
        from {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes slideInDown {
        from {
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
            visibility: visible;
        }

        to {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }

    .slideInDown {
        -webkit-animation-name: slideInDown;
        animation-name: slideInDown;
    }


    .tada {
        -webkit-animation-name: tada;
        animation-name: tada;
    }
    .question-enter-active {
        transition-duration: 1.5s;
    }

    .question-enter {
        opacity: 0;
    }

    .question-enter-to {
        opacity: 1;
    }

    .question-leave-active {

        transition-duration: 1s;
    }

    .question-leave {
        opacity: 1;
    }

    .question-leave-to {
        opacity: 0;

    }


    .toast-enter {
        opacity: 0;

    }

    .toast-enter-to {
        animation: slideInDown 1.5s;
        opacity: 1;
    }

    .thank_you-text {
        padding: 10px 0 10px;
        font-weight: 800;
        color: #ce8714;
        text-align: center;
        font-size: 24px;
    }

    .thank_you-helper {
        color: #b3b3b3;
        font-size: 12px;
        text-align: center;
    }

    .bad_rait-header {
        font-size: 16px;
        text-align: center;
        font-weight: 800;
        color: #000000;
    }

    .bad_rait-btn_group {
        padding: 10px 0 10px;

    }

    .bad_rait-products {
        padding: 10px 0 10px;
    }

    .my-btn {
        width: 50%;

    }
    .ab{

    }


</style >