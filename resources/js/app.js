require('./bootstrap');
import { createApp } from 'vue'
import EmailForm from '@/components/EmailForm.vue'
import OnboardingForm from '@/components/OnboardingForm.vue'
import PhotoForm from '@/components/PhotoForm.vue'
import LoginForm from '@/components/LoginForm.vue'
// import notify from '@/mixins/notify'

// events
// window.events = createApp({
// 	mixins: [notify],
// })

const app = createApp({})
app.component('email-form', EmailForm)
app.component('onboarding-form', OnboardingForm)
app.component('photo-form', PhotoForm)
app.component('login-form', LoginForm)
app.mount('#app')
