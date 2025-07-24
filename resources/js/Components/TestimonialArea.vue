<template>
    <div class="testimonial-area position-relative over-hidden">
        <div class="container">
            <div
                class="testimonial-bg section-bg pt-170 pb-170 position-relative"
            >
                <div class="row align-items-start justify-content-center">
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="position-relative">
                            <div class="title">
                                <span
                                    class="meta-text-color text-uppercase d-block mb-6"
                                    >Testimonials</span
                                >
                                <h2 class="mb-20">What People Say</h2>
                            </div>
                        </div>
                        <div
                            class="testimonial-wrapper position-relative mt-40 pb-50"
                        >
                            <div
                                class="quit d-inline-block position-absolute left-0"
                            ></div>

                            <Swiper
                                :modules="[Navigation, Pagination, Autoplay]"
                                :slides-per-view="1"
                                :space-between="30"
                                :loop="true"
                                :autoplay="{ delay: 3000 }"
                                :pagination="{
                                    clickable: true,
                                    el: '.testimonial-pagination',
                                }"
                                :navigation="{
                                    nextEl: '.testimonial-next',
                                    prevEl: '.testimonial-prev',
                                }"
                                class="testimonial-active pl-80 pr-90"
                                @swiper="setSwiperInstance"
                            >
                                <SwiperSlide v-for="n in 10" :key="n">
                                    <div class="testimonial-content">
                                        <div
                                            class="testi-info d-flex align-items-center mt-40"
                                        >
                                            <div class="testi-avatar mr-25">
                                                <img
                                                    :src="`/images/testimonial/fiverr1 (${n}).webp`"
                                                    :alt="`Client feedback screenshot ${n} for backend developer`"
                                                    loading="lazy"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </SwiperSlide>

                                <!-- Custom Navigation -->
                                <div
                                    class="testimonial-navigation d-flex align-items-center mt-40"
                                >
                                    <div
                                        class="testimonial-prev mr-20 cursor-pointer"
                                    >
                                        <svg
                                            width="40"
                                            height="40"
                                            viewBox="0 0 40 40"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <circle
                                                cx="20"
                                                cy="20"
                                                r="19.5"
                                                stroke="#4F46E5"
                                                stroke-opacity="0.2"
                                            />
                                            <path
                                                d="M22.5 15L17.5 20L22.5 25"
                                                stroke="#4F46E5"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </div>
                                    <div class="testimonial-pagination"></div>
                                    <div
                                        class="testimonial-next ml-20 cursor-pointer"
                                    >
                                        <svg
                                            width="40"
                                            height="40"
                                            viewBox="0 0 40 40"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <circle
                                                cx="20"
                                                cy="20"
                                                r="19.5"
                                                stroke="#4F46E5"
                                            />
                                            <path
                                                d="M17.5 15L22.5 20L17.5 25"
                                                stroke="#4F46E5"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </Swiper>
                        </div>
                    </div>
                    <!-- /col -->
                    <div
                        class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 d-flex align-items-center"
                    >
                        <div
                            class="testimonial-img text-center pl-lg-5 pl-md-0"
                        >
                            <img
                                class="border-radius10 w-100"
                                src="/images/testimonial/testimonials-img.webp"
                                alt="Testimonial image"
                                style="max-width: 450px"
                            />
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /testimonial-bg -->
        </div>
        <!-- /container -->
    </div>
</template>

<script setup>
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Autoplay, Navigation, Pagination } from "swiper/modules";
import { Swiper, SwiperSlide } from "swiper/vue";
import { ref } from "vue";

const swiperInstance = ref(null);

const setSwiperInstance = (swiper) => {
    swiperInstance.value = swiper;
};
</script>

<style scoped>
/* Navigation Arrows */
.testimonial-navigation {
    position: relative;
    z-index: 10;
    margin-top: 40px;
}

.testimonial-prev,
.testimonial-next {
    transition: all 0.3s ease;
}

.testimonial-prev:hover circle,
.testimonial-next:hover circle {
    stroke-opacity: 0.5;
}

.testimonial-prev:hover path,
.testimonial-next:hover path {
    stroke-width: 2.5;
}

/* Pagination */
.testimonial-pagination {
    position: relative;
    display: flex;
    justify-content: center;
    width: auto;
    bottom: 0;
}

.testimonial-pagination :deep(.swiper-pagination-bullet) {
    width: 10px;
    height: 10px;
    background: rgba(79, 70, 229, 0.2);
    opacity: 1;
    margin: 0 5px;
    transition: all 0.3s ease;
}

.testimonial-pagination :deep(.swiper-pagination-bullet-active) {
    background: #4f46e5;
    width: 30px;
    border-radius: 5px;
}

/* Testimonial Content */
.testimonial-active {
    padding-left: 60px;
    padding-right: 60px;
}

.testi-avatar img {
    border-radius: 8px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    max-width: 100%;
    height: auto;
}

.testi-avatar:hover img {
    transform: translateY(-5px);
}

.testimonial-img img {
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    transition: transform 0.5s ease;
}

.testimonial-img:hover img {
    transform: scale(1.02);
}

/* Responsive Adjustments */
@media (max-width: 1199.98px) {
    .testimonial-active {
        padding-left: 30px;
        padding-right: 30px;
    }
}

@media (max-width: 991.98px) {
    .testimonial-img {
        margin-top: 50px;
        padding-left: 0;
    }

    .testimonial-active {
        padding-left: 15px;
        padding-right: 15px;
    }
}

@media (max-width: 767.98px) {
    .testimonial-bg {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .testimonial-navigation {
        margin-top: 30px;
    }
}
</style>
