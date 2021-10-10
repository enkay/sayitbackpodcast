<template>
	<div>
		<form @submit.prevent="submit">
			<FormGroup class="" label="What's your email?" :errors="errors" input="email">
				<FormInput name="email" v-model="form.email" type="email" placeholder="yourname@gmail.com"></FormInput>
			</FormGroup>
			<FormButton type="submit" :loading="loading" class="w-full mt-4">Get Started!</FormButton>
			<p class="mt-4 text-xs text-center">We'll send you a link to verify your email address. No spam.</p>
		</form>
	</div>
</template>

<script>
import FormGroup from '@/components/FormGroup'
import FormInput from '@/components/FormInput'
import FormSelect from '@/components/FormSelect'
import FormButton from '@/components/FormButton'

export default {
	components: {
		FormGroup, FormInput, FormButton,
		FormSelect, 
	},

	data () {
		return {
			form: {
				location: 'nyc',
				email: '',
			},
			cities: [
				{ code: 'nyc', name: 'New York, NY' },
				{ code: 'la', name: 'Los Angeles, CA' },
				{ code: 'mia', name: 'Miami, FL' },
			],
			loading: false,
			errors: {},
		}
	},

	methods: {
		async submit () {
			this.loading = true
			try {
				await axios.post('/api/apply', this.form)
				window.location.replace('/welcome')
			} catch (error) {
				this.errors = error.response.data.errors
				this.loading = false
			}
		}
	}
}
</script>
