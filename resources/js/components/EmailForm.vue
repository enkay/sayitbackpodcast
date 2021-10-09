<template>
	<div>
		<form v-if="!success" @submit.prevent="submit">
			<FormGroup label="Enter your email below:" :errors="errors" input="email">
				<FormInput class="mt-2" name="email" v-model="form.email" type="email" placeholder="yourname@gmail.com"></FormInput>
			</FormGroup>
			<FormButton type="submit" :loading="loading" class="w-full mt-4">Get Started!</FormButton>
			<p class="mt-4 text-sm">We'll send you a link to verify your email address. No spam.</p>
		</form>
		<div v-else>
			<p><strong class="font-bold">Big Success.</strong></p>
			<p class="mt-2">We just sent a verification email to: <strong class="font-bold">{{ form.email }}</strong>.</p>
			<p class="mt-2">Please click the link in the email to continue setting up your dating profile.</p>
		</div>
	</div>
</template>

<script>
import FormGroup from '@/components/FormGroup'
import FormInput from '@/components/FormInput'
import FormButton from '@/components/FormButton'

export default {
	components: {
		FormGroup, FormInput, FormButton,
	},

	data () {
		return {
			form: {
				email: '',
			},
			loading: false,
			errors: {},
			success: false,
		}
	},

	methods: {
		async submit () {
			this.loading = true
			try {
				await axios.post('/api/apply', this.form)
				this.success = true
			} catch (error) {
				this.errors = error.response.data.errors
				this.loading = false
			}
		}
	}
}
</script>
