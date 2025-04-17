<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <v-app> 
    <v-app-bar color="grey-lighten-3" elevation="0">
      <v-container>
        <v-toolbar-items>
          
          <Link href="/">
            <v-btn variant="text">Home</v-btn>
          </Link>

          
          <Link href="/About">
            <v-btn variant="text">About Us</v-btn>
          </Link>

          
          <v-menu
            open-on-hover
            :open-delay="100"
            :close-delay="200"
            transition="slide-y-transition"
          >
          <template v-slot:activator="{ props }">
            <v-btn 
                variant="text"
                v-bind="props"
                append-icon="mdi-chevron-down"
                class="text-capitalize"
            >
                Our Work
            </v-btn>
        </template>
        <v-list density="compact" min-width="200">
            <Link href="/policy">
                <v-list-item 
                    title="Policy"
                    prepend-icon="mdi-file-document"
                    value="policy"
                ></v-list-item>
            </Link>
            <Link href="/Innovation">
                <v-list-item 
                    title="Innovation"
                    prepend-icon="mdi-lightbulb-on"
                    value="innovation"
                ></v-list-item>
            </Link>
            <Link href="/Education">
                <v-list-item 
                    title="Education"
                    prepend-icon="mdi-school"
                    value="education"
                ></v-list-item>
            </Link>


        </v-list>
    </v-menu>
    
    <Link href="/publications">
        <v-btn variant="text">Publications</v-btn>
    </Link>
    
    <Link href="/acacia-talk">
        <v-btn variant="text">Acacia Talk</v-btn>
    </Link>
    <Link href="/Contact">
        <v-btn variant="text">Contact Us</v-btn>
    </Link>
</v-toolbar-items>
</v-container>
</v-app-bar>
<v-main>
    <slot />
</v-main>
</v-app>
</template>
