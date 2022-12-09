<template>
    <main-layout :paintings = "paintings">
        <h2 class = "text-center text-4xl mb-10 tracking-wider">Gallery</h2>
        <div class = "flex justify-center">
            <div class = "grid md:grid-cols-3 sm:grid-cols-1 gap-10 ml-16 mr-16">
                <figure v-for = "painting in paintings" :key = "painting.id">
                    <div v-if = "painting.status === 'unavailable'" class = "sold_out">Sold</div>
                    <img
                        class = "cursor-pointer"
                        :src = "'storage/' + painting.image"
                        :alt = "painting.title"
                        @click = "showIndividualProfile(painting.image)">
                    <figcaption class = "cursor-default">
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
        <div v-if = "showDetail">
            <painting-detail :painting = "selectedPainting" @close = "closeImage"></painting-detail>
        </div>
    </main-layout>
</template>
<script>
import mainLayout from "../Layouts/MainLayout.vue";
import paintingDetail from '../Components/frontend/painting/PaintingDetail.vue';

export default {
    components: {
        "main-layout": mainLayout,
        "painting-detail": paintingDetail,
    },
    props: ['paintings'],
    data() {
        return {
            selectedPainting: null,
            showDetail: false,
        }
    },
    methods: {
        showIndividualProfile(image) {
            this.selectedPainting = image;
            this.showDetail = true;
        },
        closeImage(event) {
            console.log(event);
            this.showDetail = event;
        }
    }
}
</script>
<style scoped>

/*add a sold badge to images if the status is unavailable*/
.sold_out {
    color: #fff;
    display: block;
    position: absolute;
    text-align: center;
    text-decoration: none;
    letter-spacing: .06em;
    background-color: #A00;
    padding: 0.5em 5em 0.4em 5em;
    text-shadow: 0 0 0.75em #444;
    box-shadow: 0 0 0.5em rgba(0, 0, 0, 0.5);
    font: bold 16px/1.2em Arial, Sans-Serif;
    -webkit-box-shadow: 0 0 0.5em rgba(0, 0, 0, 0.5);
    transform: rotate(-45deg) scale(0.75, 1);
    z-index: 10;
}

/*Increase image size when selected*/
/*img {
    transition: transform 0.25s ease;
}

img:hover {
    transform: scale(1.5);
}*/


</style>
