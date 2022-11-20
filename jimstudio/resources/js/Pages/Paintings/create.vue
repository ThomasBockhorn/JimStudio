<template>
    <backend-layout>
        <h2 class = "text-center text-4xl mb-10 tracking-wider">Create a New Painting</h2>
        <div class = "flex justify-center">
            <form @submit.prevent="submit">

            </form>
        </div>
    </backend-layout>
</template>

<script>
import backendLayout from "@/Layouts/AuthenticatedLayout.vue";
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";

export default {
	name: "create",
    components:{
        "backend-layout": backendLayout,
    },
    setup(){
        const form = reactive({
            title: null,
            size: null,
            medium: null,
            location: null,
            frame_status: null,
            status: null,
            notes: null,
            category: null
        });

        function submit(){
            Inertia.post('/paintings', form);
        }

        return { form, submit }
    }

}
</script>

<style scoped>

</style>
