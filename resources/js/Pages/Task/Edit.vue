<script>
import Header from "@/Components/App/Header.vue";
import Footer from "@/Components/App/Footer.vue";
import {router} from '@inertiajs/vue3'
import 'filepond/dist/filepond.min.css';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css';

import Dropzone from "dropzone";
import {data} from "autoprefixer";

export default {
    props: {
        task: Object,
        users: Object,
        areas: Object,
        images: Object,
    },

    components: {
        Footer,
        Header
    },
    data() {
        // this.images.forEach(images => {
        //     let file = {name: "Filename 2", size: 12345};
        //     // this.dropzone.displayExistingFile(file, images.url);
        //
        // })
        console.log(this.images);
        console.log(this.dropzone);

        return {
            id: this.task.id,
            title: this.task.title,
            description: this.task.description,
            deadline: this.task.deadline,
            area_id: this.task.area_id,
            user_id: this.task.user_id,
            status: this.task.status,
            dropzone: null,


        }

    },

    mounted() {
        this.dropzone = new Dropzone(this.$refs.dropzone, {
            url: '/tasks',
            autoProcessQueue: false,
        })
        // console.log(this.dropzone)
    },
    methods: {
        update() {
            const data = new FormData()
            const files = this.dropzone.getAcceptedFiles()
            files.forEach(file => {
                data.append('images[]', file)
            })
            data.append('title', this.title)
            data.append('description', this.description)
            data.append('deadline', this.deadline)
            data.append('area_id', this.area_id)
            data.append('user_id', this.user_id)
            data.append('_method', 'PATCH')
            router.post(`/tasks/${this.id}`, data, {})

            console.log(data)

            // this.$inertia.patch(`/tasks/${this.id}`, {
            //
            //     title: this.title,
            //     description: this.description,
            //     deadline: this.deadline,
            //     area_id: this.area_id,
            //     user_id: this.user_id,
            // })
        }
    },

}
</script>

<template>
    <Header/>

    <h1 class="mx-auto text-3xl pt-5 text-center font-bold font">Редактирование Задачи</h1>
    <div class="rounded-lg shadow-xl">
        <form @submit.prevent="update" class="p-2 flex flex-col">
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
                <select v-model="user_id" id="employee" class="rounded-lg">
                    <option :value="user.id" v-for="user in users">
                        {{ user.name }}
                    </option>
                </select>

            </div>

            <div class="flex flex-col p-6 -mb-6 ">
                <label for="location" class="mb-4 font-semibold">Локация</label>
                <select v-model="area_id" id="location" class="rounded-lg">
                    <option :value="area.id" v-for="area in areas">
                        {{ area.title }}
                    </option>
                </select>
            </div>

            <div class="flex flex-col p-6 -mb-6">
                <label for="status" class="mb-4 font-semibold">Статус</label>
                <p id="status"> {{ task.status }}</p>
            </div>

            <div class="w-1/4 mx-auto">

                <div ref="dropzone" class="cursor-pointer p-5 text-center bg-gray-800 text-white">
                    Загрузить изображение
                </div>
            </div>


            <button type="submit">Сохранить</button>

        </form>

    </div>


    <Footer/>


</template>

<style scoped>

</style>
