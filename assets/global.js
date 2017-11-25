'use strict'

var app = app || {} ;

app = {
  init: function() {
    console.log('Made from scratch by Phil Fevry for Member First :)')
    this.bindActions();
  },

  bindActions: function() {
    // Initialize Semantic-UI Components
    $('.ui.dropdown')
      .dropdown({
        on: 'hover'
      })

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

    // API Buttons
    $('.api.action').click(function() {
      console.log($(this))
    })
  },

  addUser: function () {

  },

  deleteUser: function() {

  }
}

$(document).ready(function(){
  app.init()
})