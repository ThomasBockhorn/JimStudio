<template>
    <div class="w-full">
        <div class="bg-gray-100 w-full">
            <div class="flex justify-center z-10">
                <img src="/images/FelderStudioLogo.png" alt="Jim Logo">
            </div>
            <nav class="flex justify-center ml-6 mr-6">
                <Link class="p-3 hover:bg-gray-700 hover:text-white" href="/dashboard">Home</Link>
                <button class="p-3 hover:bg-gray-700 hover:text-white" @click="dropDown">Paintings</button>
                <Link method="post" class="p-3 hover:bg-gray-700 hover:text-white" href="/logout">Logout</Link>
            </nav>
        </div>

        <div class="flex justify-center mt-2">
            <ul v-if="active" @mouseleave="active = false" class="block flex flex-col text-center w-60 bg-gray-100 z-50 absolute">
                <Link class="hover:bg-gray-700 hover:text-white p-2" href="/paintings/">Painting Gallery</Link>
                <Link class="hover:bg-gray-700 hover:text-white p-2" href="/paintings/create">Create New Painting</Link>
            </ul>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
	name: "vue-backend-nav",
    components:{
        Link
    },
    data(){
        return{
            active: false
        }
    },
    methods:{
        dropDown(){
            this.active = !this.active;
        },
        categoryPick(){
            this.active = !this.active;
        }
    }
}
</script>

<style scoped>

</style>
