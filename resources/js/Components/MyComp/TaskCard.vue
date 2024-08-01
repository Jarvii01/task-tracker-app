<script setup>
import {Link} from "@inertiajs/vue3";

</script>

<template>
    <form @submit.prevent="show" >
        <div class="relative flex flex-col mt-6 text-gray-700 bg-white drop-shadow-lg bg-clip-border rounded-3xl w-96">
            <div class="relative h-56 mx-3 mt-3 overflow-hidden text-white shadow-lg bg-clip-border rounded-2xl bg-blue-gray-500 shadow-blue-gray-500/40">
                <img
                    src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                    alt="card-image"/>
            </div>
            <div class="p-6">
                <h5 class="block mb-2 font-poppins text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    Название задачи
                </h5>
                <p class="block font-poppins text-base antialiased font-light leading-relaxed text-inherit">
                    Исполнитель
                </p>
            </div>
            <div class="p-6 pt-0">
                <Link class="bg-black border border-gray-500 text-white text-sm hover:bg-white hover:text-black transition font-medium rounded-md px-6 py-2.5 uppercase">
                    Смотреть
                </Link>
            </div>
        </div>
    </form>

</template>

<style scoped>

</style>
