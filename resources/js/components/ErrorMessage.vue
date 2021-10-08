<template>
	<div v-if="errors[input] && errors[input].length" class="mt-2 text-sm text-red-700">
		{{ errors[input][0] }}
	</div>
</template>

<script>
export default {
	props: ['errors', 'input']
}
</script>
