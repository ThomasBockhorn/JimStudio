<template>
    <backend-layout>
        <h2 class = "text-center text-4xl mb-10 tracking-wider">Gallery</h2>
        <div class = "flex justify-center">
            <div class = "grid md:grid-cols-3 sm:grid-cols-1 gap-10 ml-16 mr-16">
                <figure v-for="painting in paintings" :key="painting.id">
                    <img
                        :src = "'/storage/' + painting.image"
                        :alt = "painting.title"
                        @click = "showIndividualProfile(painting.id)">
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

    </backend-layout>
</template>

<script>
import backendLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    name: "index",
    components: {
        "backend-layout": backendLayout,
    },
    props: ['paintings'],
    methods: {
        showIndividualProfile(id) {
            this.$inertia.get(route('paintings.show', id));
        }
    }
}
</script>

<style scoped>

</style>
