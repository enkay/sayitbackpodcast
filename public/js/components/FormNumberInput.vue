<template>
	<input :class="classes" :id="'i-' + name" type="text" inputmode="decimal" :value="modelValue" :name="name" @input="updateValue" :placeholder="placeholder" maxlength="255">
</template>

<script>
import numberFormat from '@/helpers/numberFormat'
import { nextTick } from 'vue'

export default {
	props: {
		modelValue: [String, Number],
		name: String,
		placeholder: [String, Number],
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
		decimals: {
			type: Number,
			default: 0
		},
		min: Number,
		max: Number,
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
	methods: {
		async updateValue (e) {
			let value = e.target.value
			this.$emit('update:modelValue', value)

			if (value.length>0) {
				// min max
				if (this.min!=undefined && value<this.min) { value = this.min }
				if (this.max!=undefined && value>this.max) { value = this.max }
		
				value = numberFormat(value, this.decimals)
		
				await nextTick()
				this.$emit('update:modelValue', value)
			}
		}
	}
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
