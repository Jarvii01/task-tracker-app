<script setup>
const props = defineProps({
    task: Object,
    images: Object
})

console.log(props.task)
console.log(props.images)


</script>

<template>
    <div class="mx-auto rounded-xl shadow-2xl p-6">
        <div
            class="relative flex flex-col mt-6 text-gray-700 bg-white drop-shadow-lg bg-clip-border rounded-3xl w-full">
            <div class="flex">
                <!--                <div-->
                <!--                    class="relative flex w-1/4  h-56 mx-3 mt-3 overflow-hidden text-white shadow-lg bg-clip-border rounded-2xl bg-blue-gray-500 shadow-blue-gray-500/40">-->
                <!--                    <img-->
                <!--                        src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"-->
                <!--                        alt="card-image"/>-->
                <!--                </div>-->
                <div
                    class="relative flex w-1/4  h-56 mx-3 mt-3 overflow-hidden text-white shadow-lg bg-clip-border rounded-2xl bg-blue-gray-500 shadow-blue-gray-500/40">
                    <div v-for="image in props.images">
                        <img :src="image.url">
                    </div>

                </div>
                <div class="w-3/4 p-6" v-if="props.task">
                    <h5 class="block mb-2 font-poppins text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Название задачи: {{ props.task.title }}
                    </h5>
                    <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                        Исполнитель: {{ props.task.user.name }}
                    </p>
                    <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                        Описание: {{ props.task.description }}
                    </p>
                    <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                        Дэдлайн: {{ props.task.deadline }}
                    </p>
                    <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                        Локация:
                    </p>
                    <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                        Статус: {{ props.task.status }}
                    </p>
                </div>

            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
