<script setup>
import NavLayout from '@/layouts/NavLayout.vue';
import FooterLayout from '@/layouts/FooterLayout.vue';
</script>
<template>
<NavLayout>
    <v-app>
        <v-main>
            <v-container class="py-5">
                <h1 class="text-h4 font-weight-bold mb-2 text-left">
                    Publications
                </h1>
                <v-divider class="my-4"></v-divider>
                <p class="text-body-1 leading-relaxed">
                    On a given policy issue that concerns citizens, a <strong>Discourse</strong> is convened where seminar and workshop tools are utilised.
                    Experts authoritatively speak and present evidence (papers and PowerPoints), engage stakeholders in debates to increase audience
                    understanding of the topic, and communicate policy options.
                </p>
                <p class="text-body-1 leading-relaxed mt-4">
                    Facilitators of Discourses work with all participants to articulate a policy agenda for communication to policy-makers.
                    All publications can be downloaded for use, sharing, and storage.
                </p>
                <hr>
                <div class="my-2">
                    <h3 class="text-h5 font-weight-bold mb-2">
                        Policy Notes
                    </h3>
                    <v-divider class="mb-4"></v-divider>
                    <v-row>
                        <v-col cols="12" md="6">
                            <p class="text-body-1 leading-relaxed">
                                Short written briefs summarizing agenda items for engagement with policy-makers
                            </p>
                        </v-col>
                        <v-col cols="12" md="6">
                            <div style="max-height: 150px; overflow-y: auto;">
                                <v-table density="compact" class="elevation-1">
                                    <thead>
                                        <tr>
                                            <th>List of Policy Notes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a 
                                                    href="https://udugu.org/blog/wp-content/uploads/2020/12/Disaster-Preparedness.pdf" 
                                                    target="_blank"
                                                    class="text-primary "
                                                >
                                                    Disaster Preparedness Framework post covide-19
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a 
                                                    href="https://udugu.org/blog/wp-content/uploads/2020/12/Zimbabwe-Health-Strategy-2020-1-1.docx" 
                                                    target="_blank"
                                                    class="text-primary "
                                                >
                                                    Zimbabwe Health Strategy 2020: Invitation to Evidence-Based Dialogue
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a 
                                                    href="https://udugu.org/blog/wp-content/uploads/2020/11/Debt-Dialogue-Tools-MOFED.pdf" 
                                                    target="_blank"
                                                    class="text-primary "
                                                >
                                                    MOFED debt dialogue tools
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a 
                                                    href="https://udugu.org/blog/wp-content/uploads/2020/10/Satellite-Markets-Water-and-Sanitation-Agenda.pdf" 
                                                    target="_blank"
                                                    class="text-primary "
                                                >
                                                    Satelite Markets Water and Sanitation Agenda
                                                </a>
                                            </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a 
                                                        href="https://udugu.org/blog/wp-content/uploads/2020/10/Tomato-Value-Chain-ten-point-agenda.pdf" 
                                                        target="_blank"
                                                        class="text-primary "
                                                    >
                                                        Tomato Value Chain Ten Point Agenda
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a 
                                                        href="https://udugu.org/blog/wp-content/uploads/2020/10/DEBT-DIALOGUE-TOOLs.pdf" 
                                                        target="_blank"
                                                        class="text-primary "
                                                    >
                                                        Debt Dialogue Tools
                                                    </a>
                                                 </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a 
                                                            href="https://udugu.org/blog/wp-content/uploads/2020/08/Land-Policy-Note.pdf" 
                                                            target="_blank"
                                                            class="text-primary "
                                                        >
                                                            Land Policy Note
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </v-table>
                                    </div>
                                </v-col>
                            </v-row>
                        </div>
                        <hr>
                        <div class="my-2">
                            <h3 class="text-h5 font-weight-bold mb-2">
                                Discourse Papers
                            </h3>
                            <v-divider class="mb-4"></v-divider>
                            <v-row>
                                <v-col cols="12" md="6">
                                    <p class="text-body-1 leading-relaxed">
                                        Background materials presented by experts during Discourses convened to address priority policy issues in sectors.
                                    </p>
                                </v-col>
                                <v-col cols="12" md="6">
                                    <v-table density="compact" class="elevation-1">
                                        <thead>
                                            <tr>
                                                <th>List of Discourse Papers</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a 
                                                        href="https://udugu.org/blog/wp-content/uploads/2020/08/Health-Discourse-Report.pdf" 
                                                        target="_blank"
                                                        class="text-primary "
                                                    >
                                                        Health Discourse
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a 
                                                        href="https://udugu.org/blog/wp-content/uploads/2020/08/Agrarian-Dialogue-report.pdf" 
                                                        target="_blank"
                                                        class="text-primary "
                                                    >
                                                        Agrarian dialogue Report
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a 
                                                        href="https://udugu.org/blog/wp-content/uploads/2020/08/Devolution-Dialogue-2.pdf" 
                                                        target="_blank"
                                                        class="text-primary "
                                                    >
                                                        Devolution dialogue Report
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </v-table>
                                </v-col>
                            </v-row>
                        </div>
                    </v-container>
                    <FooterLayout />
                </v-main>
            </v-app>
            </NavLayout>
</template>
