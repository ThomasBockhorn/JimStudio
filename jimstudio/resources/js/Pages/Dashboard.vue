<template>
    <backend-layout>
        <div class="grid sm:grid-cols-1 md:grid-cols-2 w-full">
            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                     <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                        Paintings
                    </div>
                     <div class="p-3">
                        <table class="table-auto w-full text-left">
                            <tbody class="text-gray-600">
                            <tr v-for="painting in paintings" :key="painting.id">
                                <td colspan="6" class="border border-l-0 border-r-0 px-4 py-2 text-2xl hover:bg-teal-300"><Link :href="'/paintings/' + painting.id">{{ painting.title }}</Link></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                        Painting Categories
                    </div>
                    <div class="p-3">
                        <table class="table-auto w-full text-left">
                            <tbody class="text-gray-600">
                            <tr v-for="painting in paintings" :key="painting.id">
                                <td colspan="6" class="border border-l-0 border-r-0 px-4 py-2 text-2xl hover:bg-teal-300">{{ painting.category}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </backend-layout>
</template>
<script>
import backendLayout from "../Layouts/AuthenticatedLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";

export default{
    components:{
        "backend-layout": backendLayout,
        Link
    },
    props:['paintings']
}
</script>

