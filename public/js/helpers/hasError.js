export default function hasError (field, errors) {
	return Object.keys(errors).includes(field)
}
