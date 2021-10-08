<template>
	<label
		:for="'i-'+value" 
		:class="{ 'border-color': selected, 'border-gray-300': !selected }" 
		class=" flex items-center p-4 border-2 rounded-lg cursor-pointer"
	>
		<div class="radio mr-4">
			<input :id="'i-'+value" type="radio" :checked="selected" :name="name" :value="modelValue" @input="e => $emit('update:modelValue', value)">
			<span class="selected"></span>
		</div>
		<div>
			<slot></slot>
		</div>
	</label>
</template>

<script>
export default {
	props: {
		value: String,
		modelValue: String,
		name: String,
	},

	computed: {
		selected () {
			return this.modelValue == this.value
		}
	}
}
</script>

<style scoped>
.radio {
	@apply block relative cursor-pointer select-none w-6 h-6;
}

.selected {
	@apply absolute left-0 top-0 w-6 h-6 rounded-full bg-gray-300;
}

.radio:hover input ~ .selected {
	@apply bg-gray-400;
}

.radio input:checked ~ .selected {
  @apply bg-color;
}

.selected:after {
  content: "";
  position: absolute;
  display: none;
}

.radio input:checked ~ .selected:after {
  @apply block;
}

.radio .selected:after {
	@apply left-2 top-2 w-2 h-2 rounded-full bg-white;

}
</style>

