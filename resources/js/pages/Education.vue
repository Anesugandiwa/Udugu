<script setup>
import NavLayout from '@/layouts/NavLayout.vue';
import FooterLayout from '@/layouts/FooterLayout.vue';
</script>
<template>
    <NavLayout>
        <v-container>
            <div>
                <section class="mb-8">
                <h2 class="text-h4">
                    EDUCATION
                </h2>
            </section>
            <hr>
            <section class="mb-8">
                <h3 class="text-h5 text-primary mb-4">
                    Implementation Leadership Initiative (ILI)
                </h3>
                <p class="mb-3">
                    Education for Transformation requires knowledge to close the gap between theory and practice. 
                    Using digital tools for operational research, the Implementation Leadership Initiative (ILI) enables an organization 
                    to assess its governance and accountability readiness, document existing capacities and gaps, and assist individuals prepare 
                    plans for implementation through Output-Based Management with support from Project 
                    Managers in order to address on-site and on-the-job implementation challenges.

                </p>
                <v-btn
                    color="primary"
                    variant="outlined"
                    append-icon="mdi-arrow-right"
                    @click="expandContent"
                >
                    Read More
                </v-btn>

            </section>
            <section>
                <h4 class="text-h5 text-primary mb-4">
                    Projects under Implementation Leadership Initiative (ILI)
                </h4>
                <div class="mb-6">
                    <h4 class="text-h6 font-weight-bold text-primary mb-2">
                    <v-icon icon="mdi-circle-small" color="primary" class="mr-2" />
                    PECOGO
                </h4>
                <p class="text-body-1 pl-6">
                    (Public Entities Corporate and Governance) for assessing readiness for governance and accountability to 
                    improve operations and management.

                </p>
                <v-btn
                    color="primary"
                    variant="outlined"
                    append-icon="mdi-arrow-right"
                    @click="expandContent"
                >
                    Read More
                </v-btn>

                </div>
                <div class="mb-6">
                    <h4 class="text-h6 font-weight-bold text-primary mb-2">
                    <v-icon icon="mdi-circle-small" color="primary" class="mr-2" />
                    RACERS
                </h4>
                <p class="text-body-1 pl-6">
                    (Results, Adaptability, Competencies, Efficiency, Rapidity, Selectivity) is for capacity assessment in order to improve implementation using a Rapid Results Approach/Initiative (RRA/RRI)

                </p>
                <v-btn
                    color="primary"
                    variant="outlined"
                    append-icon="mdi-arrow-right"
                    href="https://zedc-73127.firebaseapp.com/home"
                >
                    Read More
                </v-btn>

                </div>
                <div class="mb-6">
                    <h4 class="text-h6 font-weight-bold text-primary mb-2">
                    <v-icon icon="mdi-circle-small" color="primary" class="mr-2" />
                    PLC
                </h4>
                <p class="text-body-1 pl-6">
                    PLC (Personal Leadership Challenge) assists motivated individuals implement plans that lead to Personal growth 
                    and success of the Organization in line with its strategy.

                </p>
                <v-btn
                    color="primary"
                    variant="outlined"
                    append-icon="mdi-arrow-right"
                    href="https://fir-fb55b.firebaseapp.com/landing"
                >
                    Read More
                </v-btn>

                </div>
                <div class="mb-6">
                    <h4 class="text-h6 font-weight-bold text-primary mb-2">
                    <v-icon icon="mdi-circle-small" color="primary" class="mr-2" />
                    PROMAN
                </h4>
                <p class="text-body-1 pl-6">
                    ProMan enables implementers to track Outputs and Inputs against Quantity and Costs at Planning, 
                    Procurement, Distribution, Report-back, and Monitoring stages.

                </p>
                <v-btn
                    color="primary"
                    variant="outlined"
                    append-icon="mdi-arrow-right"
                    @click="expandContent"
                >
                    Read More
                </v-btn>

                </div>
                </section>

            </div>
            <hr>
            <section class="mb-8">
                <div class="mb-6">
                <h4 class="text-h5 text-primary mb-4">Udugu Media</h4>
                <p class="text-body-1 pl-6">
                    Udugu Media amplifies African voices through impactful journalism, policy analysis, and storytelling that drives social change.

                </p>
                <v-btn
                    color="primary"
                    variant="outlined"
                    append-icon="mdi-arrow-right"
                    @click="expandContent"
                >
                    Read More
                </v-btn>

                </div>

            </section>
        </v-container>
        <FooterLayout/>
    </NavLayout>
</template>