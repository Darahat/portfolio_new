<template>
    <div id="work" class="portfolio-area over-hidden pb-165" data-aos="fade-up">

        <div class="marquee-w mb-125">
            <div class="marquee">
                <span class="pl-4">Full Stack Web Developer*</span>
                <span class="pl-4">Flutter App Developer</span>
            </div>
            <div class="marquee marquee2 pb-1">
                <span>I’m Open for new projects * Let’s Work Together.</span>
                <span>I’m Open for new projects * Let’s Work Together.</span>
            </div>
        </div><!-- /marquee -->

        <div class="portfolio-wrapper position-relative mt--5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12  col-md-12  col-sm-12 col-12">
                        <div class="title text-center">
                            <span class="meta-text-color text-uppercase d-block mb-6">Portfolio</span>
                            <h2>My Recent Works</h2>
                        </div><!-- /title -->
                    </div><!-- /col -->
                </div><!-- /row -->

                <div class="row portfolio mt-80">
                    <div class="col-12">
                        <div class="row single-portfolio position-relative theme-border-top align-items-center">
                            <div class="col-xl-2 col-lg-2 col-md-7  col-sm- col-">
                                <div class="port-category">
                                    <span class="meta-text-color text-uppercase">Smart Contract</span>
                                </div>
                            </div><!-- /col -->
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm- col-pl-lg-0">
                                <h3>Stake Hive DeFi DApp</h3>
                            </div><!-- /col -->
                            <div
                                class="col-xl-5  col-lg-5 col-md-6  col-sm- col- d-flex justify-content-end align-items-center">
                                <img class="port-img position-absolute left-0 ml-xl-3 transition5"
                                    src="/images/portfolio/port-img5.webp" alt="Solidity smart contract,
                                            Ethereum blockchain,NuxtJs,Solidity,DeFi DApp,Web3.js,Smart contract development,">
                                <div class="port-content text-center transition5 z-index11" @click="openModal('stakehive')">
                                    <span class="d-inline-block"><i class="far fa-plus"></i>
                                    </span>
                                </div><!-- /port-content -->
                            </div><!-- /col -->
                        </div><!-- /single-prot -->
                    </div><!-- /col -->
                    <div class="col-12">
                        <div class="row single-portfolio position-relative theme-border-top align-items-center">
                            <div class="col-xl-2 col-lg-2 col-md-7  col-sm- col-">
                                <div class="port-category">
                                    <span class="meta-text-color text-uppercase">Front End Development</span>
                                </div>
                            </div><!-- /col -->
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm- col-pl-lg-0">
                                <h3>Front End Development for RUBI</h3>
                            </div><!-- /col -->
                            <div
                                class="col-xl-5  col-lg-5 col-md-6  col-sm- col- d-flex justify-content-end align-items-center">
                                <img class="port-img position-absolute left-0 ml-xl-3 transition5"
                                    src="/images/portfolio/port-img1.webp" alt="Web Development,
                                            Front end Developer,
                                            Vue.js,
                                            Vuetify,
                                            Vite,
                                            Web page layout,
                                            Responsive design,
                                            Web page optimization,
                                            Mobile-friendly layout,
                                            User-friendly web design, Vue.js developer, backend-developer, Laravel 10,
                                            php, laravel developer,">
                                <div class="port-content text-center transition5 z-index11" @click="openModal('exampleModal-p1')">
                                    <span class="d-inline-block"><i class="far fa-plus"></i>
                                    </span>
                                </div><!-- /port-content -->
                            </div><!-- /col -->
                        </div><!-- /single-prot -->
                    </div><!-- /col -->

                    <div class="col-12">
                        <div class="row single-portfolio position-relative theme-border-top align-items-center">
                            <div class="col-xl-2 col-lg-2 col-md-7 col-sm- col-">
                                <div class="port-category">
                                    <span class="meta-text-color text-uppercase">Front End Development</span>
                                </div>
                            </div><!-- /col -->
                            <div class="col-xl-5 col-lg-5 col-md-6  col-sm- col-pl-lg-0">
                                <h3>Website Development for The Network Tap Company</h3>
                            </div><!-- /col -->
                            <div
                                class="col-xl-5  col-lg-5 col-md-6  col-sm- col- d-flex justify-content-end align-items-center">
                                <img class="port-img position-absolute left-0 ml-xl-3 transition5"
                                    src="/images/portfolio/port-img2.webp" alt="
                                            User-friendly web design,
                                            front-end development,
                                            HTML,
                                            CSS,
                                            Tailwind CSS,
                                            user interface design,
                                            digital experience, front-end developer, backend-developer, Laravel 10,
                                            php, laravel developer">
                                <div class="port-content text-center transition5 z-index11" @click="openModal('exampleModal-p2')">
                                    <span class="d-inline-block"><i class="far fa-plus"></i>
                                    </span>
                                </div><!-- /port-content -->
                            </div><!-- /col -->
                        </div><!-- /single-prot -->
                    </div><!-- /col -->

                    <div class="col-12">
                        <div class="row single-portfolio position-relative theme-border-top align-items-center">
                            <div class="col-xl-2 col-lg-2 col-md-7 col-sm- col-">
                                <div class="port-category">
                                    <span class="meta-text-color text-uppercase">Web Development</span>
                                </div>
                            </div><!-- /col -->
                            <div class="col-xl-5 col-lg-5 col-md-6 col-sm- col-ml-lg-0">
                                <h3>Front & Back End Development for ELP</h3>
                            </div><!-- /col -->
                            <div
                                class="col-xl-5  col-lg-5 col-md-6  col-sm- col- d-flex justify-content-end align-items-center">
                                <img class="port-img position-absolute left-0 ml-xl-3 transition5"
                                    src="/images/portfolio/port-img3.webp" alt="E-learning platform,
                                            Laravel development,
                                            MySQL database,
                                            HTML CSS Tailwind CSS,
                                            Online education system,
                                            Course management,
                                            Interactive learning materials,
                                            Student assessment,
                                            Discussion forums,
                                            Progress tracking,
                                            Laravel 10,
                                            php developer, laravel developer">
                                <div class="port-content text-center transition5 z-index11" @click="openModal('exampleModal-p3')">
                                    <span class="d-inline-block"><i class="far fa-plus"></i>
                                    </span>
                                </div><!-- /port-content -->
                            </div><!-- /col -->
                        </div><!-- /single-prot -->
                    </div><!-- /col -->

                    <div class="col-12">
                        <div
                            class="row single-portfolio position-relative theme-border-top theme-border-bottom align-items-center">
                            <div class="col-xl-2 col-lg-2 col-md-7 col-sm- col-">
                                <div class="port-category">
                                    <span class="meta-text-color text-uppercase">Flutter Mobile App</span>
                                </div>
                            </div><!-- /col -->
                            <div class="col-xl-5 col-lg-5 col-md-6  col-sm- col-pl-lg-0">
                                <h3>Flutter Mobile App for Bangladesh Agricultural University(BAU)</h3>
                            </div><!-- /col -->
                            <div
                                class="col-xl-5  col-lg-5 col-md-6 col-sm- col- d-flex justify-content-end align-items-center">
                                <img class="port-img position-absolute left-0 ml-xl-3 transition5"
                                    src="/images/portfolio/port-img4.webp" alt="Flutter mobile app
                                            Agricultural education app
                                            Cross-platform development
                                            Mobile application for agriculture
                                            Educational technology
                                            Agriculture research app
                                            Agriculture outreach
                                            Mobile learning platform
                                            Agricultural resources app, Flutter app developer">
                                <div class="port-content text-center transition5 z-index11" @click="openModal('exampleModal-p4')">
                                    <span class="d-inline-block"><i class="far fa-plus"></i>
                                    </span>
                                </div><!-- /port-content -->
                            </div><!-- /col -->
                        </div><!-- /single-prot -->
                    </div><!-- /col -->

                </div><!-- /row -->

                <!-- latest modal 1 start -->
                <!-- latest modal 1 start -->
                <!-- Modal1 start -->
                <div class="modal fade" :class="{ 'show d-block': activeModal === 'stakehive' }" id="stakehive" tabindex="-1" role="dialog"
                    aria-labelledby="stakehive" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="close-icon float-right pt-10 pr-10">
                                <button type="button" class="close d-inline-block" @click="closeModal"
                                    aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                </button>
                            </div>
                            <div class="modal-content border-0">
                                <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                    <div class="blog-modal-img">
                                        <img class="w-100" src="/images/portfolio/port-img5-large.webp" alt="Decentralized finance,
                                            DeFi,
                                            Web3,
                                            Smart Contracts,
                                            Solidity,
                                            Yield Farming,
                                            Staking,
                                            Tokenomics,
                                            Blockchain Development,
                                            Frontend DApp with Nuxt.js">
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                            <div class="content-wrapper">
                                                <h2 class="modal-title">DeFi App - StakeHive</h2>
                                                <p>
                                                    StakeHive is a feature-rich Decentralized Finance (DeFi) application enabling users to stake tokens and earn rewards in a secure, transparent, and decentralized environment.
                                                    I led the full-stack development of the app, building robust smart contracts in Solidity, and a seamless frontend using Nuxt 3 (Vue.js) integrated with Web3.js.
                                                    The platform focuses on ease of use, real-time staking stats, and an intuitive UI for managing assets. The project showcased my proficiency in blockchain integration, smart contract testing, and performance-optimized web development.
                                                </p>
                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                            <div class="meta-wrapper form-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                <ul class="item-meta">
                                                    <li>Project Type : <span class="pl-2 openS-font-family">DeFi App Development</span></li>
                                                    <li>Client : <span class="pl-2 openS-font-family">Private Blockchain Startup</span></li>
                                                    <li>Duration :<span class="pl-2 openS-font-family">4 Weeks</span></li>
                                                    <li>Task : <span class="pl-2 openS-font-family">Smart contracts, staking logic, frontend integration using Nuxt.js & Web3.js</span></li>
                                                    <li>Budget : <span class="pl-2 openS-font-family">Confidential</span></li>
                                                </ul>
                                                <a href="https://stakehive-defi-dapp.netlify.app"
                                                    class="btn position-relative over-hidden text-uppercase mt-20 pt-2 pb-2">View
                                                    Live</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="pro-modal-footer mt-30 mb-45">
                                        <div class="row align-items-center justify-content-md-between">
                                            <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                    <h6 class="mb-0 pr-15">Tags :</h6>
                                                    <ul class="tag-list">
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Decentralized Finance</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Staking DApp</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Web3.js</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Solidity</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Nuxt.js</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Smart Contracts</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Tokenomics</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Yield Farming</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /col -->
                                            <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                <div
                                                    class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                    <h6 class="pr-12 mb-0">Share this product :</h6>
                                                    <ul class="social-link text-md-right">
                                                        <li class="d-inline-block">
                                                            <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                href="https://twitter.com/darahat42"><i
                                                                    class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="d-inline-block">
                                                            <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                href="https://www.linkedin.com/in/didarulalamrahat/"><i
                                                                    class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                    </ul><!-- social-link -->
                                                </div>
                                            </div><!-- /col -->
                                        </div> <!-- .row -->
                                    </div>
                                </div><!-- /modal-body -->
                            </div> <!-- /modal-content -->
                        </div>
                    </div>
                </div>

                <!-- latest Modal 1 end -->



                <!-- Modal1 start -->
                <div class="modal fade" :class="{ 'show d-block': activeModal === 'exampleModal-p1' }" id="exampleModal-p1" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModal-p1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="close-icon float-right pt-10 pr-10">
                                <button type="button" class="close d-inline-block" @click="closeModal"
                                    aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                </button>
                            </div>
                            <div class="modal-content border-0">
                                <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                    <div class="blog-modal-img">
                                        <img class="w-100" src="/images/portfolio/port-img1-large.webp" alt="Web Development,
                                                    Front end Developer,
                                                    Vue.js,
                                                    Vuetify,
                                                    Vite,
                                                    Web page layout,
                                                    Responsive design,
                                                    Web page optimization,
                                                    Mobile-friendly layout,
                                                    User-friendly web design, Vue.js developer, backend-developer, Laravel 10,
                                                    php, laravel developer,">
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                            <div class="content-wrapper">
                                                <h2 class="modal-title">Front End Work for RUBI</h2>
                                                <p>

                                                    Rubi.com is a dynamic online platform that offers a range of
                                                    services to its users. As a Freelancer,
                                                    I contributed to the front-end development using
                                                    cutting-edge technologies such as Vue.js 3 and Vuetify. This
                                                    platform provided an excellent opportunity for collaboration
                                                    with the client, resulting in a rewarding journey of mutual
                                                    growth and success. With its user-friendly interface and
                                                    innovative features, Rubi.com stands as a testament to our
                                                    dedication to creating impactful digital experience
                                                </p>

                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                            <div
                                                class="meta-wrapper form-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                <ul class="item-meta">
                                                    <li>Project Type : <span
                                                            class="pl-2 openS-font-family">Front end
                                                            development</span></li>
                                                    <li>Clien : <span class="pl-2 openS-font-family">Alex
                                                            Vdal</span></li>
                                                    <li>Duration :<span class="pl-2 openS-font-family">2
                                                            Weeks</span></li>
                                                    <li>Task : <span class="pl-2 openS-font-family">Frontend
                                                            development using vue.js and vuetify.</span></li>
                                                    <li>Budget : <span class="pl-2 openS-font-family">N/A</span>
                                                    </li>
                                                </ul>
                                                <a href="https://www.rubi.com/ca"
                                                    class="btn position-relative over-hidden text-uppercase mt-20 pt-2 pb-2">View
                                                    Live</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="pro-modal-footer mt-30 mb-45">
                                        <div class="row align-items-center justify-content-md-between">
                                            <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                    <h6 class="mb-0 pr-15">Tags :</h6>
                                                    <ul class="tag-list">
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Web
                                                                Development</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Front end
                                                                Developer</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Vue.js</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Vuetify</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Vite</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Web page
                                                                layout</a>
                                                        </li>

                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Responsive
                                                                design</a>
                                                        </li>

                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Web page
                                                                optimization</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">Mobile-friendly
                                                                layout</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/R8gaZD">User-friendly
                                                                web
                                                                design</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /col -->
                                            <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                <div
                                                    class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                    <h6 class="pr-12 mb-0">Share this product :</h6>
                                                    <ul class="social-link text-md-right">

                                                        <li class="d-inline-block">
                                                            <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                href="https://twitter.com/darahat42"><i
                                                                    class="fab fa-twitter"></i></a>
                                                        </li>

                                                        <li class="d-inline-block">
                                                            <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                href="https://www.linkedin.com/in/didarulalamrahat/"><i
                                                                    class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                    </ul><!-- social-link -->
                                                </div>
                                            </div><!-- /col -->
                                        </div> <!-- .row -->
                                    </div>
                                </div><!-- /modal-body -->
                            </div> <!-- /modal-content -->
                        </div>
                    </div>
                </div>
                <!-- Modal end -->

                <!-- Modal2 start -->
                <div class="modal fade" :class="{ 'show d-block': activeModal === 'exampleModal-p2' }" id="exampleModal-p2" tabindex="-2" role="dialog"
                    aria-labelledby="exampleModal-p1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="close-icon float-right pt-10 pr-10">
                                <button type="button" class="close d-inline-block" @click="closeModal"
                                    aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                </button>
                            </div>
                            <div class="modal-content border-0">
                                <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                    <div class="blog-modal-img">
                                        <img class="w-100" src="/images/portfolio/port-img2-large.webp" alt="User-friendly web design,
                                                    front-end development,
                                                    HTML,
                                                    CSS,
                                                    Tailwind CSS,
                                                    user interface design,
                                                    digital experience, front-end developer, backend-developer, Laravel 10,
                                                    php, laravel developer">
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                            <div class="content-wrapper">
                                                <h2 class="modal-title">Work with The Network Tap</h2>
                                                <p>
                                                    TheNetworkTap.com is a vibrant online platform that serves
                                                    as a hub for networking enthusiasts and professionals alike.
                                                    As a member of the Rubi development team, I played a crucial
                                                    role in shaping its front-end development. Leveraging my
                                                    expertise in HTML, CSS, and Tailwind CSS, I contributed to
                                                    crafting an engaging and visually appealing user interface.
                                                    Collaborating closely with the client, our journey was
                                                    marked by innovation and seamless integration of features.
                                                </p>
                                                <p>
                                                    TheNetworkTap.com stands as a testament to our dedication to
                                                    delivering exceptional digital experiences. It was truly a
                                                    rewarding journey with our client
                                                </p>


                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                            <div
                                                class="meta-wrapper form-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                <ul class="item-meta">
                                                    <li>Project Type : <span
                                                            class="pl-2 openS-font-family">Front-End Development
                                                        </span></li>
                                                    <li>Clien : <span class="pl-2 openS-font-family">Wei de
                                                            chang</span></li>
                                                    <li>Duration :<span class="pl-2 openS-font-family">1
                                                            Week</span></li>
                                                    <li>Task : <span class="pl-2 openS-font-family">Front End
                                                            Development for The Network Tap Company</span></li>
                                                    <li>Budget : <span
                                                            class="pl-2 openS-font-family">$200</span>
                                                    </li>
                                                </ul>
                                                <a href="https://thenetworktap.com/"
                                                    class="btn position-relative over-hidden text-uppercase mt-20 pt-2 pb-2">View
                                                    Live</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="pro-modal-footer mt-30 mb-45">
                                        <div class="row align-items-center justify-content-md-between">
                                            <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                    <h6 class="mb-0 pr-15">Tags :</h6>
                                                    <ul class="tag-list">
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">User-friendly
                                                                web
                                                                design</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">front-end
                                                                development</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">HTML</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">CSS</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">Tailwind
                                                                CSS</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">user
                                                                interface
                                                                design</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">digital
                                                                experience</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /col -->
                                            <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                <div
                                                    class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                    <h6 class="pr-12 mb-0">Share this product :</h6>
                                                    <ul class="social-link text-md-right">

                                                        <li class="d-inline-block">
                                                            <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                href="https://twitter.com/darahat42"><i
                                                                    class="fab fa-twitter"></i></a>
                                                        </li>

                                                        <li class="d-inline-block">
                                                            <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                href="https://www.linkedin.com/in/didarulalamrahat/"><i
                                                                    class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                    </ul><!-- social-link -->
                                                </div>
                                            </div><!-- /col -->
                                        </div> <!-- .row -->
                                    </div>
                                </div><!-- /modal-body -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->

                <!-- Modal3 start -->
                <div class="modal fade" :class="{ 'show d-block': activeModal === 'exampleModal-p3' }" id="exampleModal-p3" tabindex="-3" role="dialog"
                    aria-labelledby="exampleModal-p1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="close-icon float-right pt-10 pr-10">
                                <button type="button" class="close d-inline-block" @click="closeModal"
                                    aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                </button>
                            </div>
                            <div class="modal-content border-0">
                                <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                    <div class="blog-modal-img">
                                        <img class="w-100" src="/images/portfolio/port-img3-large.webp" alt="E-learning platform,
                                                    Laravel development,
                                                    MySQL database,
                                                    HTML CSS Tailwind CSS,
                                                    Online education system,
                                                    Course management,
                                                    Interactive learning materials,
                                                    Student assessment,
                                                    Discussion forums,
                                                    Progress tracking,
                                                    Laravel 10,
                                                    php developer, laravel developer">
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                            <div class="content-wrapper">
                                                <h2 class="modal-title">E-Learning system for ELP</h2>
                                                <p>

                                                    The E-learning system developed for ELP is a streamlined
                                                    platform built with Laravel and MySQL for backend
                                                    functionality, and HTML, CSS, and Tailwind CSS for frontend
                                                    design. It offers an intuitive interface for students and
                                                    instructors, supporting course management, interactive
                                                    learning materials, assessment tools, discussion forums, and
                                                    progress tracking. Secure and scalable, this system fosters
                                                    a dynamic educational environment conducive to effective
                                                    online learning experiences.
                                                </p>

                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                            <div
                                                class="meta-wrapper form-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                <ul class="item-meta">
                                                    <li>Project Type : <span
                                                            class="pl-2 openS-font-family">E-Learning Management
                                                            System</span></li>
                                                    <li>Clien : <span class="pl-2 openS-font-family">Kobe
                                                            Bryant</span></li>
                                                    <li>Duration :<span class="pl-2 openS-font-family">2
                                                            Weeks</span></li>
                                                    <li>Task : <span class="pl-2 openS-font-family">Full Stack
                                                            web Development Using Laravel</span></li>
                                                    <li>Budget : <span
                                                            class="pl-2 openS-font-family">$400</span>
                                                    </li>
                                                </ul>
                                                <a href="#contact"
                                                    class="btn position-relative over-hidden text-uppercase mt-20 pt-2 pb-2">View
                                                    Live</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="pro-modal-footer mt-30 mb-45">
                                        <div class="row align-items-center justify-content-md-between">
                                            <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                    <h6 class="mb-0 pr-15">Tags :</h6>
                                                    <ul class="tag-list">
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">E-learning
                                                                platform</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">Laravel
                                                                development</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">MySQL
                                                                database</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">HTML CSS
                                                                Tailwind
                                                                CSS</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">Online
                                                                education
                                                                system</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">Course
                                                                management</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">Interactive
                                                                learning
                                                                materials</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">Student
                                                                assessment</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">Discussion
                                                                forums</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/PqKNzL">Progress
                                                                tracking</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /col -->
                                            <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                <div
                                                    class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                    <h6 class="pr-12 mb-0">Share this product :</h6>
                                                    <ul class="social-link text-md-right">
                                                        <li class="d-inline-block">
                                                            <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                href="https://twitter.com/darahat42"><i
                                                                    class="fab fa-twitter"></i></a>
                                                        </li>

                                                        <li class="d-inline-block">
                                                            <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                href="https://www.linkedin.com/in/didarulalamrahat/"><i
                                                                    class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                    </ul><!-- social-link -->
                                                </div>
                                            </div><!-- /col -->
                                        </div> <!-- .row -->
                                    </div>
                                </div><!-- /modal-body -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->

                <!-- Modal4 start -->
                <div class="modal fade" :class="{ 'show d-block': activeModal === 'exampleModal-p4' }" id="exampleModal-p4" tabindex="-4" role="dialog"
                    aria-labelledby="exampleModal-p1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="close-icon float-right pt-10 pr-10">
                                <button type="button" class="close d-inline-block" @click="closeModal"
                                    aria-label="Close">
                                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                                </button>
                            </div>
                            <div class="modal-content border-0">
                                <div class="modal-body pl-50 pr-50 pt-10 pb-20">
                                    <div class="blog-modal-img">
                                        <img class="w-100" src="/images/portfolio/port-img4-large.webp" alt="Bangladesh Agricultural University Flutter Mobile App large screenshot" loading="lazy">
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                            <div class="content-wrapper">
                                                <h2 class="modal-title">Flutter Mobile App for Bangladesh
                                                    Agricultural University(BAU)</h2>
                                                <p>
                                                    The Flutter mobile app developed for Bangladesh Agricultural
                                                    University has become a cornerstone in agricultural
                                                    education. Utilizing Flutter's cross-platform capabilities,
                                                    the app offers a seamless user experience. With over 5,000
                                                    downloads and a rating of 4.8 stars, it has garnered praise
                                                    for its intuitive design and comprehensive features. Serving
                                                    as a vital resource for students and stakeholders, the app
                                                    exemplifies the university's commitment to innovation in
                                                    agricultural outreach and education.
                                                </p>

                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-5 col-lg-5  col-md-12 col-sm-12 col-12">
                                            <div
                                                class="meta-wrapper form-bg mt-60 pt-40 pb-45 pr-20 pl-45 mt-40 mb-10">
                                                <ul class="item-meta">
                                                    <li>Project Type : <span
                                                            class="pl-2 openS-font-family">Flutter App
                                                            Development</span></li>
                                                    <li>Clien : <span class="pl-2 openS-font-family">Bangladesh
                                                            Agricultural University</span></li>
                                                    <li>Duration :<span class="pl-2 openS-font-family">2
                                                            Weeks</span></li>
                                                    <li>Task : <span class="pl-2 openS-font-family">Make an app
                                                            where universities all contract's will easily
                                                            accessible using Flutter
                                                            Development</span></li>
                                                    <li>Budget : <span class="pl-2 openS-font-family">N/A</span>
                                                    </li>
                                                </ul>
                                                <a href="https://play.google.com/store/apps/details?id=com.bauictcell.bau_app&hl=en&gl=US"
                                                    class="btn position-relative over-hidden text-uppercase mt-20 pt-2 pb-2">View
                                                    Live</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="pro-modal-footer mt-30 mb-45">
                                        <div class="row align-items-center justify-content-md-between">
                                            <div class="col-xl-7 col-lg-7  col-md-12 col-sm-12 col-12">
                                                <div class="modal-tags d-sm-flex align-items-center pt-25">
                                                    <h6 class="mb-0 pr-15">Tags :</h6>
                                                    <ul class="tag-list">
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/darahat428?up_rollout=true">Flutter
                                                                mobile app</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/darahat428?up_rollout=true">Agricultural
                                                                education
                                                                app</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/darahat428?up_rollout=true">Cross-platform
                                                                development</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/darahat428?up_rollout=true">Mobile
                                                                application for
                                                                agriculture</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/darahat428?up_rollout=true">Educational
                                                                technology</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/darahat428?up_rollout=true">Agriculture
                                                                research
                                                                app</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/darahat428?up_rollout=true">Agriculture
                                                                outreach</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/darahat428?up_rollout=true">Mobile
                                                                learning
                                                                platform</a>
                                                        </li>
                                                        <li class="d-inline-block pr-10">
                                                            <a class="d-block"
                                                                href="https://www.fiverr.com/s/darahat428?up_rollout=true">Agricultural
                                                                resources
                                                                app</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- /col -->
                                            <div class="col-xl-5 col-lg-5  col-md-12 col-sm-10 col-12">
                                                <div
                                                    class="pro-modal-social-link d-flex align-items-center justify-content-lg-end pt-25">
                                                    <h6 class="pr-15 mb-0">Share
                                                        this product
                                                        :</h6>
                                                    <ul class="social-link text-md-right">
                                                        <li class="d-inline-block">
                                                            <a class="twitter-color text-center pl-15 d-inline-block transition-3"
                                                                href="https://twitter.com/darahat42"><i
                                                                    class="fab fa-twitter"></i></a>
                                                        </li>

                                                        <li class="d-inline-block">
                                                            <a class="linkedin-color text-center pl-15 d-inline-block transition-3"
                                                                href="https://www.linkedin.com/in/didarulalamrahat/"><i
                                                                    class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                    </ul><!-- social-link -->
                                                </div>
                                            </div><!-- /col -->
                                        </div> <!-- .row -->
                                    </div>
                                </div><!-- /modal-body -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal end -->

            </div><!-- /container -->
        </div><!-- /portfolio-wrapper -->
    </div>
</template>
<script>
export default {
    name: 'PortfolioArea',
    data() {
        return {
            activeModal: null
        };
    },
    methods: {
        openModal(modalId) {
            this.activeModal = modalId;
            document.body.classList.add('modal-open'); // Add class to body to prevent scrolling
        },
        closeModal() {
            this.activeModal = null;
            document.body.classList.remove('modal-open'); // Remove class from body
        }
    }
}
</script>
<style scoped>
.modal {
    background-color: rgba(0, 0, 0, 0.5);
}
</style>
