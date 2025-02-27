
$(function () {
  $('#cep').mask('00000-000');
  $('#cpf').mask('000.000.000-00');
  $('#date_of_birth').mask('00.00.0000');
  $('#number').mask('00000000000');
  $("#plate").mask("1111111");
  $("#price").mask("00,000,000,000,000.00");
  $('#release_date').mask('00.00.0000');
})


//Completar Cidade e Estado pelo CEP

$(function () {
  $('#cep').on('keyup', function (a) {
    if ($(this).val().length == 9) {
      $.ajax("http://viacep.com.br/ws/" + $(this).val().replace("-", "")
        + "/json/", {
        success: function (res) {
          $("[name=city]").val(res.localidade);
          $("[name=state]").val(res.uf);
        }
      });
    }
  });
});

