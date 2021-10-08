<template>
	<div class="border-gray-300 flex pt-8 mt-8 border-t">
		<div class="w-88 flex-grow-0"></div>
		<div class="justify-end flex-grow max-w-4xl">
			<slot></slot>
			<FormButton type="submit" class="btn" :loading="isLoading()">{{ buttonText }}</FormButton>
		</div>
	</div>
</template>

<script>
import FormButton from '@/components/FormButton'
export default {
	components: {
		FormButton
	},
	props: {
		loading: {
			default: false
		},
		loadingValue: {
			default: false
		},
		buttonText: {
			type: String,
			default: 'Submit'
		}
	},
	methods: {
		isLoading () {
			return (this.loadingValue) ? this.loading == this.loadingValue : this.loading
		}
	}
}
</script>
