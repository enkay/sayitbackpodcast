import has from 'lodash/has'

export default {
	methods: {
		hasError (path, errors) {
			if (!errors) errors = this.errors
			return has(errors, path) ? { 'has-error': true } : {}
		}
	}
}
