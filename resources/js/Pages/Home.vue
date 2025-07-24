<script setup>
import AboutArea from "@/Components/AboutArea.vue";
import BlogArea from "@/Components/BlogArea.vue";
import BrandArea from "@/Components/BrandArea.vue";
import ContactArea from "@/Components/ContactArea.vue";
import EducationArea from "@/Components/EducationArea.vue";
import ExperienceArea from "@/Components/ExperienceArea.vue";
import FunFactArea from "@/Components/FunFactArea.vue";
import HeroArea from "@/Components/HeroArea.vue";
import IntroFeatureArea from "@/Components/IntroFeatureArea.vue";
import PortfolioArea from "@/Components/PortfolioArea.vue";
import PricingArea from "@/Components/PricingArea.vue";
import ServiceArea from "@/Components/ServiceArea.vue";
import SkillArea from "@/Components/SkillArea.vue";
import TestimonialArea from "@/Components/TestimonialArea.vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <Head
            title="Didarul Alam Rahat - Full-Stack & Flutter Developer | Web3 & Blockchain Specialist"
        />

        <AppLayout>
            <HeroArea />
            <IntroFeatureArea />
            <AboutArea />
            <PortfolioArea />
            <FunFactArea />
            <ExperienceArea />
            <EducationArea />
            <SkillArea />
            <ServiceArea />
            <PricingArea />
            <TestimonialArea />
            <BrandArea />
            <BlogArea />
            <ContactArea />
        </AppLayout>
    </div>
</template>
