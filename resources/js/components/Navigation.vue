<script>
import { route } from 'ziggy-js'
</script>

<template>
    <header class="bg-HeaderBG text-white sticky top-0 z-10">
        <nav class="text-[18px] grid grid-cols-[auto_2fr_auto] items-center">
            <a class="inline-block" :href="route('home')">
                    <img alt="Logo" src="/resources/src/assets/img/Logo.png" class="w-35 m-3"/>
            </a>
            <ul class="flex flex-nowrap justify-center gap-[75px] leading-[1.5] relative p-10">
                <li>
                    <strong>
                        <a class="relative inline-block after:content-[''] after:absolute after:w-full after:scale-x-0 after:h-[2px] after:bg-white after:bottom-[-3px] after:left-0 after:origin-right after:transition-transform after:duration-300 hover:after:scale-x-100 hover:after:origin-left hover:text-white text-shadow-lg hover:opacity-80 transition"
                        :href="route('home')">Home</a>
                    </strong>
                </li>

                <li>
                    <strong>
                        <a class="relative inline-block after:content-[''] after:absolute after:w-full after:scale-x-0 after:h-[2px] after:bg-white after:bottom-[-3px] after:left-0 after:origin-right after:transition-transform after:duration-300 hover:after:scale-x-100 hover:after:origin-left hover:text-white text-shadow-lg hover:opacity-80 transition"
                        :href="route('about')">About</a>
                    </strong>
                </li>

                <li>
                    <strong>
                        <a class="relative inline-block after:content-[''] after:absolute after:w-full after:scale-x-0 after:h-[2px] after:bg-white after:bottom-[-3px] after:left-0 after:origin-right after:transition-transform after:duration-300 hover:after:scale-x-100 hover:after:origin-left hover:text-white text-shadow-lg hover:opacity-80 transition"
                        :href="route('contact')">Contact</a>
                    </strong>
                </li>

                </ul>

                <ul class="flex flex-nowrap justify-start gap-[50px] leading-[1.5] p-10">
                    <li>
                        <strong>
                        <a :href="route('blog')" class="relative inline-block after:content-[''] after:absolute after:w-full after:scale-x-0 after:h-[2px] after:bg-white after:bottom-[-3px] after:left-0 after:origin-right after:transition-transform after:duration-300 hover:after:scale-x-100 hover:after:origin-left hover:text-white text-shadow-lg hover:opacity-80 transition">
                            Blog</a>
                        </strong>
                    </li>

                    <li>
                        <strong>
                        <a :href="route('resume')" class="relative inline-block after:content-[''] after:absolute after:w-full after:scale-x-0 after:h-[2px] after:bg-white after:bottom-[-3px] after:left-0 after:origin-right after:transition-transform after:duration-300 hover:after:scale-x-100 hover:after:origin-left hover:text-white text-shadow-lg hover:opacity-80 transition">
                            Resume</a>
                        </strong>
                    </li>
                </ul>
        </nav>
    </header>
</template>



<!-- Custom CSS  -->
<style scoped>  


</style>
