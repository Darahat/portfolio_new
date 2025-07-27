<template>
    <div>
        <!-- ✅ Single root wrapper -->
        <Head
            title="Didarul Alam Rahat - Full-Stack & Flutter Developer | Web & Blockchain Specialist"
        />

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

        <main class="over-hidden">
            <slot />
        </main>

        <Footer />
    </div>
</template>

<script setup>
import Footer from "@/Components/Footer.vue";
import Header from "@/Components/Header.vue";
import { Head } from "@inertiajs/vue3";
</script>
