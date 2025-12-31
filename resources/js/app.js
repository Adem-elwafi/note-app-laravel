import './bootstrap';
import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

// Make GSAP and ScrollTrigger available globally for Blade templates
window.gsap = gsap;
window.ScrollTrigger = ScrollTrigger;

// Initialize GSAP animations when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // This is handled in the Blade template via inline script
    // But we can add any additional global animations here
});