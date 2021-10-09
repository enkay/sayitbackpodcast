import isEmpty from 'lodash/isEmpty'

export default {
	props: [ 'pageLoad' ],
	watch: {
		pageLoad () {
			if (this.$page.flash.error) this.notifyError(this.$page.flash.error)
			else if (!isEmpty(this.errors)) this.notifyError()
			else if (this.$page.flash.success) this.notifySuccess(this.$page.flash.success)
		}
	},
	methods: {
		notifySuccess(message, delayed) {
			if (delayed) {
				localStorage.setItem('notification', JSON.stringify({
					message: message,
					type: 'success',
					date: Math.round(Date.now() / 1000)
				}))
			}
			else {
				window.events.$emit('notify', {
					message: message,
					type: 'success'
				})
			}
		},
		notifyError(message, delayed) {
			message = message || 'Please fix the errors below and try again.'
			
			if (delayed) {
				localStorage.setItem('notification', JSON.stringify({
					message: message,
					type: 'error',
					date: Math.round(Date.now() / 1000)
				}))
			}
			else {
				window.events.$emit('notify', {
					message: message,
					type: 'error'
				})
			}
		},
		checkNotifications () {
			if (localStorage.getItem('notification') !== null) {
				let notification = JSON.parse(localStorage.getItem('notification'))
				if (Math.round(Date.now() / 1000) < (notification.date + 10))
				{
					if (notification.type == 'success')
						this.notifySuccess(notification.message, false)
					else if (notification.type == 'error')
						this.notifyError(notification.message, false)
				}
				localStorage.removeItem('notification')
			}
		}
	}
}
