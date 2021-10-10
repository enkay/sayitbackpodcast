<template>
	<div class="lg:flex lg:items-center overflow-hidden" v-cloak>
		<span class="btn btn-outline btn-file flex items-center justify-center" :class="{ disabled: loading }">
			<svg v-if="loading" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg"> <circle cx="15" cy="15" r="15"> <animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite"/> <animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite"/> </circle> <circle cx="60" cy="15" r="9" fill-opacity="0.3"> <animate attributeName="r" from="9" to="9" begin="0s" dur="0.8s" values="9;15;9" calcMode="linear" repeatCount="indefinite"/> <animate attributeName="fill-opacity" from="0.5" to="0.5" begin="0s" dur="0.8s" values=".5;1;.5" calcMode="linear" repeatCount="indefinite"/> </circle> <circle cx="105" cy="15" r="15"> <animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite"/> <animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite"/> </circle></svg>
			<span :class="{ loading: loading }">{{ buttonText || 'Choose a file' }}</span>
			<input v-show="!loading" type="file" :name="inputName" :accept="inputAccept" @change="fileChanged" :key="reset">
		</span>
		<div class="btn-file-addon lg:ml-4 whitespace-nowrap lg:text-left lg:mt-0 mt-2 text-sm text-center text-black" ref="filename">{{ filename }}</div>
	</div>
</template>

<script>
export default {
	props: ['inputName', 'inputAccept', 'loading', 'reset', 'button-text'],
	data () {
		return {
			filename: 'No photo selected',
			file: null,
		}
	},
	methods: {
		fileChanged (e) {
			const file = e.target.files[0]
			this.$emit('input', file)
			this.file = file
			let filename = e.target.value.replace(/\\/g, '/').replace(/.*\//, '');
			this.filename = filename.length ? filename : 'No photo selected'
		}
	}
}
</script>

<style lang="scss" scoped>
	svg {
		@apply absolute w-5 h-5 mr-2 fill-current;
	}
	.btn-file {
		position: relative;
		overflow: hidden;
		flex-shrink: 0;
	}
	.btn-file input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		min-width: 100%;
		min-height: 100%;
		font-size: 100px;
		text-align: right;
		filter: alpha(opacity=0);
		opacity: 0;
		outline: none;
		background: white;
		cursor: inherit;
		display: block;
	}
	.btn-file-addon {
		overflow: hidden;
		text-overflow: ellipsis;
		flex-shrink: 2;
	}
	.loading {
		color: transparent;
	}
</style>
