<template>
    <div id="work" class="portfolio-area over-hidden pb-165" data-aos="fade-up">
        <div class="marquee-w mb-125">
            <div class="marquee">
                <span class="pl-4">Full Stack Web Developer*</span>
                <span class="pl-4">Flutter App Developer</span>
            </div>
            <div class="marquee marquee2 pb-1">
                <span>I’m Open for new projects * Let’s Work Together.</span>
                <span>I’m Open for new projects * Let’s Work Together.</span>
            </div>
        </div>
        <!-- /marquee -->

        <div class="portfolio-wrapper position-relative mt--5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="title text-center">
                            <span
                                class="meta-text-color text-uppercase d-block mb-6"
                                >Portfolio</span
                            >
                            <h2>My Recent Works</h2>
                        </div>
                        <!-- /title -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->

                <div class="row portfolio mt-80">
                    <div
                        class="col-12"
                        v-for="item in portfolioItems"
                        :key="item.id"
                    >
                        <div
                            class="row single-portfolio position-relative theme-border-top align-items-center"
                        >
                            <div class="col-xl-2 col-lg-2 col-md-7">
                                <div class="port-category">
                                    <span
                                        class="meta-text-color text-uppercase"
                                        >{{ item.category }}</span
                                    >
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <h3>{{ item.title }}</h3>
                            </div>
                            <div
                                class="col-xl-5 col-lg-5 col-md-6 d-flex justify-content-end align-items-center"
                            >
                                <img
                                    class="port-img position-absolute left-0 ml-xl-3 transition5"
                                    :src="item.imageThumb"
                                    :alt="item.title"
                                />
                                <div
                                    class="port-content text-center transition5 z-index11"
                                    @click="openModal(item.id)"
                                >
                                    <span class="d-inline-block"
                                        ><i class="far fa-plus"></i
                                    ></span>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- /row -->
                        <!-- Modal Starts -->
                        <div
                            v-if="activeModal === item.id"
                            class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 flex items-center justify-center p-4"
                            @click.self="closeModal"
                        >
                            <div
                                class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
                            >
                                <!-- Background overlay -->
                                <div
                                    class="fixed inset-0 transition-opacity"
                                    aria-hidden="true"
                                >
                                    <div
                                        class="absolute inset-0 bg-gray-900 opacity-75"
                                    ></div>
                                </div>

                                <!-- Modal panel -->
                                <div
                                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full"
                                >
                                    <div
                                        class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4"
                                    >
                                        <div class="flex justify-end">
                                            <button
                                                type="button"
                                                class="text-gray-400 hover:text-gray-500 focus:outline-none"
                                                @click="closeModal"
                                                aria-label="Close"
                                            >
                                                <span class="sr-only"
                                                    >Close</span
                                                >
                                                <i
                                                    class="fa fa-times text-xl"
                                                ></i>
                                            </button>
                                        </div>

                                        <div class="mt-3">
                                            <div class="mb-6">
                                                <img
                                                    class="w-full rounded-lg"
                                                    :src="item.imageLarge"
                                                    :alt="item.title"
                                                />
                                            </div>

                                            <div
                                                class="grid grid-cols-1 lg:grid-cols-2 gap-8"
                                            >
                                                <div>
                                                    <h2
                                                        class="text-2xl font-bold text-gray-900 mb-4"
                                                    >
                                                        {{ item.title }}
                                                    </h2>
                                                    <p class="text-gray-600">
                                                        {{ item.description }}
                                                    </p>
                                                </div>

                                                <div
                                                    class="bg-gray-50 p-6 rounded-lg"
                                                >
                                                    <ul class="space-y-3">
                                                        <li
                                                            class="flex justify-between"
                                                        >
                                                            <span
                                                                class="font-medium"
                                                                >Project
                                                                Type:</span
                                                            >
                                                            <span
                                                                class="text-gray-600"
                                                                >{{
                                                                    item.projectType
                                                                }}</span
                                                            >
                                                        </li>
                                                        <li
                                                            class="flex justify-between"
                                                        >
                                                            <span
                                                                class="font-medium"
                                                                >Client:</span
                                                            >
                                                            <span
                                                                class="text-gray-600"
                                                                >{{
                                                                    item.client
                                                                }}</span
                                                            >
                                                        </li>
                                                        <li
                                                            class="flex justify-between"
                                                        >
                                                            <span
                                                                class="font-medium"
                                                                >Duration:</span
                                                            >
                                                            <span
                                                                class="text-gray-600"
                                                                >{{
                                                                    item.duration
                                                                }}</span
                                                            >
                                                        </li>
                                                        <li
                                                            class="flex justify-between"
                                                        >
                                                            <span
                                                                class="font-medium"
                                                                >Task:</span
                                                            >
                                                            <span
                                                                class="text-gray-600"
                                                                >{{
                                                                    item.task
                                                                }}</span
                                                            >
                                                        </li>
                                                        <li
                                                            class="flex justify-between"
                                                        >
                                                            <span
                                                                class="font-medium"
                                                                >Budget:</span
                                                            >
                                                            <span
                                                                class="text-gray-600"
                                                                >{{
                                                                    item.budget
                                                                }}</span
                                                            >
                                                        </li>
                                                    </ul>

                                                    <a
                                                        :href="item.liveUrl"
                                                        target="_blank"
                                                        class="mt-6 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                    >
                                                        View Live
                                                    </a>
                                                </div>
                                            </div>

                                            <div
                                                class="mt-8 pt-6 border-t border-gray-200"
                                            >
                                                <div
                                                    class="flex flex-col sm:flex-row justify-between items-start sm:items-center"
                                                >
                                                    <div class="mb-4 sm:mb-0">
                                                        <h6
                                                            class="inline-block font-medium mr-3"
                                                        >
                                                            Tags:
                                                        </h6>
                                                        <div
                                                            class="inline-block"
                                                        >
                                                            <span
                                                                v-for="tag in item.tags"
                                                                :key="tag"
                                                                class="inline-block bg-gray-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
                                                            >
                                                                {{ tag }}
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h6
                                                            class="inline-block font-medium mr-3"
                                                        >
                                                            Share this project:
                                                        </h6>
                                                        <div
                                                            class="inline-block"
                                                        >
                                                            <a
                                                                href="https://twitter.com/darahat42"
                                                                class="inline-block text-blue-400 hover:text-blue-500 mx-1"
                                                            >
                                                                <i
                                                                    class="fab fa-twitter text-xl"
                                                                ></i>
                                                            </a>
                                                            <a
                                                                href="https://www.linkedin.com/in/didarulalamrahat/"
                                                                class="inline-block text-blue-600 hover:text-blue-700 mx-1"
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal end -->
                    </div>
                </div>
                <!-- /container -->
            </div>
            <!-- /portfolio-wrapper -->
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";

// Modal state
const activeModal = ref(null);

// Portfolio Items
const portfolioItems = [
    {
        id: "exampleModal-p1",
        category: "Front End Development",
        title: "Front End Development for RUBI",
        description:
            "Rubi.com is a dynamic online platform that offers a range of services to its users. As a Freelancer, I contributed to the front-end development using cutting-edge technologies such as Vue.js 3 and Vuetify. This platform provided an excellent opportunity for collaboration with the client, resulting in a rewarding journey of mutual growth and success.",
        imageThumb: "/images/portfolio/port-img1.webp",
        imageLarge: "/images/portfolio/port-img1-large.webp",
        projectType: "Front end development",
        client: "Alex Vdal",
        duration: "2 Weeks",
        task: "Frontend development using vue.js and vuetify.",
        budget: "N/A",
        liveUrl: "https://www.rubi.com/ca",
        tags: [
            "Web Development",
            "Front end Developer",
            "Vue.js",
            "Vuetify",
            "Vite",
            "Web page layout",
            "Responsive design",
            "Web page optimization",
            "Mobile-friendly layout",
            "User-friendly web design",
        ],
    },
    {
        id: "exampleModal-p2",
        category: "Front End Development",
        title: "Website Development for The Network Tap Company",
        description:
            "TheNetworkTap.com is a vibrant online platform that serves as a hub for networking enthusiasts and professionals alike. As a member of the Rubi development team, I played a crucial role in shaping its front-end development...",
        imageThumb: "/images/portfolio/port-img2.webp",
        imageLarge: "/images/portfolio/port-img2-large.webp",
        projectType: "Front-End Development",
        client: "Wei de chang",
        duration: "1 Week",
        task: "Front End Development for The Network Tap Company",
        budget: "$200",
        liveUrl: "https://thenetworktap.com/",
        tags: [
            "User-friendly web design",
            "front-end development",
            "HTML",
            "CSS",
            "Tailwind CSS",
            "UI design",
            "digital experience",
        ],
    },
    {
        id: "exampleModal-p3",
        category: "E-Learning System",
        title: "E-Learning system for ELP",
        description:
            "The E-learning system developed for ELP is a streamlined platform built with Laravel and MySQL for backend functionality, and HTML, CSS, and Tailwind CSS for frontend design...",
        imageThumb: "/images/portfolio/port-img3.webp",
        imageLarge: "/images/portfolio/port-img3-large.webp",
        projectType: "E-Learning Management System",
        client: "Kobe Bryant",
        duration: "2 Weeks",
        task: "Full Stack web Development Using Laravel",
        budget: "$400",
        liveUrl: "#contact",
        tags: [
            "E-learning platform",
            "Laravel development",
            "MySQL database",
            "HTML CSS Tailwind CSS",
            "Online education system",
            "Course management",
            "Interactive learning materials",
            "Student assessment",
            "Discussion forums",
            "Progress tracking",
        ],
    },
    {
        id: "exampleModal-p4",
        category: "Flutter App Development",
        title: "Flutter Mobile App for Bangladesh Agricultural University (BAU)",
        description:
            "The Flutter mobile app developed for Bangladesh Agricultural University has become a cornerstone in agricultural education...",
        imageThumb: "/images/portfolio/port-img4.webp",
        imageLarge: "/images/portfolio/port-img4-large.webp",
        projectType: "Flutter App Development",
        client: "Bangladesh Agricultural University",
        duration: "2 Weeks",
        task: "Make an app where university's all contacts will be easily accessible using Flutter Development",
        budget: "N/A",
        liveUrl:
            "https://play.google.com/store/apps/details?id=com.bauictcell.bau_app&hl=en&gl=US",
        tags: [
            "Flutter mobile app",
            "Agricultural education app",
            "Cross-platform development",
            "Mobile application for agriculture",
            "Educational technology",
            "Agriculture research app",
            "Agriculture outreach",
            "Mobile learning platform",
            "Agricultural resources app",
        ],
    },
    {
        id: "stakehive",
        category: "DeFi App Development",
        title: "DeFi App - StakeHive",
        description:
            "StakeHive is a feature-rich Decentralized Finance (DeFi) application enabling users to stake tokens and earn rewards in a secure, transparent, and decentralized environment...",
        imageThumb: "/images/portfolio/port-img5.webp",
        imageLarge: "/images/portfolio/port-img5-large.webp",
        projectType: "DeFi App Development",
        client: "Private Blockchain Startup",
        duration: "4 Weeks",
        task: "Smart contracts, staking logic, frontend integration using Nuxt.js & Web3.js",
        budget: "Confidential",
        liveUrl: "https://stakehive-defi-dapp.netlify.app",
        tags: [
            "DeFi",
            "Blockchain",
            "Staking App",
            "Smart Contract",
            "Solidity",
            "Nuxt 3",
            "Web3.js",
            "Token Rewards",
            "Vue.js",
        ],
    },
];

// Modal controls
function openModal(id) {
    activeModal.value = id;
}

function closeModal() {
    activeModal.value = null;
}
</script>
