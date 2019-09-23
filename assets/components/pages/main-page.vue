<template >
    <div >
        <main-slider :slides="app_state.sliders" ></main-slider >
        <slider-brand :brands="app_state.renters" ></slider-brand >
        <main-news-slider :news="app_state.news">
        </main-news-slider>
    </div >
</template >

<script >
    export default {
        name: "main-page",
        props:['app_state']
    }
</script >

<style scoped >

</style >