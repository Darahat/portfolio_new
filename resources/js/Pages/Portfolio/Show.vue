<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { defineProps } from "vue";

const props = defineProps({
    item: Object,
});
</script>

<template>
    <div>
        <Head
            title="Didarul Alam Rahat - Full-Stack & Flutter Developer | Web3 & Blockchain Specialist"
        />

        <AppLayout>
            <section class="min-h-screen bg-black py-16 px-4 pt-150">
                <div
                    class="max-w-5xl mx-auto bg-white shadow rounded-lg overflow-hidden"
                >
                    <!-- Image -->
                    <div class="w-full">
                        <img
                            :src="item.imageLarge"
                            :alt="item.title"
                            class="w-full object-cover rounded-t-lg"
                        />
                    </div>

                    <!-- Content -->
                    <div class="p-6 space-y-6">
                        <!-- Title & Description -->
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">
                                {{ item.title }}
                            </h1>
                            <p class="text-gray-700">{{ item.description }}</p>
                        </div>

                        <!-- Project Info Grid -->
                        <div
                            class="grid grid-cols-1 sm:grid-cols-2 gap-6 bg-gray-50 p-6 rounded-lg"
                        >
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-900"
                                    >Project Type:</span
                                >
                                <span class="text-gray-700">{{
                                    item.projectType
                                }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-900"
                                    >Client:</span
                                >
                                <span class="text-gray-700">{{
                                    item.client
                                }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-900"
                                    >Duration:</span
                                >
                                <span class="text-gray-700">{{
                                    item.duration
                                }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-900"
                                    >Task:</span
                                >
                                <span class="text-gray-700">{{
                                    item.task
                                }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-900"
                                    >Budget:</span
                                >
                                <span class="text-gray-700">{{
                                    item.budget
                                }}</span>
                            </div>
                        </div>

                        <!-- Live Link -->
                        <div class="pt-4">
                            <a
                                :href="item.liveUrl"
                                target="_blank"
                                class="inline-block bg-indigo-600 text-white px-6 py-2 rounded hover:bg-indigo-700 transition"
                            >
                                View Live
                            </a>
                        </div>

                        <!-- Tags & Share -->
                        <div
                            class="border-t pt-6 flex flex-col sm:flex-row justify-between gap-4"
                        >
                            <div>
                                <h6 class="text-gray-900 font-semibold mb-2">
                                    Tags:
                                </h6>
                                <div>
                                    <span
                                        v-for="tag in item.tags"
                                        :key="tag"
                                        class="inline-block bg-gray-100 text-gray-800 rounded-full px-3 py-1 text-sm font-medium mr-2 mb-2"
                                    >
                                        {{ tag }}
                                    </span>
                                </div>
                            </div>

                            <div>
                                <h6 class="text-gray-900 font-semibold mb-2">
                                    Share this project:
                                </h6>
                                <div class="flex space-x-3">
                                    <a
                                        href="https://twitter.com/darahat42"
                                        target="_blank"
                                        class="text-blue-400 hover:text-blue-500"
                                    >
                                        <i class="fab fa-twitter text-xl"></i>
                                    </a>
                                    <a
                                        href="https://www.linkedin.com/in/didarulalamrahat/"
                                        target="_blank"
                                        class="text-blue-700 hover:text-blue-800"
                                    >
                                        <i
                                            class="fab fa-linkedin-in text-xl"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </AppLayout>
    </div>
</template>
