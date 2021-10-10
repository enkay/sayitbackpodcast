<template>
	<div>
		<form v-if="!success" @submit.prevent="submit">
			<FormGroup class="" label="Enter your email" :errors="errors" input="email">
				<FormInput name="email" v-model="form.email" type="email" placeholder="yourname@gmail.com"></FormInput>
			</FormGroup>
			<FormButton type="submit" :loading="loading" class="w-full mt-4">Sign In</FormButton>
			<p class="mt-4 text-xs text-center">We'll email you a link to sign in.</p>
		</form>
		<div v-else>
			<p>Check your email!</p>
			<p class="mt-2">We sent a sign in link to: <strong class="font-bold">{{ form.email }}</strong>.</p>
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
				await axios.post('/api/login', this.form)
				this.success = true
			} catch (error) {
				this.errors = {
					email: [
						"We couldn't find your account."
					]
				}
				// this.errors = error.response.data.errors
				this.loading = false
			}
		}
	}
}
</script>
