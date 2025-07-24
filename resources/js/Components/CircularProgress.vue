<template>
    <div class="circular-progress-container">
        <svg :width="size" :height="size" :viewBox="`0 0 ${size} ${size}`">
            <circle
                :cx="halfSize"
                :cy="halfSize"
                :r="radius"
                :stroke-width="strokeWidth"
                :stroke="bgColor"
                fill="none"
            />
            <circle
                :cx="halfSize"
                :cy="halfSize"
                :r="radius"
                :stroke-width="strokeWidth"
                :stroke="fgColor"
                fill="none"
                :stroke-dasharray="circumference"
                :stroke-dashoffset="strokeDashoffset"
                stroke-linecap="round"
                transform="rotate(-90 ${halfSize} ${halfSize})"
            />
        </svg>
        <div class="progress-text" :style="{ fontSize: textSize }">{{ animatedPercentage }}%</div>
    </div>
</template>

<script>
export default {
    props: {
        percentage: {
            type: Number,
            required: true,
            default: 0
        },
        size: {
            type: Number,
            default: 190
        },
        strokeWidth: {
            type: Number,
            default: 10
        },
        bgColor: {
            type: String,
            default: '#f1f2f6'
        },
        fgColor: {
            type: String,
            default: '#9b9db1'
        }
    },
    data() {
        return {
            animatedPercentage: 0
        };
    },
    computed: {
        halfSize() {
            return this.size / 2;
        },
        radius() {
            return this.halfSize - this.strokeWidth / 2;
        },
        circumference() {
            return 2 * Math.PI * this.radius;
        },
        strokeDashoffset() {
            return this.circumference - (this.animatedPercentage / 100) * this.circumference;
        },
        textSize() {
            return `${this.size / 4}px`;
        }
    },
    watch: {
        percentage: {
            immediate: true,
            handler(newValue) {
                this.animateProgress(newValue);
            }
        }
    },
    methods: {
        animateProgress(targetPercentage) {
            let start = this.animatedPercentage;
            let duration = 1000; // milliseconds
            let startTime = null;

            const animate = (currentTime) => {
                if (!startTime) startTime = currentTime;
                const progress = (currentTime - startTime) / duration;
                const easedProgress = this.easeOutQuad(progress);

                if (progress < 1) {
                    this.animatedPercentage = start + (targetPercentage - start) * easedProgress;
                    requestAnimationFrame(animate);
                } else {
                    this.animatedPercentage = targetPercentage;
                }
            };

            requestAnimationFrame(animate);
        },
        easeOutQuad(t) {
            return t * (2 - t);
        }
    }
};
</script>

<style scoped>
.circular-progress-container {
    position: relative;
    display: inline-block;
}

.progress-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-weight: bold;
    color: #333;
}
</style>
