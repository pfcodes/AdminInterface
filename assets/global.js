'use strict'

var app = app || {} ;

app = {
  init: function() {
    this.bindActions();
  },

  bindActions: function() {
    // Initialize Semantic-UI Components
    $('.ui.dropdown')
      .dropdown({
        on: 'hover'
      })

    // Form
    $('#new-user-form.ui.form').submit(function(e) {
      return false
    })

    $('#new-user-form.ui.form')
      .form({
        fields: {
          'fname': 'empty',
          'lname': 'empty',
          'email': 'email',
          'group': 'empty'
        }
      })

    // Add user
    $('#new-user-form.ui.form')
      .api({
        url: 'api.php',
        method: 'POST',
        serializeForm: true,
        onComplete: function(response) {
          // TODO: Make more DRY
          if (response.result == 'success') {
            $('.ui.modal .header').html('Success')
            $('.ui.modal .content').html('Added the user to the database. <a href="index.php?action=list">View users</a>')
            $('.ui.modal').modal('show')
            return
          } else if (response.result == 'fail') {
            $('.ui.modal .header').html('Error')
            $('.ui.modal .content').html('Message from server: ' + response.message)
            $('.ui.modal').modal('show')
          } else {
            $('.ui.modal .header').html('Error')
            $('.ui.modal .content').html('An unknown error occured')
            $('.ui.modal').modal('show')
          }
        }
      })

    // Delete User
    $('.api.delete.button')
      .api({
        beforeSend: function(settings) {
          var id = $(this).data().user;

          console.log('Submitting XHR request to delete user with id: ' + id)

          $(this).addClass('disabled')

          // Change Semantic-UI API Prototype settings
          settings.url = 'api.php?id=' + id
          settings.method = 'DELETE'
          return settings
        },

        onComplete: function(response) {
          if (response.result == "success") {
          return $(this).parent().closest('tr').transition('fade')
        } else if (response.result == "fail") {
          $(this).removeClass('disabled')
          $('.ui.mini.modal .header').html('Error')
          $('.ui.mini.modal .content').html('The server said: ' + response.message)
          $('.ui.mini.modal').modal('show')
        } else {
          $(this).removeClass('disabled')
          $('.ui.mini.modal .header').html('Error')
          $('.ui.mini.modal .content').html('An unknown error occured')
          $('.ui.mini.modal').modal('show')
        }
      }
    })
  },
}

$(document).ready(function(){
  app.init()
})