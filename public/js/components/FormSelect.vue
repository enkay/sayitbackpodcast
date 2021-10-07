<template>
	<select :class="{ 'bg-grey-100': !whiteBg, 'bg-white': whiteBg }" :id="'i-' + name" :value="modelValue" :name="name" @change="e => $emit('update:modelValue', e.target.value)" ref="select" :key="modelValue">
		<option v-if="optionDefault.length" value="">{{ optionDefault }}</option>
		<option v-for="option in options" :key="option[optionValue]" :value="option[optionValue]">{{ option[optionName] }}</option>
	</select>
</template>

<script>
export default {
	props: {
		modelValue: String,
		name: String,
		whiteBg: {
			type: Boolean,
			default: false,
		},
		options: Array,
		optionValue: {
			type: String,
			default: 'code',
		},
		optionName: {
			type: String,
			default: 'name'
		},
		optionDefault: {
			type: String,
			default: ''
		},
	},
	data () {
		return {
			internalValue: this.modelValue
		}
	}
}
</script>

<style lang="scss" scoped>
	select {
		@apply appearance-none block p-3 border-2 border-grey-300 outline-none w-full rounded leading-normal text-base shadow-none;
		background-image: url("data:image/svg+xml;utf8,<svg class='fill-current' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
		background-size: 1.75rem;
		background-position: calc(100% - 0.75em) center;
		background-repeat: no-repeat;
	}

	select.white-bg,
	select.white-bg:focus {
		@apply bg-white;
	}
	
	select:focus {
		@apply border-grey-500 bg-blue-100 outline-none;
	}

	.has-error select {
		@apply border-red-700 bg-red-100;
	}
</style>
