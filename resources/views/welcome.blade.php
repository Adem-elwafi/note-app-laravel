<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes App - Organize Your Thoughts</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>📝</text></svg>">
</head>
<body class="font-sans antialiased bg-gray-900 text-gray-100">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-gray-900/80 backdrop-blur-sm border-b border-gray-800">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold">N</span>
                    </div>
                    <span class="text-xl font-bold text-white">NotesApp</span>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="/note" class="text-gray-300 hover:text-white transition-colors">My Notes</a>
                    <a href="/note/create" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                        New Note
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16">
        <!-- Background Image with Dark Overlay -->
        <div class="absolute inset-0 bg-parallax">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 container mx-auto px-4 text-center">
            <!-- Animated Hero Title -->
            <h1 class="hero-title mb-6 text-4xl md:text-6xl lg:text-7xl font-bold text-white">
                Organize Your <span class="text-blue-400">Thoughts</span>
            </h1>

            <!-- Animated Subtitle -->
            <p class="hero-subtitle mb-10 text-lg md:text-xl lg:text-2xl text-gray-200 max-w-3xl mx-auto leading-relaxed">
                A clean, intuitive notes application to capture your ideas, tasks, and inspiration. 
                Everything synced, always accessible.
            </p>

            <!-- Animated CTA Buttons -->
            <div class="hero-buttons flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/note" 
                   class="cta-button px-6 py-3 md:px-8 md:py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Browse Notes
                    </div>
                </a>
                <a href="/note/create" 
                   class="cta-button px-6 py-3 md:px-8 md:py-4 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 backdrop-blur-sm border border-white/20 hover:border-white/30">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Create New Note
                    </div>
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce opacity-0" id="scroll-indicator">
            <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 md:py-20 bg-gray-900">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center text-white mb-8 md:mb-12">Why Choose Notes App</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Feature 1 -->
                <div class="feature-card opacity-0 p-6 bg-gray-800/50 rounded-xl backdrop-blur-sm border border-gray-700 hover:border-blue-500/30 transition-all duration-300 hover:transform hover:-translate-y-1">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-white mb-3">Simple & Clean</h3>
                    <p class="text-gray-300 text-sm md:text-base">Focus on your thoughts with a distraction-free writing environment that keeps things simple and intuitive.</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card opacity-0 p-6 bg-gray-800/50 rounded-xl backdrop-blur-sm border border-gray-700 hover:border-blue-500/30 transition-all duration-300 hover:transform hover:-translate-y-1">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-white mb-3">Easy to Find</h3>
                    <p class="text-gray-300 text-sm md:text-base">Quickly find notes with instant search. Organize with tags and categories for easy retrieval anytime.</p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card opacity-0 p-6 bg-gray-800/50 rounded-xl backdrop-blur-sm border border-gray-700 hover:border-blue-500/30 transition-all duration-300 hover:transform hover:-translate-y-1">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-white mb-3">Secure & Private</h3>
                    <p class="text-gray-300 text-sm md:text-base">Your notes are yours alone. We ensure your data is secure and accessible only to you.</p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-card opacity-0 p-6 bg-gray-800/50 rounded-xl backdrop-blur-sm border border-gray-700 hover:border-blue-500/30 transition-all duration-300 hover:transform hover:-translate-y-1 md:col-span-2 lg:col-span-1">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold text-white mb-3">Always Synced</h3>
                    <p class="text-gray-300 text-sm md:text-base">Access your notes from any device. Changes sync automatically so you're always up to date.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 md:py-20 bg-gray-800/30">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-blue-400 mb-2" id="stat1">0</div>
                    <div class="text-gray-300">Notes Created</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-blue-400 mb-2" id="stat2">0</div>
                    <div class="text-gray-300">Active Users</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-blue-400 mb-2" id="stat3">0</div>
                    <div class="text-gray-300">Days Saved</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-blue-400 mb-2" id="stat4">99.9%</div>
                    <div class="text-gray-300">Uptime</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Getting Started Section -->
    <section class="py-16 md:py-20 bg-gradient-to-br from-gray-900 to-gray-800">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white mb-6">Ready to Get Started?</h2>
                <p class="text-lg md:text-xl text-gray-300 mb-8 md:mb-10">
                    Join thousands of users who have organized their thoughts with our simple, powerful notes app.
                </p>
                <a href="/note/create" 
                   class="inline-block px-8 py-4 md:px-10 md:py-5 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                    <div class="flex items-center justify-center gap-2">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Start Writing Now
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-gray-900 border-t border-gray-800">
        <div class="container mx-auto px-4 text-center">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="flex items-center space-x-2">
                        <div class="w-6 h-6 bg-blue-600 rounded flex items-center justify-center">
                            <span class="text-white font-bold text-sm">N</span>
                        </div>
                        <span class="text-lg font-bold text-white">NotesApp</span>
                    </div>
                    <p class="text-gray-400 text-sm mt-2">Organize your thoughts, one note at a time.</p>
                </div>
                <div class="text-gray-400 text-sm">
                    <p>&copy; {{ date('Y') }} NotesApp. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Inline Styles -->
    <style>
        .bg-parallax {
            background-image: url('https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            will-change: transform;
        }
        
        @media (max-width: 1024px) {
            .bg-parallax {
                background-attachment: scroll;
            }
        }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #1f2937;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #4b5563;
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #6b7280;
        }

        /* Ensure hero elements are visible after animation */
.hero-title,
.hero-subtitle,
.hero-buttons a,
.cta-button {
    opacity: 1 !important;
    visibility: visible !important;
}

/* Override any GSAP opacity changes */
.gsap-marker-end ~ .hero-buttons a {
    opacity: 1 !important;
}
    </style>

    <!-- JavaScript for GSAP Animations -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Load GSAP from CDN if not already loaded via Vite
        if (typeof gsap === 'undefined') {
            const script = document.createElement('script');
            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js';
            document.head.appendChild(script);
            
            const scrollTriggerScript = document.createElement('script');
            scrollTriggerScript.src = 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js';
            document.head.appendChild(scrollTriggerScript);
            
            script.onload = scrollTriggerScript.onload = initAnimations;
        } else {
            initAnimations();
        }
        
        function initAnimations() {
            // Ensure GSAP and ScrollTrigger are available
            if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
                console.log('GSAP or ScrollTrigger not loaded yet');
                setTimeout(initAnimations, 100);
                return;
            }
            
            // Register ScrollTrigger plugin
            gsap.registerPlugin(ScrollTrigger);
            
            // IMPORTANT: Remove any inline opacity styles that might conflict
            const heroElements = document.querySelectorAll('.hero-title, .hero-subtitle, .hero-buttons a');
            heroElements.forEach(el => {
                el.style.opacity = ''; // Clear any inline opacity
                el.style.visibility = ''; // Clear any inline visibility
            });
            
            // Hero section entrance animation - SIMPLER APPROACH
            const heroTimeline = gsap.timeline({
                onComplete: function() {
                    // Force visibility after animation completes
                    document.querySelectorAll('.hero-buttons a').forEach(btn => {
                        btn.style.opacity = '1';
                        btn.style.visibility = 'visible';
                    });
                }
            });
            
            // Animate from invisible to visible
            heroTimeline
                .fromTo('.hero-title', 
                    { opacity: 0, y: 50 },
                    { opacity: 1, y: 0, duration: 1.2, ease: "power3.out" }
                )
                .fromTo('.hero-subtitle',
                    { opacity: 0, y: 30 },
                    { opacity: 1, y: 0, duration: 1, ease: "power3.out" },
                    '-=0.8'
                )
                .fromTo('.hero-buttons a',
                    { opacity: 0, y: 20 },
                    { 
                        opacity: 1, 
                        y: 0, 
                        duration: 0.8, 
                        stagger: 0.2, 
                        ease: "power3.out",
                        onComplete: function() {
                            // Extra safety: ensure buttons are visible
                            this.targets().forEach(target => {
                                target.style.opacity = '1';
                            });
                        }
                    },
                    '-=0.6'
                )
                .to('#scroll-indicator', {
                    opacity: 1,
                    duration: 0.5,
                    delay: 0.5
                });
            
            // Parallax effect for background
            gsap.to('.bg-parallax', {
                yPercent: 20,
                ease: "none",
                scrollTrigger: {
                    trigger: '.bg-parallax',
                    start: "top top",
                    end: "bottom top",
                    scrub: 1
                }
            });
            
            // Feature cards animation on scroll - simplified
            gsap.utils.toArray('.feature-card').forEach((card, i) => {
                gsap.fromTo(card,
                    { opacity: 0, y: 30 },
                    {
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        ease: "power2.out",
                        scrollTrigger: {
                            trigger: card,
                            start: "top 85%",
                            toggleActions: "play none none none", // Only play once
                            once: true
                        }
                    }
                );
            });
            
            // Animated stats counter
            const stats = [12543, 2847, 365, 99.9];
            const statElements = ['#stat1', '#stat2', '#stat3', '#stat4'];
            
            statElements.forEach((selector, index) => {
                ScrollTrigger.create({
                    trigger: selector,
                    start: "top 80%",
                    onEnter: () => {
                        const target = stats[index];
                        const element = document.querySelector(selector);
                        
                        if (selector === '#stat4') {
                            element.textContent = target + '%';
                            return;
                        }
                        
                        gsap.to({}, {
                            duration: 2,
                            onUpdate: function() {
                                const progress = this.progress();
                                const value = Math.floor(progress * target);
                                element.textContent = value.toLocaleString();
                            },
                            ease: "power2.out"
                        });
                    },
                    once: true
                });
            });
            
            // Initialize ScrollTrigger
            ScrollTrigger.refresh();
            
            // DEBUG: Add a button to check opacity
            console.log('Animation initialized');
        }
        
        // Fallback: If animation fails, ensure buttons are visible after 3 seconds
        setTimeout(function() {
            const buttons = document.querySelectorAll('.hero-buttons a');
            buttons.forEach(btn => {
                btn.style.opacity = '1';
                btn.style.visibility = 'visible';
            });
        }, 3000);
    });
</script>
</body>
</html>