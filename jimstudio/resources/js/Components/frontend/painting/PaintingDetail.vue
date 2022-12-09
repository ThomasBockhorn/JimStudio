<template>
    <div class = "top-0 left-0 z-50 absolute fixed w-full h-full">
        <div class = "flex justify-end bg-gray-200">
            <button class = "p-3 hover:bg-gray-700 hover:text-white" @click = "closeDetail">Close</button>
        </div>
        <div class = "pl-5 pr-5 bg-gray-100">
            <img :alt = "painting.image" :src = "'storage/' + painting">
        </div>
    </div>
</template>

<script>
export default {
    name: "PaintingDetail",
    props: ['painting'],
    methods: {
        closeDetail() {
            this.$emit('close', false);
        }
    }
}
</script>

<style scoped>
img {
    min-width: 100%;
}
</style>
