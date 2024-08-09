<script setup>

import {Link} from "@inertiajs/vue3";

const props = defineProps({
    task: Object,
    images: Object
})

console.log(props.task.avatar)


</script>

<template>

    <div>
        <form>
            <div
                class="relative flex flex-col mt-6 text-gray-700 bg-white drop-shadow-lg bg-clip-border rounded-3xl w-96">

                <div class="p-6">
                    <h5 class="block mb-2 font-poppins text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        {{ props.task.title }}
                    </h5>
                    <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                        {{ props.task.user.name }}
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <Link :href="route('tasks.show', props.task.id)" type="submit"
                          class="bg-black border border-gray-500 text-white text-sm hover:bg-white hover:text-black transition font-medium rounded-md px-6 py-2.5 uppercase">
                        Смотреть
                    </Link>
                </div>
            </div>
        </form>
    </div>

</template>

<style scoped>

</style>
