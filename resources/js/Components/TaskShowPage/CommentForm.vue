<script setup>
import {router} from "@inertiajs/vue3";
import {reactive} from "vue";
const props = defineProps({
    task: Object
})

const form = reactive(
    {
        content: '',
    }
)

function postComments(task) {
    router.post(`/tasks/${task.id}/comment`, form)

}
</script>

<template>
    <form @submit.prevent="postComments(props.task)">
        <div class="mx-auto max-w-screen-sm px-4">
            <h1 class="mt-6 text-xl font-bold sm:mb-6 sm:text-3xl">Комментарии</h1>

            <div class="-ml-20 flex p-4 text-left text-gray-700">
                <img class="mr-5 h-12 w-12 rounded-full" src="https://ui-avatars.com/api/?name=John+Doe" alt=""/>
                <div class="w-full space-y-3 text-gray-700">
                    <div class="">
                        <textarea v-model="form.content" name="comment" id="" placeholder="" cols="30" rows="6"
                                  class="h-40 w-full min-w-full max-w-full overflow-auto whitespace-pre-wrap rounded-md border bg-white p-5 text-sm font-normal normal-case text-gray-600 opacity-100 outline-none focus:text-gray-600 focus:opacity-100 focus:ring"></textarea>
                    </div>
                    <div class="float-right">
                        <input type="submit" value="Отправить"
                               class="relative inline-flex h-10 w-auto max-w-full cursor-pointer items-center justify-center overflow-hidden whitespace-pre rounded-md bg-blue-700 px-4 text-center text-sm font-medium normal-case text-white opacity-100 outline-none focus:ring"/>
                    </div>
                </div>
            </div>
        </div>
    </form>

</template>

<style scoped>

</style>
