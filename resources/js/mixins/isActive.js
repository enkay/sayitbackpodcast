export default {
	methods: {
		isActive(...routes) {
			return routes.filter(route => this.$page.activeRouteName.startsWith(route)).length ? 'active' : ''
		},
	}
}
