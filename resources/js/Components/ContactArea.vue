<template>
    <section id="contact" class="mt-40 mb-40 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 pb-12 title">
                <span class="meta-text-color text-uppercase d-block mb-6"
                    >Contact Me</span
                >
                <h2 class=" ">Let’s Start A New Project</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <!-- Contact Info -->
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="text-xl selection:">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-1">Location</h4>
                            <p class="text-gray-600">Mymensingh, Bangladesh</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="text-xl">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-1">LinkedIn</h4>
                            <a
                                href="https://www.linkedin.com/in/darahat/"
                                class="hover:underline"
                                target="_blank"
                            >
                                Send a Message
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="text-xl">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-1">Email</h4>
                            <a
                                href="mailto:darahat42@gmail.com"
                                class="hover:underline"
                            >
                                darahat42@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <form class="space-y-6" @submit.prevent="handleSubmit">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block mb-1 font-medium"
                                >Your Name</label
                            >
                            <input
                                v-model="form.name"
                                id="name"
                                type="text"
                                class="w-full border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
                                placeholder="Your Name"
                            />
                        </div>
                        <div>
                            <label for="email" class="block mb-1 font-medium"
                                >Email</label
                            >
                            <input
                                v-model="form.email"
                                id="email"
                                type="email"
                                class="w-full border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
                                placeholder="Your Email"
                            />
                        </div>
                        <div>
                            <label for="phone" class="block mb-1 font-medium"
                                >Phone Number</label
                            >
                            <input
                                v-model="form.phone"
                                id="phone"
                                type="text"
                                class="w-full border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
                                placeholder="Your Phone"
                            />
                        </div>
                        <div>
                            <label for="subject" class="block mb-1 font-medium"
                                >Subject</label
                            >
                            <input
                                v-model="form.subject"
                                id="subject"
                                type="text"
                                class="w-full border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
                                placeholder="Your Subject"
                            />
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block mb-1 font-medium"
                            >Your Message</label
                        >
                        <textarea
                            v-model="form.message"
                            id="message"
                            rows="5"
                            class="w-full border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"
                            placeholder="Start writing message here"
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        class="bg-primary text-white px-6 py-3 rounded-md uppercase font-semibold hover:bg-opacity-90 transition"
                    >
                        Submit Now
                    </button>

                    <p v-if="status" class="mt-4 text-green-600">
                        {{ status }}
                    </p>
                </form>
            </div>

            <!-- Map Placeholder -->
            <!-- <div class="mt-12" id="mapwrapper">
                 <div
                    class="w-full h-64 bg-gray-200 flex items-center justify-center text-gray-500"
                >
                    Map Placeholder
                </div>
            </div> -->
        </div>
    </section>
</template>

<script setup>
import { reactive, ref } from "vue";

const form = reactive({
    name: "",
    email: "",
    phone: "",
    subject: "",
    message: "",
});

const status = ref("");

const handleSubmit = () => {
    // Simulate submission
    console.log("Form submitted:", form);
    status.value = "Thank you for your message!";
    setTimeout(() => (status.value = ""), 5000);

    // Reset form
    form.name = "";
    form.email = "";
    form.phone = "";
    form.subject = "";
    form.message = "";
};
</script>

<style scoped>
.text-primary {
    color: #ef4444; /* Customize primary color */
}
.bg-primary {
    background-color: #ef4444;
}
</style>
