<template >
    <div class="container-fluid main_sub_menu_blk py-5 d-none d-md-block" >
        <div class="width_min_blk d-flex justify-content-between mx-auto" >
            <router-link to='/our_map'> <button type="button"  class="btn btn-outline-light rounded-0" >Карта этажей</button ></router-link >
            <router-link to='/path'> <button type="button" class="btn btn-outline-light rounded-0" >Как добраться</button ></router-link >
            <button type="button" class="btn btn-outline-light rounded-0 hover_link" >Режим работы
                <div class="work_time_blk px-2 pb-3  border tooltip_work_time">
                    <div class="text-body px-3 py-3 text-center font16">
                        Сегодня открыт до 22:00
                    </div>
                    <div class="shadow-sm px-2">
                        <div class="d-flex px-3 py-2 border justify-content-between " v-for="(day_object,day_name) in app_state.work_time">
                            <div class="text-body bold">{{ day_name }}</div>
                            <div class="text-body">с {{ day_object.start }} до {{ day_object.finish }}</div>
                        </div>

                    </div>
                </div>
            </button >

        </div >
    </div >
</template >

<script >
    export default {
        name: "main-sub-header",
        props:['app_state'],
        data: function () {
            return {

            }
        }
    }
</script >

<style scoped >

</style >
