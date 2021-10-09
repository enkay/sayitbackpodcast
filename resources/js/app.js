require('./bootstrap');
import { createApp } from 'vue'
import EmailForm from '@/components/EmailForm.vue'
import OnboardingForm from '@/components/OnboardingForm.vue'
// import notify from '@/mixins/notify'

// events
// window.events = createApp({
// 	mixins: [notify],
// })

const app = createApp({})
app.component('email-form', EmailForm)
app.component('onboarding-form', OnboardingForm)
app.mount('#app')
