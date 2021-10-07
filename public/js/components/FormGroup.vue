<template>
	<div class="form-group" :class="{ 'has-error': hasError(input, errors)}">
		<label :class="{ 'flex': !folded, 'inline-flex': folded }" class="text-grey-700 items-center" :for="`i-${input}`">
			{{ label }}
			<span v-if="optional&&!folded" class="text-grey-500 text-sm"><span class="text-grey-300">&nbsp;/&nbsp;</span>optional</span>
		</label>
		<div v-show="!folded" :class="{ 'flex': prefix||suffix }" class="mt-2">
			<span v-if="prefix" class="bg-grey-300 border-grey-300 text-muted px-2 py-3 border-2 rounded-l">{{ prefix }}</span>
			<slot></slot>
			<span v-if="suffix" class="bg-grey-300 border-grey-300 text-muted px-2 py-3 border-2 rounded-r">{{ suffix }}</span>
		</div>
		<div v-show="folded" class="inline">
			<span>: </span>
			<button @click.prevent="folded=false" type="button" class="link">{{ foldValue }}</button>
		</div>
		<ErrorMessage :errors="errors" :input="input"></ErrorMessage>
	</div>
</template>

<script>
// import hasError from '@/mixins/hasError'
import ErrorMessage from '@/components/ErrorMessage'
import hasError from '@/helpers/hasError'

export default {
	// mixins: [hasError],
	components: { ErrorMessage },
	props: {
		input: {
			type: String,
			default : '',
		},
		label: String,
		errors: {
			type: Object,
			default: {}
		},
		optional: Boolean,
		fold: Boolean,
		foldValue: {
			type: String,
			default: 'Add',
		},
		prefix: String,
		suffix: String,
	},
	data () {
		return {
			folded: this.fold
		}
	},
	methods: {
		hasError
	}
}
</script>

<style lang="scss" scoped>
	.has-error label {
		@apply text-red-700;
	}
</style>
