/**
 * WordPress Clock JavaScript
 * Handles both analog and digital clock displays
 */

(function() {
	'use strict';
	
	// Initialize clocks when DOM is ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initClocks);
	} else {
		initClocks();
	}
	
	function initClocks() {
		const clocks = document.querySelectorAll('.wpclock-container');
		
		clocks.forEach(function(clock) {
			const type = clock.getAttribute('data-type');
			
			if (type === 'analog') {
				updateAnalogClock(clock);
				setInterval(function() {
					updateAnalogClock(clock);
				}, 1000);
			} else if (type === 'digital') {
				updateDigitalClock(clock);
				setInterval(function() {
					updateDigitalClock(clock);
				}, 1000);
			}
		});
	}
	
	function updateAnalogClock(container) {
		const now = new Date();
		const hours = now.getHours() % 12;
		const minutes = now.getMinutes();
		const seconds = now.getSeconds();
		
		// Calculate angles
		const secondAngle = (seconds * 6); // 360 / 60
		const minuteAngle = (minutes * 6) + (seconds * 0.1); // 360 / 60 + smooth transition
		const hourAngle = (hours * 30) + (minutes * 0.5); // 360 / 12 + smooth transition
		
		// Apply rotations
		const hourHand = container.querySelector('.wpclock-hour-hand');
		const minuteHand = container.querySelector('.wpclock-minute-hand');
		const secondHand = container.querySelector('.wpclock-second-hand');
		
		if (hourHand) {
			hourHand.style.transform = 'rotate(' + hourAngle + 'deg)';
		}
		if (minuteHand) {
			minuteHand.style.transform = 'rotate(' + minuteAngle + 'deg)';
		}
		if (secondHand) {
			secondHand.style.transform = 'rotate(' + secondAngle + 'deg)';
		}
	}
	
	function updateDigitalClock(container) {
		const now = new Date();
		const timeElement = container.querySelector('.wpclock-time');
		const dateElement = container.querySelector('.wpclock-date');
		
		if (timeElement) {
			const hours = String(now.getHours()).padStart(2, '0');
			const minutes = String(now.getMinutes()).padStart(2, '0');
			const seconds = String(now.getSeconds()).padStart(2, '0');
			timeElement.textContent = hours + ':' + minutes + ':' + seconds;
		}
		
		if (dateElement) {
			const options = { 
				weekday: 'long', 
				year: 'numeric', 
				month: 'long', 
				day: 'numeric' 
			};
			dateElement.textContent = now.toLocaleDateString(undefined, options);
		}
	}
})();
