<template>
    <main-layout>
        <h2 class = "text-center text-4xl mb-10 tracking-wider">Gallery</h2>
        <div class = "flex justify-center">
            <div class = "grid md:grid-cols-3 sm:grid-cols-1 gap-10 ml-16 mr-16">
                <figure v-for="painting in paintings" :key="painting.id">
                    <img
                        :src = "'storage/' + painting.image"
                        :alt = "painting.title">
                    <figcaption>
                        <p>Title: <em>{{ painting.title }}</em></p>
                        <p>Size: {{ painting.size }}</p>
                        <p>Medium: {{ painting.medium }}</p>
                        <p>Location: {{ painting.location }}</p>
                        <p>Frame: {{ painting.frame_status }}</p>
                        <p>Status: {{ painting.status }}.</p>
                        <p>Notes: {{ painting.notes }}</p>
                        <p>Category: {{ painting.category }}</p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </main-layout>
</template>
<script>
import mainLayout from "../Layouts/MainLayout.vue";

export default{
    components:{
        "main-layout": mainLayout
    },
    props: ['paintings']
}
</script>
<style scoped></style>
