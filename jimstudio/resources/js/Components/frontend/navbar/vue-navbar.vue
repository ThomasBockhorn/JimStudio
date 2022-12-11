<template>
    <div class="w-full">
        <div class = "bg-gray-100 w-full">
            <div class = "flex justify-center z-10">
                <img alt = "Jim Logo" src = "/images/FelderStudioLogo.png">
                <button class = "text-gray-500 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden"
                        type = "button"
                        @click = "isOpen = !isOpen">
                    <svg class = "h-6 w-6 fill-current ml-10" viewBox = "0 0 24 24">
                        <path
                            d = "M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
            </div>
            <nav :class = "isOpen? '!flex' : '!hidden'"
                 class = "flex-col md:flex-row ml-6 mr-6 justify-center hidden md:!flex">
                <a class = "p-3 hover:bg-gray-700 hover:text-white block" href = "/welcome">Home</a>
                <Link class = "p-3 hover:bg-gray-700 hover:text-white block" href = "/">Gallery</Link>
                <button v-if = "currentURL" id = "category"
                        class = "p-3 hover:bg-gray-700 hover:text-white w-full block md:w-auto text-start"
                        @click = "dropDown">Category
                </button>
                <Link class = "p-3 hover:bg-gray-700 hover:text-white block" href = "/about">About</Link>
                <Link class = "p-3 hover:bg-gray-700 hover:text-white block" href = "/contact">Contact</Link>
                <Link class = "p-3 hover:bg-gray-700 hover:text-white block" href = "/dashboard">Dashboard</Link>
            </nav>
        </div>
        <div class="flex justify-center mt-2">
            <ul v-if="active" @mouseleave="active = false" class="block flex flex-col text-center w-60 bg-gray-100 z-50 absolute">
                <Link v-for = "category in categoryMenu" :key = "category" :data = "{ category: category}"
                      href = "/paintings/category"
                      class = "hover:bg-gray-700 hover:text-white p-2 first-letter:uppercase" @click = "categoryPick">
                    {{ category }}
                </Link>
            </ul>
        </div>
    </div>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: "vue-navbar",
    data() {
        return {
            active: false,
            menuArray: [],
            isOpen: false
        }
    },
    components: {
        Link,
    },
    props: ['paintings'],
    computed: {
        //If the current window is not the main window or the category search page, the category button disappears
        currentURL() {
            return window.location.pathname === '/' || window.location.pathname.startsWith('/paintings/category');
        },
        categoryMenu() {
            //This creates a unique category Menu array
            return this.menuArray = [...new Set(this.paintings.map(item => item.category))];
        }

    },
    methods: {
        dropDown() {
            this.active = !this.active;
        },
        categoryPick() {
            this.active = !this.active;
        }
    },
}
</script>

<style scoped>
    a,
    button,
    Link,
    li{
        font-family: 'Montserrat', sans-serif
    }

</style>
