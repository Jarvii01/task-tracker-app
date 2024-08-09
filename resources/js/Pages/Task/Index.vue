<script setup>
import Header from "@/Components/App/Header.vue";
import TaskCard from "@/Components/Cards/TaskCard.vue";
import Footer from "@/Components/App/Footer.vue";

const props = defineProps({
    tasks: Object,
    images: Object
})

console.log(props.images)


</script>

<template>
    <Header/>

    <div class="w-auto pt-2 grid grid-cols-3  place-items-center">
        <TaskCard v-for="task in props.tasks" v-bind:task :images="props.images"/>
    </div>

    <Footer/>
</template>

<style scoped>

</style>
