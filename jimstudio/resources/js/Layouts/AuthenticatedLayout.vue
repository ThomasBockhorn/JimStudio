<template>
    <backend-nav></backend-nav>
    <slot/>
</template>
<script>
import backendNav from "../Components/backend/navbar/vue-backend-nav.vue";

export default{
    name: "AuthenticatedLayout",
    components:{
        "backend-nav": backendNav,
    }
}
</script>

