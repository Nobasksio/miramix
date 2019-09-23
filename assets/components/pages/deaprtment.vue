<template >
    <department-list
            :departments="app_state.departments"
            :renters="app_state.renters"
    ></department-list>
</template >

<script >
    export default {
        name: "deaprtment",
        props:['app_state']
    }
</script >

<style scoped >

</style >