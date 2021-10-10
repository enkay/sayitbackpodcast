<template>
	<h2 class="mt-8 text-xl font-extrabold uppercase">Last but not least</h2>
	<p class="mt-2">Choose a profile photo we can show to your potential matches. Make sure your face is clearly visible, and that you're not wearing sunglasses.</p>
	<form class="mt-8" @submit.prevent="submit">
		<FormGroup :errors="errors" input="photo">
			<FileUpload @change="handleFileUpload" button-text="Choose a Photo" input-name="photo" input-accept=".jpg,.jpeg,.png,.heif" :reset="fileUploadKey"></FileUpload>
		</FormGroup>
		<FormButton type="submit" :loading="loading" class="w-full mt-8">Upload Photo</FormButton>
	</form>
</template>

<script>
import FormGroup from '@/components/FormGroup'
import FileUpload from '@/components/FileUpload'
import FormButton from '@/components/FormButton'

export default {
	components: {
		FormGroup, FormButton, FileUpload,
	},

	props: [
		'name'
	],

	data () {
		return {
			formData: '',
			fileUploadKey: 0,
			errors: {},
			loading: false,
		}
	},
	methods: {

		handleFileUpload (event) {	
			// form data
			let data = new FormData()
			data.append('photo', event.target.files[0])
			this.formData = data
		},
		async submit () {
			this.loading = true
			try {
				await axios.post('/api/onboard/photo', this.formData)
				window.location.replace('/welcome/thanks')
			} catch (error) {
				this.errors = error.response.data.errors
				this.loading = false
			}
			this.fileUploadKey++
		}
	}
}
</script>
