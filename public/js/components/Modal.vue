<template>
	<div v-if="show">
		<div @click.self="$emit('close')" class="bg-grey-500 fixed inset-0 z-30 opacity-75"></div>
		<div @click.self="$emit('close')" class="fixed inset-0 z-30 overflow-scroll">
			<div @click.self="$emit('close')" class="flex items-center justify-center min-h-full">
				<div :class="{ 'p-8': !noPadding, 'sm:max-w-modal': !small, 'sm:max-w-small-modal': small }" class="sm:rounded-lg relative w-full max-w-full bg-white">
					<!-- close button -->
					<button type="button" @click="$emit('close')" class="text-muted hover:text-grey-900 sm:mt-2 sm:mr-2 absolute top-0 right-0 z-50 p-3">
						<SvgIcon class="w-6 h-6" icon="close"></SvgIcon>
					</button>
					<div>
						<slot></slot>
					</div>
				</div>
			</div>
		</div>
	</div>	
</template>

<script>
export default {
	props: {
		show: Boolean,
		noPadding: Boolean,
		small: Boolean,
	},

	mounted () {
		document.addEventListener('keydown', this.escapeListener)
	},
	
	beforeUnmount () {
		document.removeEventListener('keydown', this.escapeListener)
	},

	methods: {
		escapeListener (e) {
			if (e.key == 'Escape') {
				this.$emit('close')
			}
		},
	}
}
</script>
