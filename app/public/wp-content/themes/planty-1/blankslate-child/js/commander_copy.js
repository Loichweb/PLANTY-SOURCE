(function($){
  /*
  Place your custom JavaScript code in this file.
  It will be loaded on the pages where your form is displayed.
  The file is saved in your theme folder: /wp-content/themes/planty-1/blankslate-child/js/commander_copy.js  */
})(jQuery)
const btnsPlus = document.querySelectorAll('.btn-plus')
const btnsMois = document.querySelectorAll('.btn-mois')

let fraiseNo = 0

btnsPlus.forEach((btn) => {
	btn.addEventListener('click', (e) => {
		e.preventDefault()
		fraiseNo++
		document.querySelector('.fruit-input').value = fraiseNo
	})
})

btnsMois.forEach((btn) => {
	btn.addEventListener('click', (e) => {
		e.preventDefault()
		fraiseNo--
		document.querySelector('.fruit-input').value = fraiseNo
	})
})


      