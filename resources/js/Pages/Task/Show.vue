<script setup>
import Header from "@/Components/App/Header.vue";
import Footer from "@/Components/App/Footer.vue";
import {router} from "@inertiajs/vue3";
import CommentForm from "@/Components/TaskShowPage/CommentForm.vue";
import ShowTaskCard from "@/Components/TaskShowPage/ShowTaskCard.vue";
import Comments from "@/Components/TaskShowPage/Comments.vue";


const props = defineProps({
    task: Object,
    comments: Object,
    images: Object,
})

console.log(props.images)

</script>

<template>
    <Header/>

    <ShowTaskCard :task="props.task" :images="props.images"/>

    <CommentForm :task="props.task"/>

    <div>
        <Comments v-bind:comment="props.comments"/>
    </div>

    <Footer/>
</template>

<style scoped>

</style>
