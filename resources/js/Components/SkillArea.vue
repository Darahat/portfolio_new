<template>
    <div
        id="skills"
        class="skill-area over-hidden position-relative pt-130 pb-110"
     data-aos="fade-up">
        <div class="marquee-w mb-125">
            <div class="marquee">
                <span class="pl-4">
                    Laravel + Vue.js Web Developer from Bangladesh *</span
                >
                <span class="pl-4"
                    >Flutter App Developer from Bangladesh *</span
                >
            </div>
            <div class="marquee marquee2 pb-1">
                <span class="pl-4"
                    >I'm Open for new projects * Let's Work Together *</span
                >
                <span class="pl-4"
                    >I'm Open for new projects * Let's Work Together *</span
                >
            </div>
        </div>
        <!-- /marquee -->

        <div class="container">
            <div class="row align-items-start justify-content-center">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="position-relative">
                        <div class="title mb-50">
                            <span
                                class="meta-text-color text-uppercase d-block mb-6"
                                >My Skill</span
                            >
                            <h2 class="mb-25">Growing Over Times</h2>
                            <p>
                                My coding journey began at university, where I
                                delved into Java and started building projects.
                                Intrigued by web development, I took my first
                                steps with HTML, CSS, JavaScript, and Bootstrap.
                                In 2018, I embraced Vue.js, collaborating on
                                several applications with my team. Subsequently,
                                I expanded my skills into PHP Laravel for
                                backend development and Flutter for app
                                development. Each skill acquisition was driven
                                by real-time project needs, ensuring relevance
                                and practicality in my learning journey.
                            </p>
                        </div>
                        <!-- /title -->
                    </div>
                </div>
                <!-- /col -->
                <div
                    class="col-xl-6 col-lg-7 offset-xl-1 col-md-12 col-sm-12 col-12"
                >
                    <div class="row justify-content-center mt-10">
                        <div
                            class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-9 mb-30"
                        >
                            <div
                                class="single-skill mb-15 text-center text-lg-left"
                            >
                                <div class="progress-circular over-hidden">
                                    <CircularProgress
                                        :percentage="85"
                                        color="#FF6B6B"
                                    />
                                    <label for="Front_End_Development">
                                        <h4 class="mt-15 text-center">
                                            Front-End Development
                                        </h4>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                        <div
                            class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-9 mb-30"
                        >
                            <div class="single-skill text-center">
                                <div class="progress-circular over-hidden">
                                    <CircularProgress
                                        :percentage="95"
                                        color="#4ECDC4"
                                    />
                                    <label for="Back_End_Development">
                                        <h4 class="mt-15 text-center">
                                            Back-End Development
                                        </h4>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                        <div
                            class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-9 mb-30"
                        >
                            <div
                                class="single-skill mb-15 text-center text-lg-left"
                            >
                                <div class="progress-circular over-hidden">
                                    <CircularProgress
                                        :percentage="60"
                                        color="#45B7D1"
                                    />
                                    <label for="Desktop_App_Development">
                                        <h4 class="mt-15 text-center">
                                            Desktop App Development
                                        </h4>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                        <div
                            class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-9 mb-30"
                        >
                            <div class="single-skill text-center">
                                <div class="progress-circular over-hidden">
                                    <CircularProgress
                                        :percentage="85"
                                        color="#A78BFA"
                                    />
                                    <label for="Flutter_App_Development">
                                        <h4 class="mt-15 text-center">
                                            Flutter App Development
                                        </h4>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                        <div
                            class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-9 mb-30"
                        >
                            <div class="single-skill text-center text-lg-right">
                                <div class="progress-circular over-hidden">
                                    <CircularProgress
                                        :percentage="70"
                                        color="#F9A826"
                                    />
                                    <label for="project_management">
                                        <h4 class="mt-15 text-center">
                                            Project management
                                        </h4>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
</template>

<script>
import CircularProgress from "./CircularProgress.vue";

export default {
    name: "SkillArea",
    components: {
        CircularProgress,
    },
};
</script>
