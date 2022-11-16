<template>
    <main-layout>
        <section class = "m-5 p-5">
            <h2 class = "text-center text-4xl mb-10">Biography</h2>
            <p class = "text-xl">I am an artist living and working in Madison, Alabama.</p>
            <p class = " text-xl mb-5">
                My family moved from Mobile to Huntsville when, in 1956, my father was hired
                to manage Dr Von Braun’s computer laboratory during the Mercury through
                Apollo eras. My days were often spent in
                the woods or fields above Jones Valley. My early interest in painting and
                drawing meshed easily with what I was
                learning about the natural realms of north Alabama</p>
            <p class = "text-xl mb-5">
                I spent nearly my entire career as an illustrator, artist and graphic designer.
                I co-managed and co-founded several Huntsville design studios
                including Felder&Thames and the
                Grapheteria cooperative with Brien O’Brien. Brien and I also co-founded
                founded the Upstairs Gallery on
                Washington Street in the mid-1970s. It was very likely Huntsville’s first
                private outlet for the work of
                local artists</p>
            <p class = "text-xl mb-5">
                In recent years my work has taken on an intent that it did not previously possess: the preservation in images
                and impressions of the remnants of an outdoors I knew as a child and have enjoyed through the many years since.
                What I once pursued for its beauty has become my desire for its immortality. Without portraying panic or alarm,
                I want my paintings to invoke the feeling of staying one step ahead of disappearance. Everything I paint is a
                real place, usually nearby, often threatened. I seek opportunities where the fading naturalness of the old
                landscapes are challenged by the disruption of the new, without sentimentality or judgement. </p>
        </section>
    </main-layout>
</template>

<script>
import mainLayout from "@/Layouts/MainLayout.vue";

export default {
	name: "About",
    components:{
        "main-layout": mainLayout
    }
}
</script>

<style scoped>

</style>
