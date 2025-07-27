<template>
    <header
        class="fixed top-0 left-0 w-full z-50 transition-all duration-300"
        :class="{ 'bg-black bg-opacity-70 backdrop-blur': isSticky }"
        data-aos="fade-down"
        data-aos-duration="500"
        data-aos-easing="ease-in-out"
        data-aos-offset="0"
    >
        <div
            class="container mx-auto px-4 py-4 flex items-center justify-between"
        >
            <!-- Logo with animation -->
            <a
                href="/"
                class="flex items-center space-x-2"
                data-aos="fade-right"
                data-aos-delay="100"
                data-aos-duration="500"
            >
                <img
                    src="/images/logo/logo.webp"
                    alt="Didarul Alam Rahat logo"
                    class="h-10 w-auto"
                />
            </a>

            <!-- Desktop Nav with staggered animations -->
            <nav class="hidden lg:flex space-x-6 text-white font-medium">
                <a
                    v-for="(item, index) in navItems"
                    :key="item.label"
                    :href="item.href"
                    class="hover:text-primary"
                    :data-aos="'fade-down'"
                    :data-aos-delay="100 + index * 100"
                    data-aos-duration="500"
                >
                    {{ item.label }}
                </a>
            </nav>

            <!-- CV Button with animation -->
            <div
                class="hidden lg:block ml-6"
                data-aos="fade-left"
                data-aos-delay="600"
                data-aos-duration="500"
            >
                <a
                    href="/Files/darahatcv.pdf"
                    download
                    class="bg-white text-black px-4 py-2 rounded shadow hover:bg-gray-200 transition"
                >
                    Download CV
                </a>
            </div>

            <!-- Mobile Toggle with animation -->
            <button
                class="lg:hidden text-white text-2xl focus:outline-none"
                @click="toggleMobileMenu"
                data-aos="fade-left"
                data-aos-delay="600"
                data-aos-duration="500"
            >
                <i class="far fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu with animations -->
        <div
            v-if="mobileMenuOpen"
            class="fixed inset-0 z-40 bg-black bg-opacity-80 text-white lg:hidden"
        >
            <div class="flex justify-end p-4">
                <button
                    @click="toggleMobileMenu"
                    class="text-white text-2xl"
                    data-aos="fade-left"
                    data-aos-duration="300"
                >
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <nav
                class="flex flex-col items-center space-y-6 pt-10 text-lg bg-black bg-opacity-80 text-white pb-10"
            >
                <a
                    v-for="(item, index) in navItems"
                    :key="item.label"
                    :href="item.href"
                    @click="toggleMobileMenu"
                    :data-aos="'fade-up'"
                    :data-aos-delay="100 + index * 100"
                    data-aos-duration="300"
                >
                    {{ item.label }}
                </a>
                <a
                    href="/Files/darahatcv.pdf"
                    download
                    class="mt-4 bg-primary text-black px-4 py-2 rounded shadow hover:bg-gray-300"
                    data-aos="fade-up"
                    data-aos-delay="700"
                    data-aos-duration="300"
                >
                    Download CV
                </a>
            </nav>
        </div>
    </header>
</template>
<script setup>
import AOS from "aos";
import "aos/dist/aos.css";
import { onMounted, onUnmounted, ref } from "vue";

const mobileMenuOpen = ref(false);
const isSticky = ref(false);

const navItems = [
    { label: "Home", href: "#home" },
    { label: "About", href: "#about" },
    { label: "Works", href: "#work" },
    { label: "Service", href: "#service" },
    { label: "Contact", href: "#contact" },
    { label: "Blog", href: "#blog" },
];

const toggleMobileMenu = () => {
    mobileMenuOpen.value = !mobileMenuOpen.value;
    if (mobileMenuOpen.value) {
        // Reinitialize AOS for mobile menu items when it opens
        setTimeout(() => {
            AOS.refresh();
        }, 50);
    }
};

const handleScroll = () => {
    isSticky.value = window.scrollY > 20;
};

onMounted(() => {
    AOS.init({
        once: true, // Animations only happen once
        offset: 10, // Change offset to trigger animations sooner
    });
    window.addEventListener("scroll", handleScroll);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
});
</script>
<style scoped>
a {
    color: white;
}
</style>
