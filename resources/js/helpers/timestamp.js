const timestamp = (val) => {

    const msPerMinute = 60;
    const msPerHour = msPerMinute * 60;
    const msPerDay = msPerHour * 24;
    const msPerWeeks = msPerDay * 7;

		const current = Math.round(new Date().getTime() / 1000)
    const elapsed = current - val;

		if (elapsed < 30) {
      return 'now';   
    }

    else if (elapsed < msPerMinute) {
      return Math.round(elapsed) + 's';   
    }

    else if (elapsed < msPerHour) {
    	return Math.round(elapsed/msPerMinute) + 'm';   
    }

    else if (elapsed < msPerDay ) {
    	return Math.round(elapsed/msPerHour ) + 'h';   
    }

    else if (elapsed < msPerWeeks ) {
    	return Math.round(elapsed/msPerDay ) + 'd';   
    }

		else {
    	return Math.round(elapsed/msPerWeeks) + 'w';
		}
}

export default timestamp
