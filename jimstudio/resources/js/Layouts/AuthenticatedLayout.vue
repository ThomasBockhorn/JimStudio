<template>
    <backend-nav></backend-nav>
    <slot/>
    <vue-footer></vue-footer>
</template>
<script>
import backendNav from "../Components/backend/navbar/vue-backend-nav.vue";
import footer from "../Components/frontend/footer/vue-footer.vue";


export default {
    name: "AuthenticatedLayout",
    components: {
        "backend-nav": backendNav,
        "vue-footer": footer
    }
}
</script>

