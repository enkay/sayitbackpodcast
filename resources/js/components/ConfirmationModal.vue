<template>
	<Modal :show="confirm.show" @close="close" :form="true" :small="true">
		<div class="mt-8 text-xl text-center">{{ confirm.message }}</div>
		<div class="flex items-center justify-center mt-6">
			<FormButton type="button" class="btn btn-outline" :disabled="loading" @click="close">Cancel</FormButton>
			<FormButton type="button" @click="submit" :class="{ 'btn-danger': confirm.danger }" class="btn ml-2" :loading="loading">{{ confirm.button || 'Confirm' }}</FormButton>
		</div>
	</Modal>
</template>

<script>
import Modal from '@/components/Modal'
import FormButton from '@/components/FormButton'
import { mapState } from 'vuex'

export default {
	components: { Modal, FormButton },

	computed: {
		...mapState({
			confirm: state => state.confirm
		})
	},

	watch: {
		'confirm.show' (val) {
			if (!val) {
				this.loading = false
			}
		}
	},

	data () {
		return {
			loading : false,
		}
	},
	methods: {
		submit () {
			this.loading = true
			this.$store.dispatch('confirmAction', this.confirm.action)
		},
		close () {
			this.loading = false
			this.$store.dispatch('clearConfirm')
		},
	}
}
</script>
