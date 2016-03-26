
<div style="text-align: center;"><h2>Екип:</h2></div>
<?php
echo validation_errors();
echo form_open_multipart('registration/register_team', array('class' => 'form-horizontal'));
?>
<div class="form-group row">
<div class="col-md-4 col-md-offset-4">
<?php
echo form_label('Име на екип :', 'team_name');
echo form_input('team_name', set_value('team_name'), array('class' => 'form-control'));
echo form_error('team_name', '<div class="error" style="color: red;">', '</div>');

echo form_label('Категория :', 'category');
?>
<select name="category" class="form-control">
<option value=""></option>
<?php
foreach ($category as $each) {
    ?>

    <option value="<?=$each['category']?>"><?=$each['category']?></option>
    <?php
}
?>
</select>
<?php
echo form_error('category', '<div class="error" style="color: red;">', '</div>');

echo form_label('Технологии :');
?>
<select name="technology" class="form-control">
<option value=""></option>
<?php
foreach ($technology as $each) {
    ?>
    <option value="<?=$each['technology']?>"><?=$each['technology']?></option>
    <?php
}
?>
</select>
<?php
echo form_error('technology', '<div class="error" style="color: red;">', '</div>');

echo form_label('Мото на Екипа :');
echo form_input('team_moto', set_value('team_moto'), array('class' => 'form-control'));
?>
</div>
</div>
<div style="text-align: center;"><h2>Участници(от 2 до 5):</h2></div>
<div class="form-group row">
<div class="col-md-5 col-md-offset-1">
<?php
echo "<h3>Участник 1 (Капитан)</h3>";
echo form_label('Име :', "first_name[0]");
echo form_input("first_name[0]", set_value("first_name[0]"), array('class' => 'form-control'));
echo form_error("first_name[0]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Фамилия :', "last_name[0]");
echo form_input("last_name[0]", set_value("last_name[0]"), array('class' => 'form-control'));
echo form_error("last_name[0]", '<div class="error" style="color: red;">', '</div>');

echo form_label('E-Mail :', "email[0]");
echo form_input("email[0]", set_value("email[0]"), array('class' => 'form-control'));
echo form_error("email[0]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Възраст :', "age[0]");
echo form_input("age[0]", set_value("age[0]"), array('class' => 'form-control'));
echo form_error("age[0]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Занимание :');
?>
<select name="occupation[0]" class="form-control">
<option value=""></option>
<?php
foreach ($occupation as $each) {
    ?>
    <option value="<?=$each['occupation']?>"><?=$each['occupation']?></option>
    <?php
}
?>
</select>
<?php
echo form_error("occupation[0]", '<div class="error" style="color: red;">', '</div>');
echo form_label('Размер Тениска :', "tshirt[0]");
?>
<select name="tshirt[0]" class="form-control">
<option value=""></option>
<?php
foreach ($tshirt as $each) {
    ?>
    <option value="<?=$each['tshirt_size']?>"><?=$each['tshirt_size']?></option>
    <?php
}
?>
</select>
<?php
echo form_error("tshirt[0]", '<div class="error" style="color: red;">', '</div>');
?>
</div>
<div class="col-md-5">
<?php
echo "<h3>Участник 2</h3>";
echo form_label('Име :', "first_name[1]");
echo form_input("first_name[1]", set_value("first_name[1]"), array('class' => 'form-control'));
echo form_error("first_name[1]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Фамилия :', "last_name[1]");
echo form_input("last_name[1]", set_value("last_name[1]"), array('class' => 'form-control'));
echo form_error("last_name[1]", '<div class="error" style="color: red;">', '</div>');

echo form_label('E-Mail :', "email[1]");
echo form_input("email[1]", set_value("email[1]"), array('class' => 'form-control'));
echo form_error("email[1]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Възраст :', "age[1]");
echo form_input("age[1]", set_value("age[1]"), array('class' => 'form-control'));
echo form_error("age[1]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Занимание :');
?>
<select name="occupation[1]" class="form-control">
<option value=""></option>
<?php
foreach ($occupation as $each) {
    ?>
    <option value="<?=$each['occupation']?>"><?=$each['occupation']?></option>
    <?php
}
?>
</select>
<?php
echo form_error("occupation[1]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Размер Тениска :', "tshirt[1]");
?>
<select name="tshirt[1]" class="form-control">
<option value=""></option>
<?php
foreach ($tshirt as $each) {
    ?>
    <option value="<?=$each['tshirt_size']?>"><?=$each['tshirt_size']?></option>
    <?php
}
?>
</select>
<?php
echo form_error("tshirt[1]", '<div class="error" style="color: red;">', '</div>');
?>
</div>
</div>
<div class="form-group row">
<div class="col-md-5 col-md-offset-1">
<div class="participant hidden">
<?php
echo "<h3>Участник 3 </h3>";
echo form_label('Име :', "first_name[2]");
echo form_input("first_name[2]", set_value("first_name[2]"), array('class' => 'form-control'));
echo form_error("first_name[2]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Фамилия :', "last_name[2]");
echo form_input("last_name[2]", set_value("last_name[2]"), array('class' => 'form-control'));
echo form_error("last_name[2]", '<div class="error" style="color: red;">', '</div>');

echo form_label('E-Mail :', "email[2]");
echo form_input("email[2]", set_value("email[2]"), array('class' => 'form-control'));
echo form_error("email[2]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Възраст :', "age[2]");
echo form_input("age[2]", set_value("age[2]"), array('class' => 'form-control'));
echo form_error("age[2]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Занимание :');
?>
<select name="occupation[2]" class="form-control">
<option value=""></option>
<?php
foreach ($occupation as $each) {
    ?>
    <option value="<?=$each['occupation']?>"><?=$each['occupation']?></option>
    <?php
}
?>
</select>
<?php
echo form_error("occupation[2]", '<div class="error" style="color: red;">', '</div>');
echo form_label('Размер Тениска :', "tshirt[2]");
?>
<select name="tshirt[2]" class="form-control">
<option value=""></option>
<?php
foreach ($tshirt as $each) {
    ?>
    <option value="<?=$each['tshirt_size']?>"><?=$each['tshirt_size']?></option>
    <?php
}
?>
</select>
<?php
echo form_error("tshirt[2]", '<div class="error" style="color: red;">', '</div>');
?>
</div>
</div>
<div class="col-md-5">
<div class="participant hidden">
<?php
echo "<h3>Участник 4</h3>";
echo form_label('Име :', "first_name[3]");
echo form_input("first_name[3]", set_value("first_name[3]"), array('class' => 'form-control'));
echo form_error("first_name[3]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Фамилия :', "last_name[3]");
echo form_input("last_name[3]", set_value("last_name[3]"), array('class' => 'form-control'));
echo form_error("last_name[3]", '<div class="error" style="color: red;">', '</div>');

echo form_label('E-Mail :', "email[3]");
echo form_input("email[3]", set_value("email[3]"), array('class' => 'form-control'));
echo form_error("email[3]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Възраст :', "age[3]");
echo form_input("age[3]", set_value("age[3]"), array('class' => 'form-control'));
echo form_error("age[3]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Занимание :');
?>
<select name="occupation[3]" class="form-control">
<option value=""></option>
<?php
foreach ($occupation as $each) {
    ?>
    <option value="<?=$each['occupation']?>"><?=$each['occupation']?></option>
    <?php
}
?>
</select>
<?php
echo form_error("occupation[3]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Размер Тениска :', "tshirt[3]");
?>
<select name="tshirt[3]" class="form-control">
<option value=""></option>
<?php
foreach ($tshirt as $each) {
    ?>
    <option value="<?=$each['tshirt_size']?>"><?=$each['tshirt_size']?></option>
    <?php
}
?>
</select>
<?php
echo form_error("tshirt[3]", '<div class="error" style="color: red;">', '</div>');
?>
</div>
</div>
</div>
<div class="form-group row">
<div class="col-md-5 col-md-offset-1 participant hidden">
<?php
echo "<h3>Участник 5 </h3>";
echo form_label('Име :', "first_name[4]");
echo form_input("first_name[4]", set_value("first_name[4]"), array('class' => 'form-control'));
echo form_error("first_name[4]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Фамилия :', "last_name[4]");
echo form_input("last_name[4]", set_value("last_name[4]"), array('class' => 'form-control'));
echo form_error("last_name[4]", '<div class="error" style="color: red;">', '</div>');

echo form_label('E-Mail :', "email[4]");
echo form_input("email[4]", set_value("email[4]"), array('class' => 'form-control'));
echo form_error("email[4]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Възраст :', "age[4]");
echo form_input("age[4]", set_value("age[4]"), array('class' => 'form-control'));
echo form_error("age[4]", '<div class="error" style="color: red;">', '</div>');

echo form_label('Занимание :');
?>
<select name="occupation[4]" class="form-control">
<option value=""></option>
<?php
foreach ($occupation as $each) {
    ?>
    <option value="<?=$each['occupation']?>"><?=$each['occupation']?></option>
    <?php
}
?>
</select>
<?php
echo form_error("occupation[4]", '<div class="error" style="color: red;">', '</div>');
echo form_label('Размер Тениска :', "tshirt[4]");
?>
<select name="tshirt[4]" class="form-control">
<option value=""></option>
<?php
foreach ($tshirt as $each) {
    ?>
    <option value="<?=$each['tshirt_size']?>"><?=$each['tshirt_size']?></option>
    <?php
}
?>
</select>
<?php
echo form_error("tshirt[4]", '<div class="error" style="color: red;">', '</div>');
?>
</div>
<button class="btn btn-default add-participant col-md-offset-2">
  Добави Участник
</button>
<div class="col-md-5 col-md-offset-1">
<?php

echo form_label('Технология или изобретение от 21-ви век, която ви вдъхновява (по желание): ');

echo form_textarea('inspiration', set_value('inspiration'), array('class' => 'form-control', 'placeholder' => 'Facebook, stackoverflow, Tesla motors, wikipedia, YouTube...'));

echo form_label('Добавете Лого: ', 'upload');
echo form_upload();
echo "<br/>";

echo form_submit(array('class' => 'btn btn-default', 'value' => 'Запиши отбора'));
echo form_close();
?>
</div>
<script>
    $(document).on("keypress", ":input:not(textarea)", function(event) {
    if (event.keyCode == 13) {
        event.preventDefault();
    }
});
</script>
<script>
$(".participant:gt(1)").addClass("hidden");
$(".add-participant").on("click", function() {
    event.preventDefault();
    $(".participant.hidden").first().removeClass("hidden");
  if(!$(".participant.hidden").length) {
    $(this).hide();
  }
});
</script>
