<template >
    <div>
        <news-page :news="app_state.news_real"
                   name="Новости"></news-page>

        <news-page :news="app_state.actions"
                   name="Акции"></news-page>
    </div>
</template >

<script >
    export default {
        name: "news-actions-page",
        props:['app_state']
    }
</script >

<style scoped >

</style >