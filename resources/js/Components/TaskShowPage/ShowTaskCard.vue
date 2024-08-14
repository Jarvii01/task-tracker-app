<script>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Link from "@/Components/Links/Link.vue";

export default {
    components:{
        Link, PrimaryButton
    },
    props: [
        'task',
        'images',
        'hasAdmin'
    ],
    methods: {
        deleteTask(id) {
            this.$inertia.delete(`/tasks/${id}`)
        }
    }

}

</script>

<template>
    <div class="mx-auto rounded-xl shadow-2xl p-6">
        <div
            class="relative flex flex-col mt-6 text-gray-700 bg-white drop-shadow-lg bg-clip-border rounded-3xl w-full">
            <div class="flex">
                <div
                    class="relative flex w-1/4  h-56 mx-3 mt-3 overflow-hidden text-white shadow-lg bg-clip-border rounded-2xl bg-blue-gray-500 shadow-blue-gray-500/40">
                    <div v-for="image in images">
                        <img :src="image.url">
                    </div>

                </div>
                <div class="w-3/4 p-6" v-if="task">
                    <h5 class="block mb-2 font-poppins text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Название задачи: {{ task.title }}
                    </h5>
                    <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                        Исполнитель: {{ task.user.name }}
                    </p>
                    <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                        Описание: {{ task.description }}
                    </p>
                    <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                        Дэдлайн: {{ task.deadline }}
                    </p>
                    <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                        Локация: {{ task.area.title }}
                    </p>
                    <div class="flex flex-row justify-between ">
                        <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                            Статус: {{ task.status }}
                        </p>

                        <Link v-if="hasAdmin" :href="route('tasks.edit', task.id )">Редактировать</Link>
                        <Link v-if="hasAdmin" @click="deleteTask(task.id)">Удалить</Link>
                    </div>

                </div>

            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
