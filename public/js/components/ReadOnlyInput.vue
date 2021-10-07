<template>
	<input type="text" :class="{ 'white-bg': whiteBg }" :value="modelValue" :placeholder="placeholder" readonly>
</template>

<script>
export default {
	props: {
		modelValue: String,
		placeholder: String,
		'white-bg': Boolean,
	}
}
</script>

<style lang="scss" scoped>
	input {
		@apply cursor-default bg-grey-100 appearance-none block p-3 border-2 border-grey-300 outline-none w-full rounded leading-normal text-base shadow-none;
	}

	.has-error input {
		@apply border-red-700 bg-red-100;
	}
</style>
