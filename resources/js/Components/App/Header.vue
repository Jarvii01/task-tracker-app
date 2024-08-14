<script>
import Link from "@/Components/Links/Link.vue";
import BlackButton from "@/Components/Buttons/Button.vue";

export default {
    components:{
        Link, BlackButton
    },
    props:{
        hasAdmin: Boolean,
    }
}

</script>

<template>
    <header class="font-inter">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">

            <Link :href="route('tasks.index')">
                <img class="h-12 w-auto" src="../../../img/logo.svg" alt="">
            </Link>

            <h1 v-if="hasAdmin" >
                Админ
            </h1>

            <Link v-if="hasAdmin" :href="route('tasks.create')">
                Создать задачу
            </Link>

            <Link :href="route('profile.edit')">
                Профиль
            </Link>
            <BlackButton :href="route('logout')">
                Выйти
            </BlackButton>
        </nav>
    </header>
</template>
