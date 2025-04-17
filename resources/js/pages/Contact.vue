<script setup>
import NavLayout from '@/layouts/NavLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const form = useForm({
    email: '',
    message: '',

});

const errors = ref({
    email: '',
    message: '',
    
})

const sendMessage =() => {
    form.post(route('send_message'), {
        onSuccess: () =>{
            Swal.fire('Success!', 'message sent successfully.','success')
        },
        onError: (newErrors) => {
                errors.value =newErrors
            }
    })
}
</script>
<template>
    <NavLayout>
        <v-container class="py-8">
            <v-row justify="center" align="stretch">
                <!-- Text Section -->
                <v-col cols="12" md="6" class="pr-md-6">
                    <v-card class="h-100" flat color="transparent">
                        <v-card-title class="text-h3 font-weight-bold primary--text mb-4">
                            Get in Touch
                        </v-card-title>
                        
                        <v-card-text class="text-body-1 mb-6">
                            <p class="mb-4">
                                We'd love to hear from you! Whether you have a question about our services, 
                                need assistance, or just want to share feedback, our team is ready to help.
                            </p>

                            
                            <v-list dense color="transparent">
                                <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon>mdi-office-building</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title>Address</v-list-item-title>
                                        <v-list-item-subtitle>Zimbabwe</v-list-item-subtitle>
                                        <v-list-item-text>Udugu Open House <br>42 Harvey Brown Milton Park <br>Harare <br>Zimbabwe</v-list-item-text>
                                    </v-list-item-content>
                                </v-list-item>
                                <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon color="primary">mdi-email</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title>Email us at:</v-list-item-title>
                                        <v-list-item-subtitle>info@udugu.org</v-list-item-subtitle>
                                    </v-list-item-content>
                                </v-list-item>
                                
                                <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon color="primary">mdi-phone</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title>Call us:</v-list-item-title>
                                        <v-list-item-subtitle>+263242 250 602</v-list-item-subtitle>
                                    </v-list-item-content>
                                </v-list-item>
                                
                                <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon color="primary">mdi-clock</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title>Working hours:</v-list-item-title>
                                        <v-list-item-subtitle>Mon-Fri: 9AM - 5PM</v-list-item-subtitle>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-list>
                            

                        </v-card-text>
                    </v-card>
                </v-col>
                
                <!-- Form Section -->
                <v-col cols="12" md="6" class="pl-md-6">
                    <v-card class="elevation-6 rounded-lg h-100">
                        <v-card-title class="text-h4 font-weight-bold primary--text py-6 text-center">
                            Send Us a Message
                        </v-card-title>
                        
                        <v-card-text class="px-6 pb-6">
                            <v-form @submit.prevent="sendMessage">
                                <v-row>
                                    <v-col cols="12">
                                        <v-text-field
                                            label="Email"
                                            v-model="form.email"
                                            type="email"
                                            required
                                            outlined
                                            placeholder="your@email.com"
                                            :error-messages="errors.email"
                                            prepend-inner-icon="mdi-email"
                                            color="primary"
                                            class="rounded-lg"
                                        />
                                    </v-col>
                                    
                                    <v-col cols="12">
                                        <v-textarea
                                            label="Your Message"
                                            v-model="form.message"
                                            required
                                            outlined
                                            placeholder="How can we help you?"
                                            :error-messages="errors.message"
                                            rows="5"
                                            prepend-inner-icon="mdi-message-text"
                                            color="primary"
                                            class="rounded-lg"
                                            counter
                                            maxlength="500"
                                            auto-grow
                                        />
                                    </v-col>
                                </v-row>
                                
                                <v-row justify="center" class="mt-2">
                                    <v-btn
                                        type="submit"
                                        color="primary"
                                        :loading="form.processing"
                                        x-large
                                        rounded
                                        class="px-8 font-weight-bold"
                                        :disabled="form.processing"
                                    >
                                        <v-icon left>mdi-send</v-icon>
                                        Send Message
                                    </v-btn>
                                </v-row>
                            </v-form>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </NavLayout>
</template>