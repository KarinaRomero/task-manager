$(document).ready(function () {

  var id = $('#Hid').val();
  var color = $('#Hcolor').val();
  var name = $('#Hname').val();

  if (id != null) {
    $('#AddCategoryModal').modal('toggle');
    $('#AddCategoryModal').modal('show');

    $('#Color').val(color);
    $('#Name').val(name);
    $('.Update').removeClass('hide');
    $('.Add').addClass('hide');
  }

  $('#AddCategoryM').click(function () {
    $('.ADD').removeClass('hide');
    $('.Update').addClass('hide');
  })

  $('#Update').click(function () {
    var id = $('#Hid').val();
    var color = $('#Color').val();
    var name = $('#Name').val();

    $.ajax({
      data: 'Name="' + name + '"&Color="' + color + '"&id="' + id,
      url: '../functions/UpdateCategory.php',
      type: 'get',
      success: function (response) {
          response;
          $('.ContentTableCategory').load("../functions/GetCategories.php");
      }
    });

  })

  $('#Add').click(function () {

    var name = $('#Name').val();
    var color = $('#Color').val();

    $.ajax({
      data: 'Name="' + name + '"&Color="' + color,
      url: '../functions/AddCategory.php',
      type: 'post',
      success: function () {
        $('.ContentTableCategory').load("../functions/GetCategories.php");
      }
    });
  });
});
