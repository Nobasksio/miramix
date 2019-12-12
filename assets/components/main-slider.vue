<template >
    <div class="container-fluid p-0" >
        <b-carousel
                id="carousel-fade"
                style="text-shadow: 0px 0px 2px #000"
                controls
                indicators
                :interval="3000"
        >
            <b-carousel-slide
                    key="index"
                    v-for="(slide, index) in slides"
                    :img-src="'/uploads/file/'+slide.image"
            >
            </b-carousel-slide>
        </b-carousel>

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