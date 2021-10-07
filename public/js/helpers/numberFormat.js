function numberFormat(value, decimals=2) {
	value = String(value).replace(/[^\d\.]/g, '')
	let fdot = nthIndex(value, '.', 1)
	if (decimals>0) {
		if (fdot > 0) { value = value.substring(0, fdot+decimals+1) }
		let sdot = nthIndex(value, '.', 2)
		if (sdot > 0) { value = value.substring(0, sdot) }
		return value
	} else {
		return (fdot > 0) ? value.substring(0, fdot) : value
	}
}

function nthIndex(str, pat, n) {
	var L = str.length, i = -1;
	while (n-- && i++ < L) {
		i = str.indexOf(pat, i);
		if (i < 0) break;
	}
	return i;
}

export default numberFormat
