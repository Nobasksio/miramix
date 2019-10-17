<template >
    <div >
        <bread-crumbs
                level_name="null"
                level_link="null"
                page_name="Контакты"
        >
        </bread-crumbs >
        <div class="row_my map pb-5" id="map2" >
            <div class="wa" >
            </div >
        </div >
        <div >

            <div class="container contact_wrapper px-5 mb-5" >
                <div class="btn-group pb-3 pl-3" role="group" aria-label="Basic example" >
                    <button type="button" class="btn rounded-0" :class="{ 'btn-danger bg-red-grad ': path_show,'btn-light': !path_show }" @click="path_show = true">Как добраться</button >
                    <button type="button" class="btn rounded-0" :class="{ 'bg-red-grad btn-danger': !path_show,'btn-light': path_show }" @click="path_show = false">Контакты</button >
                </div >
                <div class="contact_card " v-if="path_show">
                    <h1 class="text-center py-5 text-body" >КАК ДОБРАТЬСЯ</h1 >
                    <div class="px-4 pb-5" >
                        <input type="text" class="form-control text-center rounded-0 " placeholder="Откуда"
                               id="from"
                        v-model="from"
                        >
                        <input type="text" class="form-control text-center rounded-0 bg-light"
                               placeholder="ТЦ Мирамикс, г. Томск, ул. Проспект Мира 36" readonly >
                        <button type="button" @click="make_path"
                                class="btn btn-block rounded-0 btn-outline-danger bg-red-grad py-2 px-0 border-2 button_floor_red bg-red-grad" >
                            Построить маршрут
                        </button >
                    </div >
                </div >
                <div class="contact_card" v-else>
                    <h1 class="text-center py-5 text-body" >КОНТАКТЫ</h1 >
                    <div class="row pb-5 px-5" >
                        <div class="col pl-5 py-4 d-none d-md-block" >
                            <div class="pb-3" >
                                <span class="text-grey" >Режим работы:</span ><br >
                                ежедневно с 10:00 до 21:00
                            </div >
                            <div >
                                <span class="text-grey" >Адрес</span ><br >
                                г. Томск, пр. Мира, 36
                            </div >
                        </div >

                        <div class="col border-left border-1 py-4 d-block d-md-none" >
                            <div class="pb-3" >
                                <span class="text-grey" >Режим работы:</span ><br >
                                ежедневно с 10:00 до 21:00
                            </div >
                            <div >
                                <span class="text-grey" >Адрес</span ><br >
                                г. Томск пр.Мира, 36
                            </div >
                        </div >


                        <div class="col border-left border-1 py-4" >
                            <div class="pb-3" >
                        <span class="text-grey" >
                            Размещение рекламы<br >
                            на территории ТЦ:
                        </span >
                            </div >
                            <div >

                                +7 (3822) 900-403<br >
                                Администрация ТЦ: тел.  900-467 доп 1
                                <span class="text-danger" >
                        </span >
                            </div >
                        </div >
                        <div class="col border-left border-1 py-4" >
                            <div class="pb-3" >
                        <span class="text-grey" >
                            Департамент маркетинга,<br >
                            Digital:<br >
                        </span >
                            </div >
                            <div >

                                +7 (3822) 900-400 доп 1611<br >
                                <span class="text-danger" >
                            infomiramix@tomsk.ru
                        </span >
                            </div >
                        </div >
                        <div class="col border-left border-1 py-4" >
                            <div class="pb-3" >
                        <span class="text-grey" >Отдел арендных<br >
                            отношений:</span >
                            </div >
                            <div >
                                +7 (3822) 900-992<br >
                                arenda@lama.tomsk.ru
                            </div >
                        </div >
                    </div >
                </div >
            </div >
        </div >
    </div >
</template >

<script >

    export default {
        name: "contacts",
        props:['path_show'],
        data: function () {
            return {
                from:null
            }
        },
        mounted: function () {
            ymaps.ready(function () {
            // Создание карты.
            var myMap = new ymaps.Map("map2", {
                center: [56.513904, 84.973392],
                zoom: 17,
                controls: ['zoomControl'],
            });
            var suggestView = new ymaps.SuggestView(
                'from', // ID input'а
                {
                    offset: [-2, 3], // Отступы панели подсказок от её положения по умолчанию. Задаётся в виде смещений по горизонтали и вертикали относительно левого нижнего угла элемента input.
                    // Ширина панели подсказок
                    results: 6, // Максимальное количество показываемых подсказок.
                    boundedBy: [[55, 81], [58, 87]]
                });

            var myGeoObject = new ymaps.GeoObject({
                geometry: {
                    type: "Point", // тип геометрии - точка
                    coordinates: [56.514972, 84.973658] // координаты точки
                }
            });
            var myPlacemark = new ymaps.Placemark([56.514939, 84.973363], {

                // Хинт показывается при наведении мышкой на иконку метки.
                hintContent: 'ТЦ Мирамикс',
                // Балун откроется при клике по метке.
                balloonContent: 'ТЦ Мирамикс, г. Томск, ул. Проспект Мира 36',
            }, {
                iconColor: '#B52F18',
            });

            // После того как метка была создана, добавляем её на карту.
            myMap.geoObjects.add(myPlacemark);

        });
        },
        methods:{
            make_path(){
                $('#map2').html('');
                var myMap = new ymaps.Map("map2", {
                    center: [56.513742, 84.973629],
                    zoom: 16,
                    controls: ['zoomControl'],
                });

                var multiRoute = new ymaps.multiRouter.MultiRoute({
                    referencePoints: [
                        'г. Томск, '+this.from,
                        'ТЦ Мирамикс, г. Томск, ул. Проспект Мира 36'
                    ],

                },);

                // Добавление маршрута на карту.
                myMap.geoObjects.add(multiRoute);
            }
        }

    }
</script >

<style scoped >

</style >