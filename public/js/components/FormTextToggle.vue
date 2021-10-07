<template>
	<div class="form-group relative" :class="{ 'has-error': hasError(name, errors)}">
		<label class="text-grey-700" :for="'i-'+name">{{ label }}</label>:&nbsp;
		<input ref="input" class="absolute hidden" type="checkbox" :id="'i-' + name" :checked="modelValue" :name="name" @input="e => $emit('update:modelValue', e.target.checked)" :key="name">
		<label :for="'i-'+name" class="link inline-block">{{ value }}</label>
	</div>
</template>

<script>
import FormGroup from '@/components/FormGroup'
import hasError from '@/helpers/hasError'

export default {
	components: {
		FormGroup, 
	},

	props: {
		label: String,
		modelValue: Boolean,
		name: String,
		errors: Object,
		onValue: {
			type: String,
			default: 'Yes'
		},
		offValue: {
			type: String,
			default: 'No'
		}
	},

	computed: {
		value () {
			return this.modelValue ? this.onValue : this.offValue
		}
	},

	methods: {
		hasError,
	}
}
</script>
