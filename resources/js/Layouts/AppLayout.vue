<script setup>
import { Head } from '@inertiajs/vue3';
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';

</script>

<template>
    <Head title="Didarul Alam Rahat - Full-Stack & Flutter Developer | Web3 & Blockchain Specialist" />

    <div id="preloader">
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
    </div>

    <Header />

    <main class="over-hiddenn">
        <slot />
    </main>

    <Footer />
</template>
