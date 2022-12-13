<template>
    <div class = "top-0 left-0 z-50 fixed overflow-auto w-full h-screen bg-gray-100">
        <div class = "flex justify-end bg-gray-200">
            <button class = "p-3 hover:bg-gray-700 hover:text-white" @click = "closeDetail">Close</button>
        </div>
        <div class = "pl-5 pr-5 pt-5 flex justify-center ">
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
    width: 100%;
    height: 100%;

}
</style>
