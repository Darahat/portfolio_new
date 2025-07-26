<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import AOS from "aos";
import "aos/dist/aos.css";
import { defineAsyncComponent, onMounted, ref } from "vue";

// Define async components for lazy loading
const HeroArea = defineAsyncComponent(() =>
    import("@/Components/HeroArea.vue")
);
const IntroFeatureArea = defineAsyncComponent(() =>
    import("@/Components/IntroFeatureArea.vue")
);
const AboutArea = defineAsyncComponent(() =>
    import("@/Components/AboutArea.vue")
);
const PortfolioArea = defineAsyncComponent(() =>
    import("@/Components/PortfolioArea.vue")
);
const FunFactArea = defineAsyncComponent(() =>
    import("@/Components/FunFactArea.vue")
);
const ExperienceArea = defineAsyncComponent(() =>
    import("@/Components/ExperienceArea.vue")
);
const EducationArea = defineAsyncComponent(() =>
    import("@/Components/EducationArea.vue")
);
const SkillArea = defineAsyncComponent(() =>
    import("@/Components/SkillArea.vue")
);
const ServiceArea = defineAsyncComponent(() =>
    import("@/Components/ServiceArea.vue")
);
const PricingArea = defineAsyncComponent(() =>
    import("@/Components/PricingArea.vue")
);
const TestimonialArea = defineAsyncComponent(() =>
    import("@/Components/TestimonialArea.vue")
);
const BrandArea = defineAsyncComponent(() =>
    import("@/Components/BrandArea.vue")
);
const BlogArea = defineAsyncComponent(() =>
    import("@/Components/BlogArea.vue")
);
const ContactArea = defineAsyncComponent(() =>
    import("@/Components/ContactArea.vue")
);

// Reactive refs to control component visibility
const heroAreaVisible = ref(false);
const introFeatureAreaVisible = ref(false);
const aboutAreaVisible = ref(false);
const portfolioAreaVisible = ref(false);
const funFactAreaVisible = ref(false);
const experienceAreaVisible = ref(false);
const educationAreaVisible = ref(false);
const skillAreaVisible = ref(false);
const serviceAreaVisible = ref(false);
const pricingAreaVisible = ref(false);
const testimonialAreaVisible = ref(false);
const brandAreaVisible = ref(false);
const blogAreaVisible = ref(false);
const contactAreaVisible = ref(false);

// Refs for component containers to observe
const heroAreaRef = ref(null);
const introFeatureAreaRef = ref(null);
const aboutAreaRef = ref(null);
const portfolioAreaRef = ref(null);
const funFactAreaRef = ref(null);
const experienceAreaRef = ref(null);
const educationAreaRef = ref(null);
const skillAreaRef = ref(null);
const serviceAreaRef = ref(null);
const pricingAreaRef = ref(null);
const testimonialAreaRef = ref(null);
const brandAreaRef = ref(null);
const blogAreaRef = ref(null);
const contactAreaRef = ref(null);

onMounted(() => {
    const observerOptions = {
        root: null, // Use the viewport as the root
        rootMargin: "0px",
        threshold: 0.1, // Trigger when 10% of the component is visible
    };

    // Helper function to create and observe elements
    const createObserver = (targetRef, visibilityRef) => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    visibilityRef.value = true;
                    observer.unobserve(entry.target); // Stop observing once visible
                }
            });
        }, observerOptions);

        if (targetRef.value) {
            observer.observe(targetRef.value);
        }
    };

    // Create observers for each component
    createObserver(heroAreaRef, heroAreaVisible);
    createObserver(introFeatureAreaRef, introFeatureAreaVisible);
    createObserver(aboutAreaRef, aboutAreaVisible);
    createObserver(portfolioAreaRef, portfolioAreaVisible);
    createObserver(funFactAreaRef, funFactAreaVisible);
    createObserver(experienceAreaRef, experienceAreaVisible);
    createObserver(educationAreaRef, educationAreaVisible);
    createObserver(skillAreaRef, skillAreaVisible);
    createObserver(serviceAreaRef, serviceAreaVisible);
    createObserver(pricingAreaRef, pricingAreaVisible);
    createObserver(testimonialAreaRef, testimonialAreaVisible);
    createObserver(brandAreaRef, brandAreaVisible);
    createObserver(blogAreaRef, blogAreaVisible);
    createObserver(contactAreaRef, contactAreaVisible);
});

onMounted(() => {
    AOS.init();
    if (typeof TyperSetup === "function") {
        TyperSetup();
    }
});
</script>

<template>
    <div>
        <Head
            title="Didarul Alam Rahat - Full-Stack & Flutter Developer | Web3 & Blockchain Specialist"
        />

        <AppLayout>
            <div ref="heroAreaRef">
                <HeroArea v-if="heroAreaVisible" />
            </div>
            <div ref="introFeatureAreaRef">
                <IntroFeatureArea v-if="introFeatureAreaVisible" />
            </div>
            <div ref="aboutAreaRef">
                <AboutArea v-if="aboutAreaVisible" />
            </div>
            <div ref="portfolioAreaRef">
                <PortfolioArea v-if="portfolioAreaVisible" />
            </div>
            <div ref="funFactAreaRef">
                <FunFactArea v-if="funFactAreaVisible" />
            </div>
            <div ref="experienceAreaRef">
                <ExperienceArea v-if="experienceAreaVisible" />
            </div>
            <div ref="educationAreaRef">
                <EducationArea v-if="educationAreaVisible" />
            </div>
            <div ref="skillAreaRef">
                <SkillArea v-if="skillAreaVisible" />
            </div>
            <div ref="serviceAreaRef">
                <ServiceArea v-if="serviceAreaVisible" />
            </div>
            <div ref="pricingAreaRef">
                <PricingArea v-if="pricingAreaVisible" />
            </div>
            <div ref="testimonialAreaRef">
                <TestimonialArea v-if="testimonialAreaVisible" />
            </div>
            <div ref="brandAreaRef">
                <BrandArea v-if="brandAreaVisible" />
            </div>
            <div ref="blogAreaRef">
                <BlogArea v-if="blogAreaVisible" />
            </div>
            <div ref="contactAreaRef">
                <ContactArea v-if="contactAreaVisible" />
            </div>
        </AppLayout>
    </div>
</template>
