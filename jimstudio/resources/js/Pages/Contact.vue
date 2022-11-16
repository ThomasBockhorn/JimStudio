<template>
    <main-layout>
        <div>
            <h4 class = "mb-5 text-2xl font-bold">Purchasing work from Jim Felder:</h4>
            <p class = "text-xl">
                The paintings on this site are classified as Available (work that is for sale) in the
                notes that accompany each image. If you are interested an available work, please let me
                know of your
                interest in case I will be revisiting the subject at some time in the future or I have
                plans to produce
                a similar work.</p>
            <p class = "text-xl pr-20">
                If you are interested in purchasing Available work, contact me for price and details.
                I will be happy to discuss any aspect of my work with you at any time regardless of
                your intent
                to purchase.
            </p>
            <address class = "mt-5">
                <p class = "text-xl">Phone/text: 256.426.0558</p>
                <p class = "text-xl">Email: jim.felder@gmail.com</p>
            </address>
        </div>
    </main-layout>
</template>

<script>
import mainLayout from "@/Layouts/MainLayout.vue";

export default {
	name: "Contact",
    components:{
        "main-layout": mainLayout
    }
}
</script>

<style scoped>

</style>
