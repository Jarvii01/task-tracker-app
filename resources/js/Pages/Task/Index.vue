<script>
import Header from "@/Components/App/Header.vue";
import TaskCard from "@/Components/Cards/TaskCard.vue";
import Footer from "@/Components/App/Footer.vue";

export default {
    components: {Header, TaskCard, Footer},
    props: {
        tasks: Object,
        images: Object,
        hasAdmin: Boolean,
    }
}
</script>

<template>
    <Header v-bind:hasAdmin/>


    <h1 class="mx-auto text-3xl pt-5 text-center font-bold font">Все Задачи</h1>

    <div class="place-items-center pt-2 pb-12 grid grid-cols-3  ">
        <TaskCard v-for="task in tasks" :task :images :hasAdmin/>
    </div>


    <Footer/>
</template>

<style scoped>

</style>
