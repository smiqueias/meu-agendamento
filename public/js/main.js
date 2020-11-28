/*==================================================================
    [ Caixa de Pesquisa ] */
    
    $(document).ready(function(){
      $("#tableSearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });

/*==================================================================
    [ Alerta Editar e Excluir ] */

const alterar = document.getElementById('alterar');
const excluir = document.querySelectorAll('.excluir');

excluir.forEach(exclude => {

  let op = false;
  exclude.addEventListener('click', e => {
    e.preventDefault()
    swal({
      title: "Excluir Agendamento",
      text: "Tem certeza que deseja excluir este agendamento?",
      icon: "warning",
      buttons: ["Cancelar", "Sim"],
      closeOnClickOutside: false,
      closeOnEsc: false,
      dangerMode: true
    }).then(willDelete => {
      if (willDelete) {
        op = true;
        e.returnValue = op;

        window.location = $(exclude).attr('href');
        return true
      } else {
        op = false;
      }
    })

    if (op) {
      e.returnValue = true
    }
  })
})




(function ($) {
  "use strict";

  /*==================================================================
  [ Focus input ]*/
  $('.input100').each(function () {
    $(this).on('blur', function () {
      if ($(this).val().trim() != "") {
        $(this).addClass('has-val');
      }
      else {
        $(this).removeClass('has-val');
      }
    })
  })


  /*==================================================================
  [ Validate ]*/
  var input = $('.validate-input .input100');

  $('.validate-form').on('submit', function () {
    var check = true;

    for (var i = 0; i < input.length; i++) {
      if (validate(input[i]) == false) {
        showValidate(input[i]);
        check = false;
      }
    }

    return check;
  });


  $('.validate-form .input100').each(function () {
    $(this).focus(function () {
      hideValidate(this);
    });
  });

  function validate(input) {
    if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
      if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
        return false;
      }
    }
    else {
      if ($(input).val().trim() == '') {
        return false;
      }
    }
  }

  function showValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).addClass('alert-validate');
  }

  function hideValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).removeClass('alert-validate');
  }

  /*==================================================================
  [ Show pass ]*/
  var showPass = 0;
  $('.btn-show-pass').on('click', function () {
    if (showPass == 0) {
      $(this).next('input').attr('type', 'text');
      $(this).addClass('active');
      showPass = 1;
    }
    else {
      $(this).next('input').attr('type', 'password');
      $(this).removeClass('active');
      showPass = 0;
    }

  });


})(jQuery);