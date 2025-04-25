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
                            POLICY
                        </h2>
                        <p class="mb-4">
                            Policy-making requires Collaborative Leadership where visionary leaders
                            working with engaged citizens produce the best possible consensus on issues in a given environment (local, national, and global).
                        </p>
                        <p class="mb-4">
                            Citizens need empowerment and governments need transparency to foster mutual accountability in the formulation, 
                            implementation, and monitoring of policies. The CitizensLab platform uses both traditional and digital tools to support evidence-based dialogue, strategic policy engagement, and improved 
                            economic governance. The platform promotes a dialogue contract between citizens and those who govern 
                            by tackling prevailing information asymmetry
                        </p>
                        <v-btn
                            color="primary"
                            variant="outlined"
                            append-icon="mdi-arrow-right"
                            href="https://www.facebook.com/LabCitizens/"
                        >
                            Read More
                        </v-btn>
                    
                    </section>
                    <hr>
                    <section class ="mb-8" >
                        <h3 class="text-h5 text-primary mb-4">
                            Projects under Policy
                        </h3>
                        <div class="mb-6">
                            <h4 class="text-h6 font-weight-bold text-primary mb-2">
                                <v-icon icon="mdi-circle-small" color="primary" class="mr-2" />
                                    Economic Governance Initiative (EGI)
                            </h4>
                            <p class="text-body-1 pl-6">
                                This is an issue-based approach to policy making,implementation, and monitoring
                            </p>
                            <v-btn
                                color="primary"
                                variant="outlined"
                                append-icon="mdi-arrow-right"
                                href=https://www.facebook.com/LabCitizens/
                            >
                                Read More
                            </v-btn>
                        </div>
                    </section>
                    <hr>
                    <section class="mb-8">
                        <h4 class="text-h6 font-weight-bold text-primary mb-2">
                            <v-icon icon="mdi-circle-small" color="primary" class="mr-2" />
                                Enhanced Dialogue Initiative (EDI)
                            </h4>
                            <p class="text-body-1 pl-6">
                                EDI has tested tools and approaches subsequently being tested by a consortium of partners under the EGI.
                            </p>
                            <v-btn
                                color="primary"
                                variant="outlined"
                                append-icon="mdi-arrow-right"
                                href="https://www.facebook.com/LabCitizens/"
                            >
                                Read More
                            </v-btn>
                        </section>
                        <section class="mb-8">
                            <h4 class="text-h6 font-weight-bold text-primary mb-2">
                                <v-icon icon="mdi-circle-small" color="primary" class="mr-2" />
                                    UDUGU NEXUS
                                </h4>
                                <p class="text-body-1 pl-6">
                                    NEXUS promotes inspired talks with potential to advance and modernise African societies through informed, innovative, and problem-solving interventions
                                </p>
                                <v-btn
                                    color="primary"
                                    variant="outlined"
                                    append-icon="mdi-arrow-right"
                                    href="https://www.facebook.com/LabCitizens/"
                                >
                                 Read More
                              </v-btn>
                            </section>
                        </v-container>
                        <FooterLayout/>
                    </v-main>
                </v-app>
            </NavLayout>
            </template>