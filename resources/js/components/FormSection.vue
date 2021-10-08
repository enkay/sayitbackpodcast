<template>
	<section class="lg:flex-row lg:max-w-full flex flex-col max-w-lg overflow-hidden" :class="stack">
		<SectionHeader class="lg:w-64 lg:mr-16 flex-grow-0 flex-shrink-0 w-full" :name="name" :description="description"></SectionHeader>
		<div class="lg:mt-0 flex-grow mt-8">
			<div class="lg:max-w-lg max-w-full">
				<slot></slot>
			</div>
		</div>
	</section>
</template>

<script>
import SectionHeader from './SectionHeader'

export default {
	components: {
		SectionHeader,
	},
	props: {
		name: String,
		description: String,
		first: Boolean,
	},
	computed: {
		stack () {
			if (!this.first) return 'pt-8 mt-8 border-t border-gray-300'
		}
	}
}
</script>
