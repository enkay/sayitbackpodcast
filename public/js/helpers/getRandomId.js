export default function getRandomId() {
	return new Date().getTime().toString() + Math.round(Math.random() * 1000).toString()
}
