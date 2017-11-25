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
  },

  addUser: function () {

  },

  deleteUser: function(user_id) {
    console.log('Submitting XHR request to delete user with id: ' + user_id);
    $.ajax({
      url: '/api.php',
      type: 'DELETE',
      success: function(result) {
        console.log(result);
      }
    })
  }
}

$(document).ready(function(){
  app.init()
})