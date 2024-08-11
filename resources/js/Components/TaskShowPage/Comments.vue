<script setup>


const props = defineProps({
    comment: Object
})

console.log(props.comment.created_at);


</script>

<template>
    <div v-for="comment in props.comment"
        class="mx-auto my-8 flex max-w-screen-sm rounded-xl border border-gray-100 p-4 text-left text-gray-600 shadow-lg sm:p-8">
        <div class="w-full text-left">
            <div class="mb-2 flex flex-col justify-between text-gray-600 sm:flex-row">
                <h3 class="font-medium">{{comment.user.name}} </h3>
                <time class="text-xs">{{comment.created_at}}</time>
            </div>
                <p class="text-sm">{{ comment.content }}</p>
        </div>
    </div>
</template>

<style scoped>

</style>
