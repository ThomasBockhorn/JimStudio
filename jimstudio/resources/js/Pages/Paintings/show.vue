<template>
    <backend-layout>
        <h2 class = "text-center text-4xl mb-10 tracking-wider">Showing Painting</h2>
        <div class = "flex justify-center m-8">
            <form @submit.prevent = "submit">
                <div class = "flex flex-wrap -mx-3 mb-6">
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "project-title">
                            Painting Title
                        </label>
                        <input disabled
                               class = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                               id = "project-title" type = "text" placeholder = "Project Title" v-model = "form.title">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "project-category">
                            Painting Category
                        </label>
                        <input disabled
                               class = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                               id = "project-category" type = "text" placeholder = "Category" v-model = "form.category">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-size">
                            Painting Size
                        </label>
                        <input disabled
                               class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                               id = "painting-size" type = "text" placeholder = "Painting Size" v-model = "form.size">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-medium">
                            Painting Medium
                        </label>
                        <input disabled
                               class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                               id = "painting-medium" type = "text" placeholder = "Painting Medium"
                               v-model = "form.medium">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-location">
                            Painting Location
                        </label>
                        <input disabled
                               class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                               id = "painting-location" type = "text" placeholder = "Painting Location"
                               v-model = "form.location">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-frame">
                            Painting Frame
                        </label>
                        <input disabled
                               class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                               id = "painting-frame" type = "text" placeholder = "Painting Frame"
                               v-model = "form.frame_status">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-status">
                            Painting Status
                        </label>
                        <select disabled
                                class = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                id = "skill-percentage" name = "skill_percentage" v-model = "form.status">
                            <option value = "available">Available</option>
                            <option value = "unavailable">Not Available</option>
                            >
                        </select>
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-image">
                            Painting Image
                        </label>
                        <input disabled
                               class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                               id = "painting-image" type = "file" placeholder = "Painting Image"
                               @input = "form.image = $event.target.files[0]" @change = "previewImage">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-notes">
                            Notes
                        </label>
                        <textarea disabled
                                  class = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                                  name = "notes" id = "painting-notes" cols = "30" rows = "10"
                                  placeholder = "Painting Notes" v-model = "form.notes"></textarea>
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mt-5">
                        <img :src = "'/storage/' + url" :alt = "url">
                    </div>
                </div>
                <button href = "#" type = "submit" class = "inline-block m-5">Delete</button>
                <Link href = "/paintings/" class = "inline-block m-5">Gallery</Link>
                <Link href = "/dashboard" class = "inline-block m-5">Dashboard</Link>
            </form>
        </div>
    </backend-layout>
</template>

<script>
import backendLayout from "@/Layouts/AuthenticatedLayout.vue";
import {reactive} from "vue";
import {Link} from "@inertiajs/inertia-vue3";
import {Inertia} from "@inertiajs/inertia";


export default {
    name: "show",
    components: {
        "backend-layout": backendLayout,
        Link
    },
    props: {
        painting: Object
    },
    data() {
        return {
            url: this.painting.image
        }
    },
    methods: {
        previewImage(e) {
            const imageURL = e.target.files[0];
            this.url = URL.createObjectURL(imageURL);
        },
    },
    setup(props) {
        const form = reactive({
            title: props.painting.title,
            category: props.painting.category,
            size: props.painting.size,
            medium: props.painting.medium,
            location: props.painting.location,
            frame_status: props.painting.frame_status,
            status: props.painting.status,
            image: props.painting.image,
            notes: props.painting.notes,
            id: props.painting.id
        });

        function submit() {
            Inertia.post(route('painting.delete', form.id));
            form.title = null;
            form.category = null;
            form.size = null;
            form.medium = null;
            form.location = null;
            form.frame_status = null;
            form.status = null;
            form.image = null;
            form.notes = null;
            form.id = null;
        }

        return {
            form, submit
        };
    },
}
</script>

<style scoped>

</style>
