<template>
    <div class="w-full">
        <div class="bg-gray-100 w-full">
            <div class="flex justify-center z-10">
                <img src="/images/FelderStudioLogo.png" alt="Jim Logo">
            </div>
            <nav class="flex justify-center ml-6 mr-6">
                <Link method="post" class="p-3 hover:bg-gray-700 hover:text-white" href="/logout" as="button">Logout</Link>
            </nav>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
	name: "vue-backend-nav",
    components:{
        Link
    }
}
</script>

<style scoped>

</style>
