<template>
	<input :class="classes" :id="'i-' + name" type="date" :value="modelValue" :name="name" @input="e => $emit('update:modelValue', e.target.value)" :placeholder="placeholder" maxlength="255">
</template>

<script>
export default {
	props: {
		modelValue: [String],
		name: String,
		placeholder: String,
		whiteBg: {
			type: Boolean,
			default: false,
		},
	},
	computed: {
		classes () {
			return {
				'bg-gray-100': !this.whiteBg,
				'bg-white': this.whiteBg,
			}
		}
	}
}
</script>

<style lang="scss" scoped>
	input {
		@apply appearance-none block p-3 border-2 border-gray-300 outline-none w-full leading-normal text-base shadow-none;
		height: 3.25rem;
	}

	input.white-bg,
	input.white-bg:focus {
		@apply bg-white;
	}
	
	input:focus {
		@apply border-gray-500 bg-blue-100;
	}

	.has-error input {
		@apply border-red-700 bg-red-100;
	}
</style>
