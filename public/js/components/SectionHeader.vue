<template>
	<div>
		<h2 class="text-grey-900 text-lg">{{ name }}</h2>
		<p v-if="description" class="text-normal text-muted mt-2 leading-6">{{ description }}</p>
	</div>
</template>

<script>
export default {
	props: ['name', 'description']
}
</script>
