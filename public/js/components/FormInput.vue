<template>
	<input :class="classes" :id="'i-' + name" :type="type" :value="modelValue" :name="name" @input="e => $emit('update:modelValue', e.target.value)" :placeholder="placeholder" maxlength="255">
</template>

<script>
export default {
	props: {
		modelValue: [String, Number],
		name: String,
		placeholder: String,
		whiteBg: {
			type: Boolean,
			default: false,
		},
		type: {
			type: String,
			default: 'text'
		},
		prefix: {
			type: Boolean,
			default: false,
		},
		suffix: {
			type: Boolean,
			default: false,
		},
	},
	computed: {
		classes () {
			return {
				'bg-grey-100': !this.whiteBg,
				'bg-white': this.whiteBg,
				'rounded': !this.prefix && !this.suffix,
				'rounded-r': this.prefix,
				'rounded-l': this.suffix,
			}
		}
	},
}
</script>

<style lang="scss" scoped>
	input {
		@apply appearance-none block p-3 border-2 border-grey-300 outline-none w-full leading-normal text-base shadow-none;
	}
	
	input:focus {
		@apply border-grey-500 bg-blue-100;
	}

	.has-error input {
		@apply border-red-700 bg-red-100;
	}
</style>
