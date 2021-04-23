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
/* btn send */
let btnSub = document.querySelector('.btn-Sub');
let modalSent = document.getElementById('modal-sent');
let boxSent = document.getElementById('sent');
let btnCancel = document.querySelectorAll('.btn-Cancel');

btnCancel.forEach(cancel => {
	cancel.onclick = () => {
		modalSent.classList.add('hidden');
	}
});

btnSub.onclick = () => {
	modalSent.classList.remove('hidden');
}

boxSent.onclick = (event) => {
	event.stopPropagation();
}

modalSent.onclick = () => {
	modalSent.classList.add('hidden');
}

let sented = document.querySelector('.noot1');
sented.onclick = () => {
	if(sented) {
		alert('Are you sure want to Submit ?');
	}
}


/* reload Page*/
let reloadPage = document.querySelector('.item2');

reloadPage.onclick = () => {
	window.location.reload();
}

/* show */
let input = document.querySelectorAll('input');
input.forEach(text => {
	text.onkeyup = () => {
		if(text.value !== '') {
			text.style.backgroundColor = 'rgb(144, 238, 144)';
		} else {
			text.style.backgroundColor = 'rgb(255, 228, 225)';
			}
		}
});



const checkedClass = 'checkedhide';

const noidung1 = $('#noidung1');
$('#text1').on('change', function() {
  	this.value !== '' ? noidung1.addClass(checkedClass) : noidung1.removeClass(checkedClass);
});

const noidung2 = $('#noidung2');
$('#text2').on('change', function() {
  	this.value !== '' ? noidung2.addClass(checkedClass) : noidung2.removeClass(checkedClass);
});

const noidung3 = $('#noidung3');
$('#text3').on('change', function() {
  	this.value !== '' ? noidung3.addClass(checkedClass) : noidung3.removeClass(checkedClass);
});

const noidung4 = $('#noidung4');
$('#text4').on('change', function() {
  	this.value !== '' ? noidung4.addClass(checkedClass) : noidung4.removeClass(checkedClass);
});

const noidung5 = $('#noidung5');
$('#text5').on('change', function() {
  	this.value !== '' ? noidung5.addClass(checkedClass) : noidung5.removeClass(checkedClass);
});

const noidung6 = $('#noidung6');
$('#text6').on('change', function() {
  	this.value !== '' ? noidung6.addClass(checkedClass) : noidung6.removeClass(checkedClass);
});

const noidung7 = $('#noidung7');
$('#text7').on('change', function() {
  	this.value !== '' ? noidung7.addClass(checkedClass) : noidung7.removeClass(checkedClass);
});

const noidung8 = $('#noidung8');
$('#text8').on('change', function() {
  	this.value !== '' ? noidung8.addClass(checkedClass) : noidung8.removeClass(checkedClass);
});

const noidung9 = $('#noidung9');
$('#text9').on('change', function() {
  	this.value !== '' ? noidung9.addClass(checkedClass) : noidung9.removeClass(checkedClass);
});

const noidung10 = $('#noidung10');
$('#text10').on('change', function() {
  	this.value !== '' ? noidung10.addClass(checkedClass) : noidung10.removeClass(checkedClass);
});
