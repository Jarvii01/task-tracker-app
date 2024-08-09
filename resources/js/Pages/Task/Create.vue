<script>
import Header from "@/Components/App/Header.vue";
import Footer from "@/Components/App/Footer.vue";
import {router} from '@inertiajs/vue3'
import 'filepond/dist/filepond.min.css';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css';

import Dropzone from "dropzone";
import {data} from "autoprefixer";
import {useDropzone} from "vue3-dropzone";

export default {
    props: {
        users: Object,
        areas: Object
    },
    components: {
        Footer,
        Header
    },
    data() {
        return {
            title: null,
            description: null,
            dropzone: null,
            deadline: null,
            area: null,
            user: null,

        }
    },

    mounted() {
        this.dropzone = new Dropzone(this.$refs.dropzone, {
            url: '/tasks',
            autoProcessQueue: false,
        })
    },
    methods: {
        store() {
            const data = new FormData()
            const files = this.dropzone.getAcceptedFiles()
            files.forEach(file => {
                data.append('images[]', file)
            })
            data.append('title', this.title)
            data.append('description', this.description)
            data.append('deadline', this.deadline)
            data.append('area', this.area)
            data.append('user', this.user)
            router.post('/tasks', data)

            console.log(data)
        }
    },


}
</script>

<template>
    <Header/>

    <div class="rounded-lg shadow-xl">
        <form @submit.prevent="store" class="p-2 flex flex-col">
            <div class="flex flex-col p-6 -mb-6">
                <label for=title class="mb-4 font-semibold">Название задачи:</label>
                <input v-model="title" type="text" id="title" placeholder="Название задачи"
                       class="rounded-lg hover:border-gray-500 " required/>
            </div>

            <div class="flex flex-col p-6 -mb-6">
                <label for="desc" class="mb-4 font-semibold">Описание:</label>
                <textarea v-model="description" id="desc" rows="4" class="rounded-lg"
                          placeholder="Описание"></textarea>
            </div>

            <div class="flex flex-col p-6 -mb-6">
                <label for="date" class="mb-4 font-semibold">Дэдлайн:</label>
                <input v-model="deadline" type="date" id="date" class="rounded-lg" required/>
            </div>

            <div class="flex flex-col p-6 -mb-6">
                <label for="employee" class="mb-4 font-semibold ">Исполнитель:</label>
                <select v-model="user" id="employee" class="rounded-lg">
                    <option v-for="user in users">
                        {{ user.name }}
                    </option>
                </select>

            </div>

            <div class="flex flex-col p-6 -mb-6 ">
                <label for="location" class="mb-4 font-semibold">Локация</label>
                <select v-model="area" id="location" class="rounded-lg">
                    <option v-for="area in areas">
                        {{ area.title }}
                    </option>
                </select>
            </div>

            <div class="w-1/4 mx-auto">
                <div ref="dropzone" class="cursor-pointer p-5 text-center bg-gray-800 text-white">
                    Загрузить изображение
                </div>
            </div>


            <button type="submit">Создать</button>

        </form>

    </div>


    <Footer/>


</template>

<style scoped>

</style>
