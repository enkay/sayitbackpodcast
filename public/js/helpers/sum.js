export default function sum(array, property) {
	return array.reduce((a, b) => {
		return a + Number(b[property] || 0)
	}, 0)
}
