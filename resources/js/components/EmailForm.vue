<template>
	<div>
		<FormGroup label="Enter your email below:" input="email">
			<FormInput class="mt-2" name="email" type="email" placeholder="yourname@gmail.com"></FormInput>
			<FormButton class="w-full mt-4">Get Started!</FormButton>
			<p class="mt-4 text-sm">We'll send you a link to verify your email address. No spam.</p>
		</FormGroup>
	</div>
</template>

<script>
import FormGroup from '@/components/FormGroup'
import FormInput from '@/components/FormInput'
import FormButton from '@/components/FormButton'

export default {
	components: {
		FormGroup, FormInput, FormButton,
	}
}
</script>
