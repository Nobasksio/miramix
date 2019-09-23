<template >
    <div class="container-fluid p-0" >
        <div class="slider2" >
            <div class="container-fluid px-0" v-for="slide in slides">
            <img :src="'/uploads/file/'+slide.image" class='img-fluid d-none d-md-inline ofh' />
                <img :src="'/uploads/file/'+slide.image" class='slide d-inline d-md-none mx-auto' />
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