<template>
	<div>
		<FormGroup label="Enter your best email">
			<FormInput type="email" placeholder="yourname@gmail.com"></FormInput>
			<FormButton class="w-full mt-4">Get Started</FormButton>
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
