<template>
    <div class="bg-gray-100">
        <div class="flex justify-center z-10">
            <img src="/images/FelderStudioLogo.png" alt="Jim Logo">
        </div>
        <nav class="flex justify-center">
            <a class="p-3 hover:bg-gray-700 hover:text-white" href = "/welcome">Home</a>
            <button class="p-3 hover:bg-gray-700 hover:text-white">Category</button>
            <Link class="p-3 hover:bg-gray-700 hover:text-white" :href="'/dashboard'" as="button">Dashboard</Link>
        </nav>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
	name: "vue-navbar",
    components:{
        Link,
    }
}
</script>

<style scoped>

</style>
