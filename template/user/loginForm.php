<?php require(DIR.'/template/header.php');?>

<form action="action=autohorization" method="POST">
  <label>
    <p class="label-txt">ВВЕДИТЕ СВОЙ ЛОГИН</p>
    <input type="text" class="input" name="username">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt">ВВЕДИТЕ СВОЙ ПАРОЛЬ</p>
    <input type="password" class="input" name="password">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit">submit</button>
</form>
<script>


$(document).ready(function(){
$('.input').focus(function(){
  $(this).parent().find(".label-txt").addClass('label-active');
});

$(".input").focusout(function(){
  if ($(this).val() == '') {
    $(this).parent().find(".label-txt").removeClass('label-active');
  };
});

});
</script>
<?php require(DIR.'/template/footer.php');