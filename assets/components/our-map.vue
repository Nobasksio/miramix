<template >
    <div class="row_my map" >
        <bread-crumbs
                level_name="null"
                level_link="null"
                page_name="Карта этажей"
        >
        </bread-crumbs >
        <div class="wa map" >

            <div class="row_manage" >
                <div class="card_on_map" v-show="show_card" id="card_brend" v-draggable >
                    <div class="close2 fr" @click="close_card"></div >
                    <div class="p-4 ofscroll2" >
                        <div class="container-fluid text-center" >
                            <img :src="'/uploads/file/'+active_renter.logo" alt="" class="logo_on_map img-fluid" >
                        </div >
                        <div class="h3 text-body pt-4" >
                            {{ active_renter.name}}
                        </div >
                        <div class="h4 text-body" >
                            {{ active_floor}} этаж
                        </div >

                        <div class="descr_part text-body" >
                            <span v-html="active_renter.description"></span>
                        </div >
                    </div >
                    <div class="more_on_map" ><router-link :to="'/renter/'+active_renter.id" class='block_href' id="link" >
                        ПОДРОБНЕЕ</router-link >
                    </div >
                </div >
            </div >
            <div class="help" ></div >

            <div class="container-fluid px-0 bg-yellow" >
                <div class="container px-5 py-5 ofh" v-show="floor0" >
                    <svg version="1.1" id="floor0" ref="floor0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 827.1 625.1" style="enable-background:new 0 0 827.1 625.1;" xml:space="preserve">



                        <polygon class="st0" points="761.2,393.7 761.2,232.2 732,232.2 732,72.7 578.4,72.7 578.4,50 250,50 250,0 48.5,0 48.5,202.8
                            0,202.8 0,428.5 48.5,428.5 48.5,625.1 250,625.1 250,576.7 767.6,576.7 767.6,550.1 827.1,550.1 827.1,393.7 	"/>

                        <g>
                            <rect x="563.4" y="99.4" class="st2" ref='place1' @click="showOnMap(1)" width="142" height="125.6"/>
                             </g>
                        <g>
                        <polygon class="st1"  points="746.2,408.7 746.2,247.2 717,247.2 717,87.7 563.4,87.7 563.4,65 235,65 235,15 63.5,15 63.5,217.8
                            15,217.8 15,413.5 63.5,413.5 63.5,610.1 235,610.1 235,561.7 752.6,561.7 752.6,535.1 812.1,535.1 812.1,408.7 	"/>
                        </g>
                        <g>
                        <rect x="669" y="234.9" class="st2" ref='place60' @click="showOnMap(60)" width="36.4" height="28.3"/>
                             </g>
                        <g>
                        <polygon class="st2" ref='place2' @click="showOnMap(2)" points="252.4,99.4 252.4,164.6 186.1,164.6 186.1,224.9 551.7,224.9 551.7,99.4 	"/>
                         </g>
                        <g>
                            <rect x="186.1" y="234.9" class="st2" ref='place3' @click="showOnMap(3)" width="365.6" height="109.3"/>
                             </g>
                        <g>
                        <polygon class="st2" ref='place4' @click="showOnMap(4)" points="186.1,355.8 186.1,513 319,513 319,529.3 551.7,529.3 551.7,355.8 	"/>
                             </g>


                    </svg>
                </div >
                <div class="container px-5 py-5 ofh" v-show="floor1"

                     >
                    <div >
                        <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" ref="floor1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 959.7 625.1" style="enable-background:new 0 0 959.7 625.1;" xml:space="preserve">

                    <polygon class="st0" points="898.4,453.5 891.3,453.4 891.2,408.6 711.4,50 250,50 250,0 0,0 0,625.1 250,625.1 250,576.7
                        959.7,576.7 "/>

                        <g>
                    <polygon class="st1" points="889.1,468.4 876.3,468.4 876.2,412.2 702.1,65 235,65 235,15 15,15 15,610.1 235,610.1 235,561.7
                        935.5,561.7 "/>
                             </g>
                        <g>
                             <g>
                    <polygon class="st2" ref='place5' @click="showOnMap(5)" points="744.4,174.7 723.5,133.1 681.6,133.1 702.5,174.7 "/>
                             </g>
                    <polygon class="st2" ref='place6' @click="showOnMap(6)" points="722.1,213.4 763.9,213.4 749.5,184.7 707.6,184.7 "/>
                             </g>
                        <g>
                    <polygon class="st2" ref='place7' @click="showOnMap(7)" points="814,312.9 769,223.4 727.1,223.4 772.2,312.9 "/>
                             </g>
                        <g>
                    <polygon class="st2" ref='place8' @click="showOnMap(8)" points="819,322.9 777.3,322.9 795.3,358.6 837,358.6 "/>
                             </g>
                        <g>
                    <polygon class="st2" ref='place9' @click="showOnMap(9)" points="800.3,368.7 820.4,408.4 862,408.4 842,368.7 "/>
                             </g>
                        <g>
                    <rect x="852.7" y="418.4" class="st2" ref='place10' @click="showOnMap(10)" width="14.1" height="8.4"/>
                             </g>
                        <g>
                    <rect x="828.5" y="418.4" class="st2" ref='place11' @click="showOnMap(11)" width="14.1" height="8.4"/>
                             </g>
                        <g>
                    <rect x="842.2" y="460.5" class="st2" ref='place12' @click="showOnMap(12)" width="14.1" height="8.4"/>
                             </g>
                        <g>
                    <rect x="818" y="460.5" class="st2" ref='place13' @click="showOnMap(13)" width="14.1" height="8.4"/>
                             </g>
                        <g>
                    <rect x="739.4" y="426.8" class="st2" ref='place14' @click="showOnMap(14)" width="37.6" height="23.8"/>
                             </g>
                        <g>
                    <rect x="739.4" y="361.5" class="st2" ref='place15' @click="showOnMap(15)" width="20" height="31.1"/>
                             </g>
                        <g>
                    <rect x="739.4" y="327.7" class="st2" ref='place16' @click="showOnMap(16)" width="20" height="23.8"/>
                             </g>
                        <g>
                    <rect x="787" y="426.8" class="st2" ref='place17' @click="showOnMap(17)" width="36.1" height="23.8"/>
                             </g>
                        <g>
                    <rect x="693.3" y="426.8" class="st2" ref='place18' @click="showOnMap(18)" width="36.1" height="23.8"/>
                             </g>
                        <g>
                    <polygon class="st2" ref='place19' @click="showOnMap(19)" points="917.5,551.7 756.4,551.7 756.4,480.2 881.4,480.2 "/>
                             </g>
                        <g>
                    <rect x="693.2" y="385.6" class="st2" ref='place20' @click="showOnMap(20)" width="15.7" height="21.1"/>
                             </g>
                        <g>
                    <rect x="693.3" y="479.9" class="st2" ref='place21' @click="showOnMap(21)" width="52.6" height="54.2"/>
                             </g>
                        <g>
                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="648.9436" y1="514.7259" x2="682.2252" y2="479.0357">
                        <stop  offset="0" style="stop-color:#DC5E15"/>
                        <stop  offset="1" style="stop-color:#D0172C"/>
                    </linearGradient>
                    <rect x="647.9" y="480" class="st2" ref='place61' @click="showOnMap(61)"  width="35.3" height="33.8"/>
                             </g>
                        <g>
                    <polygon class="st2" ref='place22' @click="showOnMap(22)" points="694.8,233 714.9,272.9 725.3,272.9 705.3,233 "/>
                             </g>
                        <g>
                    <rect x="693.3" y="210" class="st2" ref='place23' @click="showOnMap(23)" width="11.9" height="13"/>
                             </g>
                        <g>

                        <polygon class="st4" points="642.3,195.7 642.3,132.9 637.2,132.9 637.2,65 636.8,65 636.8,132.9 631.7,132.9 631.7,195.7
                            636.8,195.7 636.8,405 631.7,405 631.7,467.9 636.8,467.9 636.8,561.7 637.2,561.7 637.2,467.9 642.3,467.9 642.3,405 637.2,405
                            637.2,195.7 	"/>
                         </g>
                        <g>
                        <path class="st4" d="M609.5,435.6h-20.6l4.6-4.6c0.2-0.2,0.3-0.4,0.3-0.6c0-0.2-0.1-0.5-0.3-0.6c-0.3-0.3-0.9-0.3-1.3,0l-6.1,6.1
                            c-0.1,0.1-0.1,0.1-0.2,0.2l0,0.1l0,0c0,0,0,0,0,0l0,0.1c0,0,0,0,0,0c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0l0,0.1
                            c0,0,0,0,0,0.1c0,0,0,0,0,0.1l0,0.1c0.1,0.1,0.1,0.1,0.1,0.2l6.1,6.1c0.3,0.3,0.9,0.3,1.3,0c0.2-0.2,0.3-0.4,0.3-0.6
                            c0-0.2-0.1-0.5-0.3-0.6l-4.6-4.6h20.6c0.5,0,0.9-0.4,0.9-0.9S609.9,435.6,609.5,435.6z"/>
                             </g>
                        <g>
                        <path class="st4" d="M609.5,163.4h-20.6l4.6-4.6c0.2-0.2,0.3-0.4,0.3-0.6c0-0.2-0.1-0.5-0.3-0.6c-0.3-0.3-0.9-0.3-1.3,0l-6.1,6.1
                            c-0.1,0.1-0.1,0.1-0.2,0.2l0,0.1l0,0c0,0,0,0,0,0l0,0.1c0,0,0,0,0,0c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0l0,0.1
                            c0,0,0,0,0,0.1c0,0,0,0,0,0.1l0,0.1c0.1,0.1,0.1,0.1,0.1,0.2l6.1,6.1c0.3,0.3,0.9,0.3,1.3,0c0.2-0.2,0.3-0.4,0.3-0.6
                            c0-0.2-0.1-0.5-0.3-0.6l-4.6-4.6h20.6c0.5,0,0.9-0.4,0.9-0.9S609.9,163.4,609.5,163.4z"/>
</g>
 <g>
                    <rect x="662.1" y="257" class="st2" ref='place24' @click="showOnMap(24)" width="33.5" height="47.5"/>
                             </g>
                        <g>
                    <rect x="204.8" y="75" class="st2" ref='place25' @click="showOnMap(25)" width="416.6" height="476.7"/>
                             </g>

                    </svg>
                    </div >

                </div >
                <div class="container px-5 py-5 ofh" v-show="floor2" >
                    <svg version="1.1" ref="floor2" id="floor2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                viewBox="0 0 838.2 526.7" style="enable-background:new 0 0 838.2 526.7;" xml:space="preserve">



                        <polygon class="st0" points="782.5,414.9 782.5,346.9 763.7,346.9 589.8,0 113.5,0 0,0 0,526.5 113.5,526.7 838.2,526.7 	"/>

                        <g>
                        <polygon class="st1" points="767.5,418.4 767.5,361.9 754.5,361.9 580.5,15 113.5,15 15,15 15,511.6 113.5,511.7 814,511.7 	"/>
                        </g>
                        <g>
                        <polygon class="st2" id='q26' ref='place26' @click="showOnMap(26)" points="795.9,501.7 634.8,501.7 634.8,429.3 759.8,429.3 	"/>
                        </g>
                            <g>
                        <rect x="686.4" y="373.4" id='q27'  ref='place27' @click="showOnMap(27)"  class="st2" width="69.5" height="45.9"/>
                             </g>
                        <g>
                        <polygon class="st2" id='q28' ref='place28' @click="showOnMap(28)" points="692.4,262.8 647.4,173.4 605.5,173.4 650.6,262.8 	"/>
                            </g>
                        <g>
                        <polygon class="st2" id='q29' ref='place29' @click="showOnMap(29)" points="622.9,124.6 602,83.1 560,83.1 581,124.6 	"/>
                            </g>
                        <g>
                        <polygon class="st2" id='q30' ref='place30' @click="showOnMap(30)" points="697.4,272.8 655.7,272.8 673.7,308.6 715.4,308.6 	"/>
                            </g>
                        <g>
                        <polygon class="st2" id='q31' ref='place31' @click="showOnMap(31)" points="678.8,318.6 698.8,358.4 740.5,358.4 720.5,318.6 	"/>
                        </g>
                         <g>
                        <polygon class="st2" id='q32' ref='place32' @click="showOnMap(32)"points="600.5,163.4 642.4,163.4 627.9,134.6 586,134.6 	"/>
                            </g>
                        <g>

                        <rect x="571.6" y="401.1" id='q33' class="st2" ref='place33' @click="showOnMap(33)" width="52.5" height="100.6"/>
                             </g>
                        <g>
                        <rect x="464.8" y="401.1" id='q34' class="st2" ref='place34' @click="showOnMap(34)" width="83" height="100.6"/>
                             </g>
                        <g>
                        <rect x="384.2" y="401.1" id='q35' class="st2" ref='place35' @click="showOnMap(35)" width="70.4" height="100.6"/>
                             </g>
                        <g>
                        <rect x="266.5" y="401.1" id='q36' class="st2" ref='place36' @click="showOnMap(36)" width="106.8" height="79.4"/>
                             </g>
                        <g>
                        <rect x="84" y="401.1" id='q37' class="st2" ref='place37' @click="showOnMap(37)" width="172" height="100.6"/>
                             </g>
                        <g>
                        <rect x="84" y="375.5" id='q38' class="st2" ref='place38' @click="showOnMap(38)" width="44.4" height="14.9"/>
                             </g>
                        <g>
                        <rect x="551.4" y="291.8" id='q39' class="st2" ref='place39' @click="showOnMap(39)" width="18.3" height="18.3"/>
                             </g>
                        <g>
                        <rect x="551.4" y="262.1" id='q40' class="st2" ref='place40' @click="showOnMap(40)" width="18.3" height="18.3"/>
                             </g>
                        <g>
                        <rect x="551.4" y="178.6" id='q41' class="st2" ref='place41' @click="showOnMap(41)" width="31.1" height="18.3"/>
                             </g>
                        <g>
                        <rect x="461.6" y="152" class="st2" id='q42' ref='place42' @click="showOnMap(42)" width="69" height="41.6"/>
                             </g>
                        <g>
                        <polygon class="st2" ref='place43' id='q43' @click="showOnMap(43)" points="331.7,152 331.7,246.5 379.2,246.5 379.2,203.6 379.2,193.5 379.2,152 	"/>
                         </g>
                        <g>
                            <rect x="389.2" y="152" class="st2" id='q44' ref='place44' @click="showOnMap(44)" width="62.4" height="41.6"/>
                            </g>
                        <g>
                        <rect x="389.2" y="326.2" class="st2" id='q45' ref='place45' @click="showOnMap(45)" width="141.5" height="32.1"/>
                             </g>
                        <g>
                        <polygon class="st2" ref='place46' id='q46' @click="showOnMap(46)" points="530.6,203.6 389.2,203.6 389.2,246.5 389.2,256.5 389.2,316.2 530.6,316.2 	"/>
                         </g>
                        <g>
                            <rect x="190.7" y="230.8" class="st2" id='q47' ref='place47' @click="showOnMap(47)" width="65.3" height="17.4"/>
                             </g>
                        <g>
                            <rect x="221" y="151.9" class="st2" id='q48' ref='place48' @click="showOnMap(48)" width="35" height="68.9"/>
                             </g>
                        <g>
                            <rect x="190.7" y="258.2" class="st2" id='q49' ref='place49' @click="showOnMap(49)" width="65.3" height="58"/>
                             </g>
                        <g>
                            <rect x="190.7" y="201.7" class="st2" id='q50' ref='place50' @click="showOnMap(50)" width="20.2" height="19.1"/>
                             </g>
                        <g>
                            <rect x="190.7" y="326.2" class="st2" id='q51' ref='place51' @click="showOnMap(51)" width="65.3" height="32.1"/>
                             </g>
                        <g>
                            <rect x="190.7" y="151.9" class="st2" id='q52' ref='place52' @click="showOnMap(52)" width="20.2" height="39.8"/>
                         </g>
                        <g>
                        <rect x="449.5" y="78.5" class="st2" id='q53' ref='place53' @click="showOnMap(53)" width="54.7" height="35.6"/>
                             </g>
                        <g>
                        <rect x="514.2" y="78.5" class="st2" id='q54' ref='place54' @click="showOnMap(54)" width="23" height="35.6"/>
                             </g>
                        <g>
                        <polygon class="st2" ref='place55' id='q55' @click="showOnMap(55)" points="439.5,84.4 439.5,76 439.5,39.6 384,39.6 384,114.2 439.5,114.2 	"/>
                             </g>
                        <g>
                        <polygon class="st2" ref='place56' id='q56' @click="showOnMap(56)" points="256.4,78.5 256.4,68.5 256.4,24.9 206.4,24.9 206.4,114.2 256.4,114.2 	"/>
                             </g>
                        <g>
                        <polygon class="st2" ref='place57' id='q57' @click="showOnMap(57)" points="364.5,84.4 364.5,76 364.5,39.6 266,39.6 266,114.2 364.5,114.2 	"/>
                             </g>
                        <g>
                        <rect x="139.6" y="24.9" class="st2" id='q58' ref='place58' @click="showOnMap(58)" width="56.8" height="36.4"/>
                             </g>
                        <g>
                        <rect x="26.8" y="134.3" class="st2" id='q59' ref='place59' @click="showOnMap(59)" width="126.4" height="224"/>
                         </g>
                        <g>
                                <polygon class="st3" points="379.2,326.2 379.2,316.2 379.2,256.5 331.7,256.5 321.7,256.5 321.7,246.5 321.7,152 267.3,152
                                    267.3,358.3 379.2,358.3 			"/>
                             </g>
                        <g>
                                <polygon class="st3" points="139.6,71.3 139.6,114.2 196.4,114.2 196.4,78.5 196.4,71.3 			"/>
                             </g>
                        <g>
                            <rect x="429.3" y="124.6" class="st3" width="31.8" height="16.4"/>
                             </g>


                    </svg>

                </div >

                <div class="container" >

                    <div class="d-flex justify-content-start my-3 align-items-end" >
                        <button class="btn btn-light rounded-circle zoom1 mr-3" type="submit" @click="zoomMore" >+
                        </button >
                        <button class="btn btn-light rounded-circle zoom2" type="submit" @click="zoomless" >-</button >
                        <!--<div class="zoom" onclick="zoom(1)" >+</div >-->
                        <!--<div class="zoom" onclick="zoom(0)" >-</div >-->
                    </div >
                    <div class="btn-group pb-3 " role="group" aria-label="Basic example" >
                        <button type="button" class="btn rounded-0 btn-180"
                                :class="{ 'btn-danger bg-red-grad ': floor0,'btn-light': !floor0 }" @click="show0" >
                            Цоколь
                        </button >
                        <button type="button" class="btn rounded-0 btn-180"
                                :class="{ 'bg-red-grad btn-danger': floor1,'btn-light': !floor1 }" @click="show1" >1
                            этаж
                        </button >
                        <button type="button" class="btn rounded-0 btn-180"
                                :class="{ 'bg-red-grad btn-danger': floor2,'btn-light': !floor2 }" @click="show2" >2
                            этаж
                        </button >
                    </div >
                    <div class="contact_card pb-3" >
                        <div class="row py-4 px-5" >
                            <div class="col text-secondary" >
                                <div class="py-2 cursor-pointer"
                                     :class="{ 'active_renter': active_renter.id == renter.id }" v-for="renter in renter_active_floor.slice(0,num_row)"
                                     @click="showRenter(renter)" >
                                    {{renter.name.toUpperCase()}}
                                </div >

                            </div >
                            <div class="col text-secondary " >
                                <div class="py-2 cursor-pointer"
                                     :class="{ 'active_renter': active_renter.id ==  renter.id }"
                                     v-for="renter in renter_active_floor.slice(num_row,num_row*2)"
                                     @click="showRenter(renter)" >{{renter.name.toUpperCase()}}
                                </div >

                            </div >
                            <div class="col text-secondary" >
                                <div class="py-2 cursor-pointer"
                                     :class="{ 'active_renter': active_renter.id ==  renter.id }"
                                     v-for="renter in renter_active_floor.slice(num_row*2,num_row*3)"
                                     @click="showRenter(renter)" >{{renter.name.toUpperCase()}}
                                </div >

                            </div >
                        </div >
                    </div >
                </div >
            </div >

        </div >
    </div >

</template >

<script >
    import drag from '@branu-jp/v-drag'
    import { Draggable } from 'draggable-vue-directive'
    export default {
        name: "our-map",
        props: ['app_state'],
        directives: {
            Draggable,
        },
        data() {
            return {
                renters: this.app_state.renters,
                active_floor: 1,
                self: this,
                floor0: false,
                floor1: true,
                floor2: false,
                csale: 1,
                name: 'floor1',
                show_card:false,
                active_place: null,
                active_renter: {
                    name: 'some name',
                    floor: 2,
                    logo: '',
                    description: '',
                    id:0
                },
                empty_place: {
                    name: 'Здесь пока никого нет',
                    logo: 'logo.png',
                    description: 'Напишите в наш отдел аренды для более подробной информации на почту future_renter@mail.ru'
                },
            }
        },
        methods: {
            show0() {
                this.floor0 = true
                this.floor1 = false
                this.floor2 = false
                this.name = 'floor0'
                this.active_floor = 0
                this.scale = 1
                this.$refs[this.name].setAttribute('transform', 'scale(' + this.csale + ' ' + this.csale + ')')
            },
            show1() {
                this.floor0 = false
                this.floor1 = true
                this.floor2 = false
                this.name = 'floor1'
                this.active_floor = 1
                this.scale = 1
                this.$refs[this.name].setAttribute('transform', 'scale(' + this.csale + ' ' + this.csale + ')')
            },
            show2() {
                this.floor0 = false
                this.floor1 = false
                this.floor2 = true
                this.name = 'floor2'
                this.active_floor = 2
                this.scale = 1
                this.$refs[this.name].setAttribute('transform', 'scale(' + this.csale + ' ' + this.csale + ')')

            },
            zoomMore() {
                this.csale = this.csale * 1.1
                this.$refs[this.name].setAttribute('transform', 'scale(' + this.csale + ' ' + this.csale + ')')
            },
            zoomless() {
                this.csale = this.csale * 0.9
                this.$refs[this.name].setAttribute('transform', 'scale(' + this.csale + ' ' + this.csale + ')')
            },
            showRenter(renter) {
                this.active_renter = renter;
                this.active_place = 'place'+renter.map_place;
                this.showOnMap(renter.map_place)
                this.show_card = true;
            },
            showOnMap(map_id) {
                let name_active = 'place' + map_id

                let renter = this.renter_place(map_id);

                if (this.active_place != null) {
                    try {
                        this.$refs[this.active_place].classList.remove('active_place')
                    } catch (e) {
                        
                    }
                }

                this.$refs[name_active].classList.add('active_place')
                if (renter != null) {
                    this.active_renter = renter
                } else {
                    this.active_renter = this.empty_place
                }

                this.active_place = name_active
                this.show_card = true;
            },
            renter_place(map_id){
                let positiveArr = this.renters.filter((renter) => {
                    return renter.map_place == map_id;
                });

                if (positiveArr.length > 0){
                    return positiveArr[0]
                } else {
                    return null
                }
            },
            close_card(){
                try {
                    this.$refs[this.active_place].classList.remove('active_place')
                } catch (e) {
                    
                }
                this.show_card = false
            }
        },
        computed: {
            heigth_map: function () {
                try {
                    return this.heigth_map = this.$refs[this.name].clientHeight
                } catch (e) {
                    return 800
                }
            },
            renter_active_floor: function () {

                let positiveArr = this.renters.filter((renter) => {
                    return renter.floor == this.active_floor;
                });
                return positiveArr;
            },
            num_row: function () {
                return Math.ceil(this.renter_active_floor.length / 3)
            }
        },
        mounted() {
            // var csale = 1.189;
            // $('svg').mousewheel(function (event, delta) {
            //     csale += delta / 800;
            //     $('svg').attr('transform', 'scale(' + csale + ' ' + csale + ')')
            // });
            // $(function () {
            //     $("svg").draggable();
            //
            //
            // });

        }
    }
</script >

<style scoped >
    .st0 {
        fill: #FFFFFF;
    }

    .st1 {
        fill: none;
        stroke: #F9C606;
        stroke-width: 4;
        stroke-miterlimit: 10;
    }

    .st2 {
        fill: #fff;
        stroke: #D0172C;
        stroke-width: 2;
        stroke-miterlimit: 10;
    }

    .st3 {
        fill: url(#SVGID_1_);
        stroke: #D0172C;
        stroke-width: 2;
        stroke-miterlimit: 10;
    }

    .st4 {
        fill-rule: evenodd;
        clip-rule: evenodd;
        fill: #F9C606;
    }

    .st0 {
        fill: #FFFFFF;
    }

    /*.st1 {*/
    /*fill: none;*/
    /*stroke: #D0172C;*/
    /*stroke-width: 2;*/
    /*stroke-miterlimit: 10;*/
    /*}*/

    /*.st2 {*/
    /*fill: none;*/
    /*stroke: #F9C606;*/
    /*stroke-width: 4;*/
    /*stroke-miterlimit: 10;*/
    /*}*/

    .st3 {
        fill: none;
        stroke: #F9C606;
        stroke-miterlimit: 10;
    }

    .st0 {
        fill: #FFFFFF;
    }

    /*.st1 {*/
    /*fill: none;*/
    /*stroke: #D0172C;*/
    /*stroke-width: 2;*/
    /*stroke-miterlimit: 10;*/
    /*}*/

    /*.st2 {*/
    /*fill: none;*/
    /*stroke: #F9C606;*/
    /*stroke-width: 4;*/
    /*stroke-miterlimit: 10;*/
    /*}*/

    .zoom1 {
        position: relative;
        z-index: 100000;
        width: 55px;
        height: 55px;
        font-size: 25px;
        line-height: 25px;
        padding-top: 2px;
    }

    .zoom2 {
        position: relative;
        z-index: 100000;
        width: 40px;
        height: 40px;
        font-size: 25px;
        line-height: 25px;
        padding-top: 2px;
    }

    .cursor-pointer {
        cursor: pointer;
    }

    g:hover .st2 {
        fill: #D0172C;
        stroke: #D0172C;
    }

    .active_place {
        fill: #D0172C;
        stroke: #D0172C;
    }

    .logo_on_map {
        max-height: 100px;
    }

</style >