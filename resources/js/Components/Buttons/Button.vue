<script setup>

const props = defineProps({
    task: Object
})

</script>

<template class="font-poppins">
    <button type="submit" class="bg-black border border-gray-500 text-white text-sm hover:bg-white hover:text-black transition font-medium rounded-md px-6 py-2.5 uppercase">
        <slot/>
    </button>
</template>

<style scoped>

</style>
