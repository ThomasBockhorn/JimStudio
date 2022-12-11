<template>
    <vue-navbar :paintings = "paintings"></vue-navbar>
    <slot/>
    <vue-footer></vue-footer>
</template>

<script>
import navbar from "../Components/frontend/navbar/vue-navbar.vue";
import footer from "../Components/frontend/footer/footer.vue";

export default {
    name: "MainLayout",
    components: {
        "vue-navbar": navbar,
        "vue-footer": footer
    },
    props: ['paintings']
}
</script>
