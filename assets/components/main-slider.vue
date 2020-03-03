<template >
    <div class="container-fluid p-0" >
        <b-carousel
                id="carousel-fade"
                style="text-shadow: 0px 0px 2px #000"
                controls
                indicators
                :interval="3000"
        >
            <template
                      v-for="(slide, index) in slides" >



                    <b-carousel-slide

                            :img-src="'/uploads/file/'+slide.image"
                    >
                    </b-carousel-slide >
                    <a :href="slide.link" v-if='slide.link' class="btn btn-primary stretched-link">Go somewhere</a>

            </template >
        </b-carousel >

    </div >
</template >

<script >
    export default {
        name: "main-slider",
        props: ['slides'],
    }
</script >

<style scoped >

</style >