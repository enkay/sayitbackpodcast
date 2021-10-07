<template>
	<textarea :class="{ 'bg-grey-100': !whiteBg, 'bg-white': whiteBg }" :id="'i-' + name" :type="type" :value="modelValue" :name="name" @input="e => $emit('update:modelValue', e.target.value)" :placeholder="placeholder" ref="textarea"></textarea>
</template>

<script>
import autosize from 'autosize'

export default {
	props: {
		modelValue: String,
		name: String,
		placeholder: String,
		'white-bg': {
			type: Boolean,
			default: false,
		},
		type: {
			type: String,
			default: 'text'
		}
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
		@apply appearance-none block p-3 border-2 border-grey-300 outline-none w-full rounded leading-normal text-base shadow-none resize-none;
	}
	
	textarea:focus {
		@apply border-grey-500 bg-blue-100;
	}

	.has-error textarea {
		@apply border-red-700 bg-red-100;
	}
</style>
