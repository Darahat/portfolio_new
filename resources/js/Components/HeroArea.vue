<script setup>
import { TyperSetup } from "@/../../public/js/typer";
import { onMounted } from "vue";

onMounted(() => {
    TyperSetup();
});
</script>

<template>
    <div id="home" class="slider-area slider-bg-color over-hidden">
        <div
            class="single-slider slider-height over-hidden position-relative xxl-device-width bg-cover no-repeat"
            data-background="/images/slider/slider-bg.webp"
        >
            <!-- /parallax -->

            <div
                class="container slider-height d-flex align-items-center justify-content-center"
            >
                <div
                    class="row justify-content-center align-items-center h-100"
                >
                    <div
                        class="col-12 d-flex align-items-center justify-content-center"
                    >
                        <div
                            class="slider-content text-center position-relative z-index11"
                        >
                            <h1
                                class="mb-15 white-text"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="100"
                            >
                                <span
                                    class="sub-heading d-block text-uppercase primary-color mb-1"
                                    >Hello, I’m</span
                                >
                                Didarul Alam
                                <span class="hm2-m-hero-text-style">Rahat</span>
                            </h1>
                            <h2
                                class="text-capitalize white-text mb-45"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="200"
                            >
                                A Passionate
                                <span class="d-text d-block d-sm-inline-block">
                                    <span
                                        class="typer primary-color d-inline-block pl-2"
                                        id="main"
                                        data-words="Full Stack Developer, Flutter App Developer, Web3 Enthusiast, DeFi Builder, Remote Freelancer"
                                        data-delay="50"
                                        data-colors="#25262f"
                                    ></span>
                                    <span
                                        class="cursor primary-color d-inline-block"
                                        data-owner="main"
                                    ></span>
                                </span>
                            </h2>
                            <div
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="300"
                            >
                                <a
                                    href="#contact"
                                    class="btn position-relative over-hidden theme-bg text-uppercase transition5 mr-3"
                                    >Hire Me</a
                                >
                                <a
                                    href="#about"
                                    class="btn position-relative over-hidden bg-transparent main-border text-uppercase transition5"
                                    >About Me</a
                                >
                            </div>
                        </div>
                        <!-- /slider-content -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->

            <div
                class="slider-social-link position-absolute right-0 d-none d-md-block z-index11"
                data-aos="fade-left"
                data-aos-duration="1000"
                data-aos-delay="500"
            >
                <ul class="social pr-60">
                    <li class="mt-10 mb-10 rotate-hover">
                        <a
                            class="text-center d-inline-block rotate"
                            href="https://github.com/Darahat"
                            ><i class="fab fa-github"></i>
                        </a>
                    </li>
                    <li class="mt-10 mb-10 rotate-hover">
                        <a
                            class="text-center d-inline-block rotate"
                            href="https://twitter.com/darahat42"
                            ><i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="mt-10 mb-10 rotate-hover">
                        <a
                            class="text-center d-inline-block rotate"
                            href="https://www.linkedin.com/in/didarulalamrahat/"
                            ><i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="mt-10 mb-10 rotate-hover">
                        <a
                            class="text-center d-inline-block rotate"
                            href="https://stackoverflow.com/users/3424210/didarul-alam-rahat"
                        >
                            <i class="fab fa-stack-overflow"></i>
                        </a>
                    </li>
                </ul>
                <!-- social -->
            </div>
            <!-- /slider-social-link -->
        </div>
        <!-- /single-slider -->
    </div>
</template>
