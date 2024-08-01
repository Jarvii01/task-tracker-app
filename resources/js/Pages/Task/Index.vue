<script setup>
import Header from "@/Components/MyComp/Header.vue";
import TaskCard from "@/Components/MyComp/TaskCard.vue";
import Footer from "@/Components/MyComp/Footer.vue";
</script>

<template>
    <Header/>
    <div class="w-auto pt-2 grid grid-cols-3  place-items-center">
        <TaskCard/>
        <TaskCard/>
        <TaskCard/>
        <TaskCard/>
        <TaskCard/>
        <TaskCard/>
        <TaskCard/>
        <TaskCard/>
        <TaskCard/>
        <TaskCard/>
    </div>
    <Footer/>


</template>

<style scoped>

</style>
