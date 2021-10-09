export default {
	mounted () {
		window.addEventListener('keydown', this.quickSave)
	},
	methods: {
		quickSave (e) {
			if (e.keyCode >= 65 && e.keyCode <= 90) {
				if ((e.metaKey || e.ctrlKey) && String.fromCharCode(e.keyCode).toLowerCase() == 's') {
					this.submit()
					e.preventDefault()
					return false
				}
			}
		}
	}
}
