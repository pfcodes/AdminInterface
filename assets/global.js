'use strict'

$(document).ready(function(){
  // Initialize Semantic-UI Components
  $('.ui.dropdown')
    .dropdown()

  // Form validation
  $('.ui.form')
    .form({
      fields: {
        'fname': 'empty',
        'lname': 'empty',
        'email': 'email',
        'group': 'empty'
      }
    })

  console.log('Made by Phil Fevry for Member First')
})