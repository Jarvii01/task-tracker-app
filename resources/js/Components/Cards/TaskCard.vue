<script>

import {Link} from "@inertiajs/vue3";

export default {
    components: {Link},
    props: {
        task: Object,
        images: Object,
        hasAdmin: Object,
    },
}


</script>

<template>

    <form v-if="hasAdmin">
        <div
            class="mt-6 text-gray-700 bg-white drop-shadow-lg bg-clip-border rounded-3xl w-96">

            <!--                <div-->
            <!--                    class="relative h-56 mx-3 mt-3 overflow-hidden text-white shadow-lg bg-clip-border rounded-2xl bg-blue-gray-500 shadow-blue-gray-500/40">-->
            <!--                    <img :src="task.image" />-->
            <!--                </div>-->
            <div class="p-6">
                <h5 class="mb-2 font-poppins text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    {{ task.title }}
                </h5>
                <p class="font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                    {{ task.user_id.name }}
                </p>
                <p class="font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                    {{ task.created_at }}
                </p>
            </div>
            <div class="p-6 pt-0">
                <Link :href="route('tasks.show', task.id)" type="submit"
                      class="bg-black border border-gray-500 text-white text-sm hover:bg-white hover:text-black transition font-medium rounded-md px-6 py-2.5 uppercase">
                    Смотреть
                </Link>
            </div>
        </div>
    </form>

    <form v-else>
        <div v-if="task.is_owner"
             class="mt-6 text-gray-700 bg-white drop-shadow-lg bg-clip-border rounded-3xl w-96">

            <!--                <div-->
            <!--                    class="relative h-56 mx-3 mt-3 overflow-hidden text-white shadow-lg bg-clip-border rounded-2xl bg-blue-gray-500 shadow-blue-gray-500/40">-->
            <!--                    <img :src="task.image" />-->
            <!--                </div>-->
            <div class="p-6">
                <h5 class=" mb-2 font-poppins text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    {{ task.title }}
                </h5>
                <p class=" font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                    {{ task.user_id.name }}
                </p>
                <p class=" font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                    {{ task.created_at }}
                </p>
            </div>
            <div class="p-6 pt-0">
                <Link :href="route('tasks.show', task.id)" type="submit"
                      class="bg-black border border-gray-500 text-white text-sm hover:bg-white hover:text-black transition font-medium rounded-md px-6 py-2.5 uppercase">
                    Смотреть
                </Link>
            </div>
        </div>
    </form>


</template>

<style scoped>

</style>
