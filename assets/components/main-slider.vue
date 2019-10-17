<template >
    <div class="container-fluid p-0" >
        <div class="slider2" >
            <div class=" px-0" v-for="slide in slides">
            <img :src="'/uploads/file/'+slide.image" class='img-fluid d-none d-md-inline ofh' />

            </div>

        </div >

    </div >
</template >

<script >
    export default {
        name: "main-slider",
        props:['slides'],
    }
</script >

<style scoped >

</style >