<template>
	<div class="checkbox-slider slider-small">
		<label class="cs-slider">
			<input type="checkbox" :id="'i-'+name" :checked="modelValue" @input="e => $emit('update:modelValue', e.target.checked)" />
			<div class="slider"></div>
		</label>
		<label class="text-grey-700 ml-4" :for="'i-'+name">{{ label }}</label>
	</div>
</template>

<script>
export default {
	props: {
		modelValue: Boolean,
		name: String,
		label: String,
		placeholder: String,
		type: {
			type: String,
			default: 'text'
		}
	},
	computed: {
		styles () {
			return (this.modelValue) ? {
				'bg-color': true,
				'border-blue-700': true
			} : {
				'bg-grey-200': true,
				'border-grey-300': true
			};
		}
	}
}
</script>

<style lang="scss" scoped>
.checkbox-slider {
	@apply items-center select-none inline-flex h-10;

	.cs-slider {
		@apply relative inline-block p-0 flex-grow-0 flex-shrink-0 h-10;
		width: 66px !important;
		padding: 0px !important;

		input { display: none; }

		.slider {
			@apply absolute cursor-pointer inset-0 bg-grey-300;
			-webkit-transition: .4s;
			transition: .4s;
	  	border-radius: 40px;
		}

		.slider:before {
			@apply absolute bg-white h-7 w-7;
			content: "";
			left: 6px;
			top: 6px;
			-webkit-transition: .4s;
			transition: .4s;
			border-radius: 50%;
		}

		input:checked + .slider {
			@apply bg-color;
		}

		input:focus + .slider {
			box-shadow: 0 0 1px #3182ce;
		}

		input:checked + .slider:before {
			transform: translateX(26px);
		}
	}
}

.checkbox-slider.slider-small {
	height: 20px;
	
	.cs-label {
		line-height: 20px;
		@apply flex-grow-0 text-left;
	}
	.slider:before {
		height: 14px;
		width: 14px;
		left: 3px;
		top: 3px;
	}
	.cs-slider {
		width: 33px !important;
		padding: 0px !important;
		height: 20px;
	}
	input:checked + .slider:before {
		transform: translateX(13px);
	}
}

.checkbox-slider.disabled {
	@apply opacity-50;
	.slider {
		@apply cursor-default;
	}
}
</style>
