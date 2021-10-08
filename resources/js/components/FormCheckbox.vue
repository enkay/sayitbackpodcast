<template>
	<label
		:for="'i-'+name" 
		class="border-gray-300 hover:border-gray-400 flex items-center p-4 border-2 rounded-lg cursor-pointer"
	>
		<div class="checkbox mr-4">
			<input :id="'i-'+name" type="checkbox" :name="name" :checked="modelValue" @input="e => $emit('update:modelValue', e.target.checked)">
			<span class="selected"></span>
		</div>
		<div class="select-none">
			<slot></slot>
		</div>
	</label>
</template>

<script>
export default {
	props: {
		modelValue: {
			type: Boolean,
			default: false
		},
		name: String,
	},
}
</script>

<style scoped>
.checkbox {
	@apply block relative cursor-pointer h-6 w-6;
}

.checkbox input {
	@apply absolute opacity-0 cursor-pointer h-0 w-0;
}

.selected {
	@apply absolute top-0 left-0 h-6 w-6 bg-gray-300 rounded select-none;
}

.checkbox:hover input ~ .selected {
  @apply bg-gray-400;
}

.checkbox input:checked ~ .selected {
  @apply bg-color;
}

.selected:after {
  content: "";
	@apply absolute hidden;
}

.checkbox input:checked ~ .selected:after {
	@apply block;
}

.checkbox .selected:after {
	@apply left-2 top-1 h-3.5 w-2 border-white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>

