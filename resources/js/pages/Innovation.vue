<script setup>
import NavLayout from '@/layouts/NavLayout.vue';
import FooterLayout from '@/layouts/FooterLayout.vue';
</script>
<template>
    <NavLayout>
        <v-app>
            <v-main>
                <v-container>
                    <div>
                        <v-img
                            src="/images/policy.jpg"
                            alt=" image loading"
                            cover
                        />
                    </div>
                    <section class="mb-8">
                        <h2 class="text-h4">
                            INNOVATION
                        </h2>
                    </section>
                    <hr>
                    <section class="mb-8">
                        <h3 class="text-h5  mb-4">
                            YaWEP
                        </h3>
                        <p class="mb-4">
                            The rationale for innovation is to solve local and national problems 
                            though entrepreneurship,and supply goods and services demanded by the population.
                        </p>
                        <p>
                            The Youth and Women Enterprise Promotion (YaWEP) program fosters the growth of a national 
                            innovation ecosystem and business leaders by empowering youth and women to lead the acceleration 
                            of innovative ideas into products for the market
                        </p>
                        <v-btn
                            color="primary"
                            variant="outlined"
                            append-icon="mdi-arrow-right"
                            href="https://www.facebook.com/batanai2create/"
                        >
                            Read More
                        </v-btn>
                    </section>
                    <section>
                        <h4 class="text-h5  mb-4">
                            Projects under YaWEP
                        </h4>
                        <div class="mb-6">
                            <h4 class="text-h6 font-weight-bold  mb-2">
                                <v-icon icon="mdi-circle-small" color="primary" class="mr-2" />
                                    B2C Coworking
                            </h4>
                            <p class="text-body-1 pl-6">
                                B2C Coworking is an entrepreneurship incubator that assists dreamers with services and 
                                support for taking ideas to products in the market
                            </p>
                            <v-btn
                                color="primary"
                                variant="outlined"
                                append-icon="mdi-arrow-right"
                                href="https://www.facebook.com/batanai2create/"
                            >
                                Read More
                            </v-btn>
                        </div>
                        <div class="mb-6">
                            <h4 class="text-h6 font-weight-bold  mb-2">
                                <v-icon icon="mdi-circle-small" color="primary" class="mr-2" />
                                INNOVATION BARAZA
                            </h4>
                            <p class="text-body-1 pl-6">
                                Innovation Baraza brings together the best and brightest entrepreneurs for a national fair of 
                                innovative ideas for peer-to-peer validation in readiness for the market.
                            </p>
                            <v-btn
                                color="primary"
                                variant="outlined"
                                append-icon="mdi-arrow-right"
                                href="https://www.facebook.com/Innovationbaraza/"
                            >
                                Read More
                            </v-btn>
                        </div>
                        <div class="mb-6">
                            <h4 class="text-h6 font-weight-bold  mb-2">
                                <v-icon icon="mdi-circle-small" color="primary" class="mr-2" />
                                SIMBA SAVANNAH
                            </h4>
                            <p class="text-body-1 pl-6">
                                Simba Savannah connects innovators to mentors and opportunities while at the same time entertaining, 
                                educating, and inspiring audiences
                            </p>
                            <v-btn
                                color="primary"
                                variant="outlined"
                                append-icon="mdi-arrow-right"
                                href="https://www.facebook.com/SimbaSavannah/"
                            >
                                Read More
                            </v-btn>
                        </div>
                    </section>
                    <hr>
                    <section class="mb-8">
                        <div class="mb-6">
                            <h4 class="text-h5  mb-4">Eight2Five</h4>
                            <p class="text-body-1 pl-6">
                                Eight2Five empowers startups and creatives through innovation, mentorship, and workspace solutions to grow sustainable businesses.
                            </p>
                            <v-btn
                                color="primary"
                                variant="outlined"
                                append-icon="mdi-arrow-right"
                                href="https://eight2five.co.zw/"
                            >
                                Read More
                            </v-btn>
                        </div>
                    </section>
                    <hr>
                    <section class="mb-8">
                        <div class="mb-6">
                            <h4 class="text-h5  mb-4">Africa Creatives Network</h4>
                            <p class="text-body-1 pl-6">
                                African Creatives Network unites and empowers Africa’s creative professionals through collaboration, 
                                innovation, and opportunities that drive cultural and economic growth.
                            </p>
                            <v-btn
                                color="primary"
                                variant="outlined"
                                append-icon="mdi-arrow-right"
                                href="https://africancreativesnetwork.com/pages/landing/home"
                            >
                                Read More
                            </v-btn>
                        </div>
                    </section>
                    <hr>
                </v-container>
                <FooterLayout/>
            </v-main>
        </v-app>
    </NavLayout>


</template>