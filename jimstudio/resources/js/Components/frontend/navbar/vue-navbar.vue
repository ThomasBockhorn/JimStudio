<template>
    <div>
        <div class="bg-gray-100">
            <div class="flex justify-center z-10">
                <img src="/images/FelderStudioLogo.png" alt="Jim Logo">
            </div>
            <nav class="flex justify-center">
                <a class="p-3 hover:bg-gray-700 hover:text-white" href = "/welcome">Home</a>
                <button class="p-3 hover:bg-gray-700 hover:text-white" @click="dropDown">Category</button>
                <Link class="p-3 hover:bg-gray-700 hover:text-white" :href="'/dashboard'" as="button">Dashboard</Link>
            </nav>
        </div>

        <div class="flex justify-center mt-2">
            <ul v-if="active" class="block flex flex-col text-center w-60 bg-gray-100">
                <li class="hover:bg-gray-700 hover:text-white p-2" @click="categoryPick">test 1</li>
                <li class="hover:bg-gray-700 hover:text-white p-2" @click="categoryPick">test 2</li>
            </ul>
        </div>

    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
	name: "vue-navbar",
    data(){
      return{
          active: false
      }
    },
    components:{
        Link,
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
