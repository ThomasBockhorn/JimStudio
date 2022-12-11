<template>
    <backend-layout>
        <h2 class = "text-center text-4xl mb-10 tracking-wider">Create a New Painting</h2>
        <div class = "flex justify-center m-8">
            <form @submit.prevent="submit">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "project-title">
                            Painting Title
                        </label>
                        <input
                            id = "project-title"
                            v-model = "form.title"
                            class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            placeholder = "Project Title" required
                            type = "text">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "project-category">
                            Painting Category
                        </label>
                        <input
                            id = "project-category"
                            v-model = "form.category"
                            class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            placeholder = "Category" required
                            type = "text">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-size">
                            Painting Size
                        </label>
                        <input
                            id = "painting-size"
                            v-model = "form.size"
                            class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            placeholder = "Painting Size" required
                            type = "text">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-medium">
                            Painting Medium
                        </label>
                        <input
                            id = "painting-medium"
                            v-model = "form.medium"
                            class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            placeholder = "Painting Medium" required
                            type = "text">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-location">
                            Painting Location
                        </label>
                        <input
                            id = "painting-location"
                            v-model = "form.location"
                            class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            placeholder = "Painting Location"
                            required type = "text">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-frame">
                            Painting Frame
                        </label>
                        <input
                            id = "painting-frame"
                            v-model = "form.frame_status"
                            class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            placeholder = "Painting Frame"
                            required type = "text">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-status">
                            Painting Status
                        </label>
                        <select
                            id = "skill-percentage"
                            v-model = "form.status"
                            class = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            name = "skill_percentage" required>
                            <option value = "available">Available</option>
                            <option value = "unavailable">Not Available</option>
                            >
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for="painting-image">
                            Painting Image
                        </label>
                        <input
                            id = "painting-image"
                            accept = ".jpg, .jpeg, .png"
                            class = " appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            placeholder = "Painting Image"
                            type = "file" @change = "previewImage"
                            required
                            @input = "form.image = $event.target.files[0]">
                    </div>
                    <div class = "w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class = "block uppercase tracking-wide text-gray-700 text-xs font-light mb-1"
                               for = "painting-notes">
                            Notes
                        </label>
                        <textarea
                            id = "painting-notes"
                            v-model = "form.notes"
                            class = "appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white-500"
                            cols = "30" name = "notes" placeholder = "Painting Notes"
                            required rows = "10"></textarea>
                    </div>
                    <div class="w-full md:w-1/2 px-3 mt-5">
                        <img :src = "url" :alt = "url">
                    </div>
                </div>
                <button class = "inline-block m-5" type = "submit">Submit</button>
                <Link href="/paintings/" class="inline-block m-5">Back</Link>
            </form>
        </div>
    </backend-layout>
</template>

<script>
import backendLayout from "@/Layouts/AuthenticatedLayout.vue";
import {reactive} from "vue";
import {Inertia} from "@inertiajs/inertia";
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: "create",
    components: {
        "backend-layout": backendLayout,
        Link
    },
    setup() {
        const form = reactive({
            title: null,
            size: null,
            medium: null,
            location: null,
            frame_status: null,
            status: null,
            notes: null,
            category: null,
            image: null
        });

        function submit(){
            Inertia.post(route('paintings.store'), form);
        }

        return { form, submit }
    },
    data(){
        return{
            url: null
        }
    },
    methods:{
        previewImage(e){
            const imageURL = e.target.files[0];
            this.url = URL.createObjectURL(imageURL);
        }
    },

}
</script>

<style scoped>

</style>
