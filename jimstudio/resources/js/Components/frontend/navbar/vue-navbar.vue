<template>
    <nav>
        <a href = "/welcome">Home</a>
        <Link :href="'/gallery'">Gallery</Link>
        <Link :href="'/dashboard'" as="button">Dashboard</Link>
    </nav>
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
