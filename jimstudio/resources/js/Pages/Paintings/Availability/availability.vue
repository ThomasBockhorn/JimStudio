<template>
    <backend-layout>
        <div class = "flex justify-center gap-10">
            <div class = "mb-2 border-solid border-gray-300 rounded border shadow-sm">
                <div class = "grid grid-cols-7">
                    <div class = "col-span-7 bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                        <p class = "text-center">Availability</p>
                    </div>
                </div>
                <div class = "p-3">
                    <table class = "table-auto w-full text-left">
                        <tbody class = "text-gray-600">
                        <tr v-for = "painting in paintings" :key = "painting.id">
                            <td class = "border border-l-0 border-r-0 px-4 py-2 text-1xl" colspan = "5">
                                <em>{{ painting.title }}</em>: {{ painting.status }}
                            </td>
                            <td class = "border border-l-0 border-r-0 px-4 py-2 text-1xl" colspan = "1">
                                <button
                                    class = "border-2 p-2 bg-emerald-300 hover:bg-emerald-700 hover:text-white rounded-md"
                                    @click = "updateStatus(painting.id, 'available')">Available
                                </button>
                            </td>
                            <td class = "border border-l-0 border-r-0 px-4 py-2 text-1xl" colspan = "1">
                                <button class = "border-2 p-2 bg-red-200 hover:bg-red-700 hover:text-white rounded-md"
                                        @click = "updateStatus(painting.id, 'unavailable')">Unavailable
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <Link class = "inline-block m-5" href = "/paintings/">Back To Gallery</Link>
    </backend-layout>
</template>

<script>
import backendLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Link} from "@inertiajs/inertia-vue3";
import {Inertia} from "@inertiajs/inertia";


export default {
    name: "availability",
    components: {
        "backend-layout": backendLayout,
        Link
    },
    props: ['paintings'],
    methods: {
        updateStatus(id, status) {
            console.log(status);
            Inertia.post(route('painting-availability'), {id, status});
        }
    }
}
</script>

<style scoped>

</style>
