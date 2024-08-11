<script>
import Header from "@/Components/App/Header.vue";
import Footer from "@/Components/App/Footer.vue";
import CommentForm from "@/Components/TaskShowPage/CommentForm.vue";
import ShowTaskCard from "@/Components/TaskShowPage/ShowTaskCard.vue";
import Comments from "@/Components/TaskShowPage/Comments.vue";

export default {
    components: {
        Header, Footer, CommentForm, Comments, ShowTaskCard
    },

    props: {
        task: Object,
        comments: Object,
        images: Object,
    }
}

</script>

<template>
    <Header/>

    <ShowTaskCard :task="task" :images="images"/>

    <CommentForm :task="task"/>

    <div>
        <Comments v-bind:comment="comments"/>
    </div>

    <Footer/>
</template>

<style scoped>

</style>
