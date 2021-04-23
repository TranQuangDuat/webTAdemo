/*box modal  */
const modal = document.getElementById('modal');
const click = document.getElementById('btn-modal');
const clickExit = document.querySelectorAll('.btn-X');
const clickBox = document.getElementById('box');

click.onclick = () => {
	modal.classList.remove('hidden');
}

clickExit.forEach(click => {
	click.onclick = () => {
		modal.classList.add('hidden');
	}
});

clickBox.onclick = (event) => {
	event.stopPropagation();
}

modal.onclick = () => {
	modal.classList.add('hidden');
}


/* reload Page*/
let reloadPage = document.querySelector('.item2');

reloadPage.onclick = () => {
	window.location.reload();
}
/* check question */

const checkedClass = 'checked';
const navq1 = $('#navq1');
$('#q1').on('change', function() {
  this.value !== 'null' ? navq1.addClass(checkedClass) : navq1.removeClass(checkedClass);
});

const navq2 = $('#navq2');
$('#q2').on('change', function() {
  this.value !== 'null' ? navq2.addClass(checkedClass) : navq2.removeClass(checkedClass);
});

const navq3 = $('#navq3');
$('#q3').on('change', function() {
  this.value !== 'null' ? navq3.addClass(checkedClass) : navq3.removeClass(checkedClass);
});

const navq4 = $('#navq4');
$('#q4').on('change', function() {
  this.value !== 'null' ? navq4.addClass(checkedClass) : navq4.removeClass(checkedClass);
});

const navq5 = $('#navq5');
$('#q5').on('change', function() {
  this.value !== 'null' ? navq5.addClass(checkedClass) : navq5.removeClass(checkedClass);
});

const navq6 = $('#navq6');
$('#q6').on('change', function() {
  this.value !== 'null' ? navq6.addClass(checkedClass) : navq6.removeClass(checkedClass);
});

const navq7 = $('#navq7');
$('#q7').on('change', function() {
  this.value !== 'null' ? navq7.addClass(checkedClass) : navq7.removeClass(checkedClass);
});

const navq8 = $('#navq8');
$('#q8').on('change', function() {
  this.value !== 'null' ? navq8.addClass(checkedClass) : navq8.removeClass(checkedClass);
});

const navq9 = $('#navq9');
$('#q9').on('change', function() {
  this.value !== 'null' ? navq9.addClass(checkedClass) : navq9.removeClass(checkedClass);
});

const navq10 = $('#navq10');
$('#q10').on('change', function() {
  this.value !== 'null' ? navq10.addClass(checkedClass) : navq10.removeClass(checkedClass);
});


