const diffInDays = (val, current) => {
	const elapsed = val - current;
	const msPerDay = 60 * 60 * 24 * 1000;
	return Math.floor(elapsed/msPerDay)
}

export default diffInDays
