<template>
	<form @submit.prevent="submit">
		<FormGroup label="What's your first name?" :errors="errors" input="first_name">
			<FormInput name="first_name" v-model="form.first_name" placeholder="Andy"></FormInput>
		</FormGroup>
		<FormGroup class="mt-4" label="Where are you from?" :errors="errors" input="location">
			<FormSelect name="location" v-model="form.location" :options="cities"></FormSelect>
		</FormGroup>
		<FormGroup class="mt-4" label="What's your birthday? (MM/DD/YYYY)" :class="birthdayGroupClasses" input="location">
			<div class="flex">
				<FormNumberInput type="number" name="birthday_month" v-model="form.birthday_month" placeholder="MM" maxlength="2"></FormNumberInput>
				<FormNumberInput ref="birthday_day" type="number" class="ml-4" name="birthday_day" v-model="form.birthday_day" placeholder="DD" maxlength="2"></FormNumberInput>
				<FormNumberInput ref="birthday_year" type="number" class="ml-4" name="birthday_year" v-model="form.birthday_year" placeholder="YYYY" maxlength="4"></FormNumberInput>
			</div>
		</FormGroup>
		<FormGroup class="mt-4" label="What do you do for work?" :errors="errors" input="occupation">
			<FormInput name="occupation" v-model="form.occupation" placeholder="Aspiring Dolphin Trainer"></FormInput>
		</FormGroup>
		<FormGroup class="mt-4" label="What's your gender?" :errors="errors" input="gender">
			<FormSelect name="gender" v-model="form.gender" :options="genders"></FormSelect>
		</FormGroup>
		<FormGroup class="mt-4" label="Who do you want to meet?" :errors="errors" input="interested_in">
			<FormSelect name="interested_in" v-model="form.interested_in" :options="interested_in"></FormSelect>
		</FormGroup>
		<FormGroup class="mt-4" label="What's your insta?" :errors="errors" input="instagram" prefix="@" optional>
			<FormInput name="instagram" v-model="form.instagram" placeholder="champagnepapi" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" :prefix="true"></FormInput>
		</FormGroup>
		<FormButton class="w-full mt-8" type="submit" :loading="loading">Submit</FormButton>
	</form>
</template>

<script>
import FormGroup from '@/components/FormGroup'
import FormInput from '@/components/FormInput'
import FormSelect from '@/components/FormSelect'
import FormNumberInput from '@/components/FormNumberInput'
import FormButton from '@/components/FormButton'
import hasError from '@/helpers/hasError'

export default {
	components: {
		FormGroup, FormInput, FormButton,
		FormSelect, FormNumberInput,
		
	},

	data () {
		return {
			form: {
				first_name: '',
				location: 'nyc',
				birthday_month: '',
				birthday_day: '',
				birthday_year: '',
				occupation: '',
				gender: '',
				interested_in: '',
				instagram: '',
			},
			cities: [
				{ code: 'nyc', name: 'New York, NY' },
				{ code: 'la', name: 'Los Angeles, CA' },
				{ code: 'mia', name: 'Miami, FL' },
			],
			genders: [
				{ code: '', name: '' },
				{ code: 'man', name: 'Man' },
				{ code: 'woman', name: 'Woman' },
				{ code: 'other', name: 'Other' },
			],
			interested_in: [
				{ code: '', name: '' },
				{ code: 'men', name: 'Men' },
				{ code: 'women', name: 'Women' },
				{ code: 'all', name: 'Everyone' },
			],
			loading: false,
			errors: {},
			success: false,
		}
	},

	computed: {
		birthdayGroupClasses () {
			return {
				'has-error': hasError('birthday_month', this.errors),
				'has-error': hasError('birthday_day', this.errors),
				'has-error': hasError('birthday_year', this.errors),
			}
		}
	},

	watch: {
		'form.birthday_month' (val) {
			if (val.length==2) this.$refs.birthday_day.$el.focus()
		},
		'form.birthday_day' (val) {
			if (val.length==2) this.$refs.birthday_year.$el.focus()
		}
	},

	created () {
		axios.get('/sanctum/csrf-cookie')
	},

	methods: {
		async submit () {
			this.loading = true
			try {
				await axios.post('/api/onboard', this.form)
				window.location.replace('/welcome/photo')
			} catch (error) {
				this.errors = error.response.data.errors
				this.loading = false
			}
		}
	}
}
</script>
