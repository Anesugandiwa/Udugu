<script setup>
import NavLayout from '@/layouts/NavLayout.vue';
import FooterLayout from '@/layouts/FooterLayout.vue';
</script>
<template>
    <NavLayout>
        <v-container>
            <div class="text-center">
                <v-img 
                    src="/images/about.png"
                    alt="Udugu Logo"
                    width="500"
                    height="500"
                    class="mx-auto rounded-lg"
                    cover 
                />
            </div>
            <v-row  class="mb-10">
                <v-col >
                    <h2 class="text-h5 font-weight-bold primary--text mb-4">ABOUT US</h2>
                    <p class="text-body-1 mb-6">
                        At Udugu, we recognize that the future of Africa is young. We believe that by working to harness the youth dividend in key sectors, we can make Africa function better economically, socially and politically.</p>
                        <p class="text-body-1">
                            Our core function is to support implementation in the focus areas below.
                        </p>
                 </v-col>
                 
            </v-row>
            <hr>
            <v-row class="mb-10">
                <v-col>
                    <h2 class="text-h5 font-weight-bold primary--text mb-4">POLICY</h2>
                    <p class="text-body-1 mb-6">
                        Governance and policy exist in every sector and function of society. In order to drive lasting and sustainable progress, policy engagement is key.

                    </p>
                </v-col>

            </v-row>
            <hr>
            <v-row class="mb-10">
                <v-col>
                    <h2 class="text-h5 font-weight-bold primary--text mb-4">INNOVATION</h2>
                    <p class="text-body-1 mb-6">
                        As old industries and job functions disappear over time, new more relevant one’s will replace them. Udugu has created an ecosystem that allows young innovators and entrepreneurs to thrive as they work to create the future of Africa
                    </p>
                </v-col>

            </v-row>
            <hr>

            <v-row class="mb-10">
                <v-col>
                    <h2 class="text-h5 font-weight-bold primary--text mb-4">EDUCATION</h2>
                    <p class="text-body-1 mb-6">
                        The backbone of all of our projects and initiatives is education; at the heart of our work we strive to develop and maintain thought-leadership in an ever-changing continent. We work to train and equip the future leaders.

                    </p>
                    <v-btn
                        color="primary"
                        href="https://drive.google.com/file/d/184WasN-DfR6Cj1zvAesnelsZoLy-N51r/view"
                        target="_blank"
                        rel="noopener"
                        prepend-icon="mdi-download"
                    >
                        DOWNLOAD OUR PROFILE
                </v-btn>
                </v-col>

            </v-row>
            <hr>
            
            <h4 class="text-h4">PARTNERS</h4>


            <v-row class="mb-10 d-flex flex-wrap justify-space-between">
                
                <v-col cols="12" md="3" >
                
                        <v-card class="mx-2" elevation="3" >
                        <v-img
                            src="/images/us.jpg"
                            alt="Card 1"
                            height="250px"
                            cover
                        />

                    </v-card>
                </v-col>
                <v-col cols="12" md="3">
                    <v-card class="mx-2" elevation="3">
                        <v-img
                            src="/images/us.jpg"
                            alt="Card 1"
                            height="250px"
                            cover
                        />
                    </v-card>
                </v-col>
                <v-col cols="12" md="3">
                    <v-card class="mx-2" elevation="3">
                        <v-img
                            src="/images/us.jpg"
                            alt="card1"
                            height="250px"
                            cover
                        />
                    </v-card>

                </v-col>

            </v-row>

    

            

        </v-container>
        <FooterLayout/>
    </NavLayout>
</template>