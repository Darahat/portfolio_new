<template>
    <footer class="bg-white pt-24 pb-16 border-t">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                <!-- Logo & Copyright -->
                <div>
                    <div class="mb-6">
                        <img
                            src="/images/logo/logo-dark.webp"
                            alt="Didarul Alam Rahat - Full Stack Developer"
                            class="h-10"
                        />
                    </div>
                    <p class="text-gray-600 text-sm">
                        All rights reserved © 2024
                        <a
                            href="#contact"
                            class="text-primary font-semibold hover:underline"
                        >
                            darahat42
                        </a>
                    </p>
                </div>

                <!-- Social Links (Responsive handling: hidden in lg, shown in sm-md) -->
                <div class="hidden sm:block lg:hidden">
                    <h4 class="text-lg font-semibold mb-4">Follow Me</h4>
                    <ul class="flex flex-col space-y-2">
                        <li>
                            <a
                                href="https://twitter.com/darahat42"
                                class="flex items-center text-gray-600 hover:text-primary transition"
                                target="_blank"
                            >
                                <i class="fab fa-twitter mr-2"></i> Twitter
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://www.linkedin.com/in/didarulalamrahat"
                                class="flex items-center text-gray-600 hover:text-primary transition"
                                target="_blank"
                            >
                                <i class="fab fa-linkedin-in mr-2"></i> LinkedIn
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <form @submit.prevent="handleSubscribe">
                        <label
                            for="email"
                            class="block text-sm text-gray-600 mb-1"
                            >Email Address</label
                        >
                        <div class="relative">
                            <input
                                v-model="email"
                                type="email"
                                id="email"
                                placeholder="Submit your email"
                                class="w-full border rounded-md py-2 pl-4 pr-10 focus:outline-none focus:ring-2 focus:ring-primary"
                            />
                            <button
                                type="submit"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-primary"
                            >
                                <i class="fal fa-envelope"></i>
                            </button>
                        </div>
                        <p v-if="message" class="text-sm text-green-600 mt-2">
                            {{ message }}
                        </p>
                    </form>
                </div>

                <!-- Social Links (Visible only on lg and above) -->
                <div class="hidden lg:block">
                    <h4 class="text-lg font-semibold mb-4">Follow Me</h4>
                    <ul class="flex flex-col space-y-2">
                        <li>
                            <a
                                href="https://twitter.com/darahat42"
                                class="flex items-center text-gray-600 hover:text-primary transition"
                                target="_blank"
                            >
                                <i class="fab fa-twitter mr-2"></i> Twitter
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://www.linkedin.com/in/didarulalamrahat/"
                                class="flex items-center text-gray-600 hover:text-primary transition"
                                target="_blank"
                            >
                                <i class="fab fa-linkedin-in mr-2"></i> LinkedIn
                            </a>
                        </li>
                        <li>
                            <a
                                href="https://github.com/Darahat"
                                class="flex items-center text-gray-600 hover:text-primary transition"
                                target="_blank"
                            >
                                <i class="fab fa-github mr-2"></i> GitHub
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup>
import { ref } from "vue";

const email = ref("");
const message = ref("");

const handleSubscribe = () => {
    if (email.value) {
        message.value = "Subscribed successfully!";
        email.value = "";
        setTimeout(() => (message.value = ""), 5000);
    }
};
</script>

<style scoped>
.text-primary {
    color: #ef4444; /* Customize this for your theme color */
}
</style>
