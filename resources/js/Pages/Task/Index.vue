<script>
import Header from "@/Components/App/Header.vue";
import TaskCard from "@/Components/Cards/TaskCard.vue";
import Footer from "@/Components/App/Footer.vue";

export default {
    components: {Header, TaskCard, Footer},
    props: {
        tasks: Object,
        images: Object,
    }
}
</script>

<template>
    <Header/>


    <h1 class="mx-auto text-3xl pt-5 text-center font-bold font">Все Задачи</h1>

    <div class="w-auto pt-2 grid grid-cols-3  place-items-center">
        <TaskCard v-for="task in tasks" v-bind:task v-bind:images/>
    </div>

    <Footer/>
</template>

<style scoped>

</style>
