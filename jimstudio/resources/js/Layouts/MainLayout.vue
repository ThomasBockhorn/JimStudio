<template>
    <vue-navbar :paintings = "paintings"></vue-navbar>
    <slot/>
</template>

<script>
import navbar from "../Components/frontend/navbar/vue-navbar.vue";

export default {
    name: "MainLayout",
    components: {
        "vue-navbar": navbar
    },
    props: ['paintings']
}
</script>
