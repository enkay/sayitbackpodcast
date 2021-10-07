export default function (object, value) {
	if (!object) return false
	else return object[value] ? true : false
}
