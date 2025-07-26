<template>
    <section class="py-20 bg-white overflow-hidden" data-aos="fade-up">
        <div class="container mx-auto text-center title mb-12 pb-12">
            <span class="meta-text-color text-uppercase d-block mb-6"
                >Partners</span
            >
            <h2 class="">I’m Proud to Work With</h2>
        </div>

        <div class="relative w-full overflow-hidden">
            <div class="whitespace-nowrap flex items-center animate-scroll">
                <div
                    v-for="(logo, index) in duplicatedLogos"
                    :key="index"
                    class="flex-shrink-0 w-40 mx-4"
                >
                    <img
                        :src="logo"
                        alt="brand logo"
                        class="w-full h-auto object-contain grayscale hover:grayscale-0 transition"
                    />
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const logos = [
    "/images/brand/brand-img1.webp",
    "/images/brand/brand-img2.webp",
    "/images/brand/brand-img3.webp",
    "/images/brand/brand-img4.webp",
    "/images/brand/brand-img5.webp",
    "/images/brand/brand-img6.webp",
    "/images/brand/brand-img7.webp",
];

// Duplicate for infinite scroll effect
const duplicatedLogos = [...logos, ...logos];
</script>

<style scoped>
@keyframes scroll {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-50%);
    }
}

.animate-scroll {
    animation: scroll 30s linear infinite;
}
::-webkit-scrollbar {
    display: none;
}
</style>
