<template>
	<transition name="fade">
		<div class="notification md:text-base text-sm shadow-lg"
			v-if="show" :class="type"
			@click="closeNotification">
			<div class="icon" v-if="type == 'success'" dusk="success-notification">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>check-circle-1</title><path d="M11 17c-0.1 0-0.2 0-0.3-0.1l-5-4c-0.2-0.2-0.2-0.5-0.1-0.7C5.7 12.1 5.8 12 6 12c0.1 0 0.2 0 0.3 0.1l4.6 3.7 6.7-9.1C17.7 6.6 17.8 6.5 18 6.5c0.1 0 0.2 0 0.3 0.1 0.1 0.1 0.2 0.2 0.2 0.3s0 0.3-0.1 0.4l-7 9.5c-0.1 0.1-0.2 0.2-0.3 0.2C11 17 11 17 11 17z"/><path d="M12 24c-6.6 0-12-5.4-12-12 0-6.6 5.4-12 12-12 6.6 0 12 5.4 12 12C24 18.6 18.6 24 12 24zM12 1c-6.1 0-11 4.9-11 11s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1z"/></svg>
			</div>
			<div class="icon" v-if="type == 'error'" dusk="error-notification">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>remove-circle</title><path d="M17 17.5c-0.1 0-0.3-0.1-0.4-0.1L12 12.7l-4.6 4.6C7.3 17.4 7.1 17.5 7 17.5s-0.3-0.1-0.4-0.1S6.5 17.1 6.5 17s0.1-0.3 0.1-0.4l4.6-4.6L6.6 7.4C6.6 7.3 6.5 7.1 6.5 7S6.6 6.7 6.6 6.6 6.9 6.5 7 6.5s0.3 0.1 0.4 0.1L12 11.3l4.6-4.6c0.1-0.1 0.2-0.1 0.4-0.1s0.3 0.1 0.4 0.1S17.5 6.9 17.5 7s-0.1 0.3-0.1 0.4l-4.6 4.6 4.6 4.6c0.1 0.1 0.1 0.2 0.1 0.4s-0.1 0.3-0.1 0.4S17.1 17.5 17 17.5z"/><path d="M12 24c-6.6 0-12-5.4-12-12 0-6.6 5.4-12 12-12 6.6 0 12 5.4 12 12C24 18.6 18.6 24 12 24zM12 1c-6.1 0-11 4.9-11 11s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1z"/></svg>
			</div>
			<div class="message">{{ message }}</div>
		</div>
	</transition>
</template>

<script>
import { mapState } from 'vuex'

export default {
	data () {
		return {
			show: false,
			message: '',
			type: '',
			timeout: null,
		}
	},
	computed: {
		...mapState({
			notification: state => state.notify.notification
		})
	},
	watch: {
		notification (val) {
			if (val.delayed) return
			if (val.type) {
				this.showNotification()
			} else {
				this.hideNotification()
			}
		}
	},
	created () {
		if (this.notification.delayed) {
			this.showNotification()
		}
	},
	methods: {
		showNotification () {
			this.message = this.notification.message
			this.type = this.notification.type
			this.show = true
			this.resetTimeout()
		},
		hideNotification () {
			this.show = false
			this.timeout = null
		},
		closeNotification () {
			this.$store.dispatch('closeNotification')
		},
		resetTimeout () {
			if (this.timeout) clearTimeout(this.timeout)
			this.timeout = setTimeout(() => { this.closeNotification() }, 5000);
		}
	}
}
</script>

<style lang="scss" scoped>
	.notification {
		position: fixed;
		top: 0.6rem;
		left: 50%;
		transform: translateX(-50%);
		z-index: 2147483647;
		max-width: 40rem;
		min-width: 16rem;
		border-radius: 0.25rem;

		display: flex;
		line-height: 1.5;
		padding: 1rem 2rem;
		align-items: center;
		justify-content: center;

		@apply bg-white text-white;

		box-shadow: rgba(0,0,0,0.05) 0 0px 10px;
		cursor: default;

		&.success {
			@apply bg-green-700;
		}

		&.error {
			@apply bg-red-700;
		}

		@media(max-width: 40rem) {
			left: 1rem;
			right: 1rem;
			transform: none;
			padding: 1rem;
		}

		.icon {
			width: 24px;
			height: 24px;
			margin-right: 1rem;
			flex-grow: 0;
			flex-shrink: 0;
			fill: currentColor;
		}
	}
</style>
