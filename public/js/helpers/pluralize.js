export default function pluralize (str, num, inclusive=true) {
	const string = inclusive ? num + ' ' + str : str
	return (num == 0 || num > 1) ? string + 's' : string
}
