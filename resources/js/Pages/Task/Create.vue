<script setup>
import Header from "@/Components/MyComp/Header.vue";
import Footer from "@/Components/MyComp/Footer.vue";
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    name: '',
    description: '',
    deadline: '',
    user: '',
    // area: '',
})

function store() {
    form.post(route('tasks.store'))

}

</script>

<template>
    <Header/>

    <div class="rounded-lg shadow-xl">
        <form @submit.prevent="store" class="p-2 flex flex-col">
            <div class="flex flex-col p-6 -mb-6">
                <label for=name class="mb-4 font-semibold">ФИО:</label>
                <input v-model="form.name" type="text" id="name" placeholder="ФИО"
                       class="rounded-lg hover:border-gray-500 " required/>
            </div>

            <div class="flex flex-col p-6 -mb-6">
                <label for="desc" class="mb-4 font-semibold">Описание:</label>
                <textarea v-model="form.description" id="desc" rows="4" class="rounded-lg"
                          placeholder="Описание"></textarea>
            </div>

            <div class="flex flex-col p-6 -mb-6">
                <label for="date" class="mb-4 font-semibold">Дэдлайн:</label>
                <input v-model="form.deadline" type="date" id="date" class="rounded-lg" required/>
            </div>

            <div class="flex flex-col p-6 -mb-6">
                <label for="employee" class="mb-4 font-semibold ">Исполнитель:</label>
                <select v-model="form.user" id="employee" class="rounded-lg">
                    <option>
                        fff
                    </option>
                    <option>
                        fff
                    </option>
                    <option>
                        fff
                    </option>
                </select>

            </div>
            <div class="flex flex-col p-6 -mb-6 ">
                <label for="location" class="mb-4 font-semibold">Локация</label>
                <select v-model="form.area" id="employee" class="rounded-lg">
                    <option>
                        fff
                    </option>
                    <option>
                        fff
                    </option>
                    <option>
                        fff
                    </option>
                </select>
            </div>

<!--            <div class="flex flex-col p-6 mb-6">-->
<!--                <label for="date" class="mb-4 font-semibold">Изображения:</label>-->
<!--                <input @change="storeImage" type="file" ref="file" id="date" name="files[]" class="hidden" accept=".png, .jpg, .jpeg"/>-->
<!--                <a href="#" @click.prevent="selectFile()">Image</a>-->
<!--            </div>-->

            <!--            <BlackButton  class="w-1/4 self-center mb-8">-->
            <!--                Создать-->
            <!--            </BlackButton>-->
            <button type="submit">Создать</button>
        </form>
    </div>


    <Footer/>


</template>

<style scoped>

</style>
