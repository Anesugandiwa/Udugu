<script setup>
import { Head } from '@inertiajs/vue3'
import NavLayout from '@/layouts/NavLayout.vue'
import FooterLayout from '@/layouts/FooterLayout.vue'

defineProps({
  seo: Object,
})


</script>
<template>
<Head>
    <title>{{ seo.title }}</title>
    <meta name="description" :content="seo.description">
    <link rel="canonical" :href="seo.canonical" />
</Head>
    <NavLayout>
        <v-app>
            <v-main>
                <v-container>
                    <div>
                        <v-img 
                            src="/images/udugu_logo.jpg"
                            alt="Udugu Logo"
                            max-width="500"
                            class="mx-auto"
                        />
                    </div>
                    <div class="mb-30">
                        <v-row class="text-center">
                            <v-col cols="4" class="font-weight-bold" >
                                <span>POLICY</span>
                            </v-col>
                            <v-col cols="4" class="font-weight-bold" style="border-left: 3px solid #000; border-right: 3px solid #000">
                                <span>INNOVATION</span>
                            </v-col>
                            <v-col cols="4" class="font-weight-bold">
                                <span>EDUCATION</span>
                            </v-col>
                        </v-row>
                    </div>
                </v-container>
                <FooterLayout />
            </v-main>
        </v-app>
    </NavLayout>
    </template>