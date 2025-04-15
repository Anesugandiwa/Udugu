<script setup>
import { Link } from '@inertiajs/vue3';
</script>
<template>
    <v-footer color="grey-lighten-3" app class="text-dark">
        <v-container>
            <v-row>
                <v-col cols="12" md="4">
                    <h4 class="font-weight-bold mb-2">Contact Us</h4>
                    <span>Udugu Open House <br> 42 Harvey Brown Milton Park <br> Harare</span>

                </v-col>
                <v-col cols="12" md="4">
                    <h4 class="font-weight-bold mb-2"> Subscribe To Our Newsletter</h4>
                    <v-btn 
                        prepend-icon="mdi-email"
                        border-color = primary
                        variant="flat"
                        size="large"
                    >
                        SUBSCRIBE
                    </v-btn>


                </v-col>

                <v-col cols="12" md="4">
                    <h4 class="font-weight-bold mb-2">Join Us On Social Media</h4>
                    <v-btn icon class="me-2" href="https://facebook.com" target="_blank">
                        <v-icon>mdi-facebook</v-icon>
                    </v-btn>
                    <v-btn icon class="me-2" href="https://twitter.com" target="_blank">
                        <v-icon>mdi-twitter</v-icon>
                    </v-btn>
                    <v-btn icon class="me-2" href="https://linkedin.com" target="_blank">
                        <v-icon>mdi-linkedin</v-icon>
                    </v-btn>
                    <v-btn icon class="me-2" href="https://whatsapp.com" target="_blank">
                        <v-icon>mdi-whatsapp</v-icon>
                    </v-btn>

                </v-col>
            </v-row>
        </v-container>

    </v-footer>
</template>