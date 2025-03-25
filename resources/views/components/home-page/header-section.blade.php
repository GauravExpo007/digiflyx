<!-- Header Section -->
<header class="sticky top-0 z-50 bg-gradient-to-r from-[#6a39d3] to-[#C86ED8] shadow-md">
    <!-- Navbar -->
    <div class="container mx-auto px-6 py-4 flex justify-between items-center h-[80px]">
        <!-- Logo -->
        <a href="/">
            <img src="{{ asset('assets/logo/digitalfyx.gif') }}" alt="logo" class="logo_image w-[150px] lg:w-[200px]">
        </a>

        <!-- Mobile Menu Button -->
        <button id="hamburger" class="md:hidden text-2xl text-white focus:outline-none">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex md:space-x-3 lg:space-x-6 text-lg text-white mr-10 md:mr-2">
            <a href="/" class="hover:text-gray-200"><span class="text-[#37FFF9] animate-pulse">Home</span></a>
            <!-- Services Dropdown -->
            <div class="relative group">

                <button class="flex items-center hover:text-gray-200">
                    Services <i class="fa fa-sort-down ml-1 mb-1"></i>
                </button>

                <!-- Main Dropdown Menu -->
                <ul id="mainMenu"
                    class="absolute left-0 w-56 bg-white text-gray-800 shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300 ease-in-out">

                    <!-- Digital Marketing -->
                    <li class="relative group">
                        <a href="{{ route('digital-marketing') }}"
                            class="flex justify-between items-center px-4 py-2 hover:bg-[#dfc0f1]">
                            Digital Marketing <i class="fa fa-sort-down ml-2"></i>
                        </a>
                        <ul id="digitalMarketing" class="submenu">
                            <li><a href="{{ route('seo') }}" class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">SEO</a>
                            </li>
                            <li><a href="{{ route('ppc') }}" class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">PPC</a>
                            </li>
                            <li>
                                <a href="{{ route('content-creation') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">Content
                                    Creation
                                </a>
                            </li>
                            <li><a href="{{ route('email-marketing') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">Email Marketing</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Web Design -->
                    <li class="relative group">
                        <a href="{{ route('web-design') }}"
                            class="flex justify-between items-center px-4 py-2 hover:bg-[#dfc0f1]">
                            Web Design <i class="fa fa-sort-down ml-2"></i>
                        </a>
                        <ul id="webDesign" class="submenu">
                            <li><a href="{{ route('custom-website-design') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">Custom Website
                                    Design</a>
                            </li>
                            <li><a href="{{ route('wordpress-website-design') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">WordPress
                                    Design</a>
                            </li>
                            <li><a href="{{ route('website-maintenance') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">Website
                                    Maintenance</a></li>
                            <li><a href="{{ route('website-hosting') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">Website Hosting
                                    Services</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Social Media -->
                    <li class="relative group">
                        <a href="{{ route('social-media') }}"
                            class="flex justify-between items-center px-4 py-2 hover:bg-[#dfc0f1]">
                            Social Media <i class="fa fa-sort-down ml-2"></i>
                        </a>
                        <ul id="socialMedia" class="submenu">
                            <li><a href="{{ route('social-media-management') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">Social Media
                                    Management</a>
                            </li>
                            <li><a href="{{ route('social-media-advertising') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">Social Media
                                    Advertising</a>
                            </li>
                            <li><a href="{{ route('brand-management') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">Brand
                                    Management</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Other Services -->
                    <li class="relative group">
                        <a href="#" class="flex justify-between items-center px-4 py-2 hover:bg-[#dfc0f1]">
                            Other Services <i class="fa fa-sort-down ml-2"></i>
                        </a>
                        <ul id="otherServices" class="submenu">
                            <li><a href="{{ route('e-commerce') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">E-commerce</a></li>
                            <li>
                                <a href="{{ route('analytics-service') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">Google
                                    Analytics
                                </a>
                            </li>
                            <li><a href="{{ route('app-development') }}"
                                    class="block px-4 py-2 hover:bg-[#dfc0f1] text-sm">Mobile App
                                    Development
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <a href="{{ route('about-us') }}" class="hover:text-gray-200">About Us</a>
            <a href="{{ route('work') }}" class="hover:text-gray-200">Work</a>
            <a href="{{ route('blogs') }}" class="hover:text-gray-200">Blog</a>
            <a href="{{ route('contact-us') }}"
                class="bg-gradient-to-r from-[#4b1fa9] via-[#a72e15] to-[#4b1fa9] bg-[length:200%_auto] hover:bg-[position:right_center] text-white text-center transition-all duration-700 ease-in-out rounded-4xl px-3 text-base md:text-lg shadow-lg hover:shadow-2xl w-fit border-2 border-white font-semibold">Get
                In Touch
            </a>
        </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-black text-white p-6 h-screen overflow-y-auto">
        <ul class="flex flex-col gap-4">
            <li><a href="/" class="hover:underline">Home</a></li>
            <li><a href="{{ route('about-us') }}" class="hover:underline">About Us</a></li>

            <!-- Mobile Services Dropdown -->
            <li>
                <button class="w-full flex justify-between items-center hover:underline" id="services-toggle">
                    Services <i class="fa fa-sort-down"></i>
                </button>
                <ul class="hidden mt-2 ml-4" id="services-dropdown">

                    <!-- Digital Marketing -->
                    <li>
                        <button
                            class="w-full flex justify-between items-center px-4 py-2 hover:bg-gray-700 submenu-toggle">
                            Digital Marketing <i class="fa fa-plus"></i>
                        </button>
                        <ul class="hidden ml-4 pl-2 border-l border-gray-600 submenu">
                            <li><a href="{{ route('seo') }}" class="block px-4 py-2 hover:bg-gray-700 text-sm">SEO</a>
                            </li>
                            <li><a href="{{ route('ppc') }}" class="block px-4 py-2 hover:bg-gray-700 text-sm">PPC</a>
                            </li>
                            <li><a href="{{ route('content-creation') }}"
                                    class="block px-4 py-2 hover:bg-gray-700 text-sm">Content Creation</a>
                            </li>
                            <li><a href="{{ route('email-marketing') }}"
                                    class="block px-4 py-2 hover:bg-gray-700 text-sm">Email
                                    Marketing</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Web Design -->
                    <li>
                        <button
                            class="w-full flex justify-between items-center px-4 py-2 hover:bg-gray-700 submenu-toggle">
                            Web Design <i class="fa fa-plus"></i>
                        </button>
                        <ul class="hidden ml-4 pl-2 border-l border-gray-600 submenu">
                            <li><a href="{{ route('custom-website-design') }}"
                                    class="block px-4 py-2 hover:bg-gray-700 text-sm">Custom Website
                                    Design</a></li>
                            <li><a href="{{ route('wordpress-website-design') }}"
                                    class="block px-4 py-2 hover:bg-gray-700 text-sm">WordPress
                                    Design</a></li>
                            <li><a href="{{ route('website-maintenance') }}"
                                    class="block px-4 py-2 hover:bg-gray-700 text-sm">Website
                                    Maintenance</a></li>
                            <li><a href="{{ route('website-hosting') }}"
                                    class="block px-4 py-2 hover:bg-gray-700 text-sm">Website Hosting
                                    Services</a></li>
                        </ul>
                    </li>

                    <!-- Social Media -->
                    <li>
                        <button
                            class="w-full flex justify-between items-center px-4 py-2 hover:bg-gray-700 submenu-toggle">
                            Social Media <i class="fa fa-plus"></i>
                        </button>
                        <ul class="hidden ml-4 pl-2 border-l border-gray-600 submenu">
                            <li><a href="{{ route('social-media-management') }}"
                                    class="block px-4 py-2 hover:bg-gray-700 text-sm">Social Media
                                    Management</a></li>
                            <li><a href="{{ route('social-media-advertising') }}"
                                    class="block px-4 py-2 hover:bg-gray-700 text-sm">Social Media
                                    Advertising</a></li>
                            <li><a href="{{ route('brand-management') }}"
                                    class="block px-4 py-2 hover:bg-gray-700 text-sm">Brand
                                    Management</a></li>
                        </ul>
                    </li>

                    <!-- Other Services -->
                    <li>
                        <button
                            class="w-full flex justify-between items-center px-4 py-2 hover:bg-gray-700 submenu-toggle">
                            Other Services <i class="fa fa-plus"></i>
                        </button>
                        <ul class="hidden z-50 ml-4 pl-2 border-l border-gray-600 submenu">
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-700 text-sm">E-commerce</a>
                            </li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-700 text-sm">Google
                                    Analytics</a></li>
                            <li><a href="#" class="block px-4 py-2 hover:bg-gray-700 text-sm">Mobile App
                                    Development</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li><a href="{{ route('work') }}" class="hover:underline">Work</a></li>
            <li><a href="{{ route('blogs') }}" class="hover:underline">Blog</a></li>
            <li><a href="{{ route('contact-us') }}" class="hover:underline">Get In Touch</a></li>
        </ul>
    </div>

</header>

<style>
    @media(max-width: 768px) {
        .submenu {
            /* position: absolute; */
            left: 100%;
            top: 0;
            width: 200px;
            background-color: inherit;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            /* opacity: 0; */
            /* visibility: hidden; */
            transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        }
    }

    @media(min-width: 769px) {
        .submenu {
            position: absolute;
            left: 100%;
            top: 0;
            width: 200px;
            background-color: white;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        }
    }

    .group:hover>.submenu {
        opacity: 1;
        visibility: visible;
    }
</style>

<!-- Mobile Menu Script -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Toggle Mobile Menu
        const hamburger = document.getElementById("hamburger");
        const mobileMenu = document.getElementById("mobile-menu");

        if (hamburger && mobileMenu) {
            hamburger.addEventListener("click", function() {
                mobileMenu.classList.toggle("hidden");
            });
        }

        // Toggle Main Services Dropdown in Mobile Menu
        const servicesToggle = document.getElementById("services-toggle");
        const servicesDropdown = document.getElementById("services-dropdown");

        if (servicesToggle && servicesDropdown) {
            servicesToggle.addEventListener("click", function() {
                servicesDropdown.classList.toggle("hidden");
            });
        }

        // Toggle Submenus in Mobile Menu
        const submenuToggles = document.querySelectorAll(".submenu-toggle");

        submenuToggles.forEach((toggle) => {
            toggle.addEventListener("click", function() {
                const submenu = this.nextElementSibling;
                const icon = this.querySelector("i");

                // Close all other submenus before opening the clicked one
                document.querySelectorAll(".submenu").forEach((menu) => {
                    if (menu !== submenu) {
                        menu.classList.add("hidden");
                    }
                });

                // Toggle submenu visibility
                submenu.classList.toggle("hidden");

                // Toggle plus/minus icon
                if (icon) {
                    icon.classList.toggle("fa-plus");
                    icon.classList.toggle("fa-minus");
                }
            });
        });
    });
</script>
