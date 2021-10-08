<template>
	<textarea ref="textarea" type="text" :class="{ 'white-bg': whiteBg }" :value="modelValue" :placeholder="placeholder" readonly></textarea>
</template>

<script>
import autosize from 'autosize'

export default {
	props: {
		modelValue: String,
		placeholder: String,
		'white-bg': Boolean,
	},
	mounted () {
		autosize(this.$refs.textarea)
	},
	methods: {
		autosize,
	}
}
</script>

<style lang="scss" scoped>
	textarea {
		@apply cursor-default bg-gray-100 appearance-none block p-3 border-2 border-gray-300 outline-none w-full rounded leading-normal text-base shadow-none;
	}

	.has-error textarea {
		@apply border-red-700 bg-red-100;
	}
</style>
