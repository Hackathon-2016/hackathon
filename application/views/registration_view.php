<?php
echo form_open_multipart('registration/register_team');

echo form_label('Име на екип :', 'team_name');
echo form_input('team_name', set_value('team_name'));
echo form_error('team_name', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Категория :', 'category');
?>
<select name="category">
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
echo "</br>";

echo form_label('Технологии :');
?>
<select name="technology">
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
echo "</br>";

echo form_label('Мото на Екипа :');
echo form_input('team_moto', set_value('team_moto'));
echo "</br>";
?>
<div><h1>Участници(от 2 до 5):</h1></div>
<?php
echo "<h3>Участник 1 (Капитан)</h3>";
echo form_label('Име :', 'first_name1');
echo form_input('first_name1', set_value('first_name1'));
echo form_error('first_name1', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Фамилия :', 'last_name1');
echo form_input('last_name1', set_value('last_name1'));
echo form_error('last_name1', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('E-Mail :', 'email1');
echo form_input('email1', set_value('email1'));
echo form_error('email1', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Възраст :', 'age1');
echo form_input('age1', set_value('age1'));
echo form_error('age1', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Занимание :');
?>
<select name="occupation1">
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
echo form_error('occupation1', '<div class="error" style="color: red;">', '</div>');
echo "</br>";
echo form_label('Размер Тениска :', 'tshirt1');
?>
<select name="tshirt1">
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
echo form_error('tshirt1', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo "<h3>Участник 2</h3>";
echo form_label('Име :', 'first_name2');
echo form_input('first_name2', set_value('first_name2'));
echo form_error('first_name2', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Фамилия :', 'last_name2');
echo form_input('last_name2', set_value('last_name2'));
echo form_error('last_name2', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('E-Mail :', 'email');
echo form_input('email2', set_value('email2'));
echo form_error('email2', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Възраст :', 'age2');
echo form_input('age2', set_value('age2'));
echo form_error('age2', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Занимание :');
?>
<select name="occupation2">
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
echo form_error('occupation2', '<div class="error" style="color: red;">', '</div>');
echo "</br>";
echo form_label('Размер Тениска :', 'tshirt2');
?>
<select name="tshirt2">
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
echo form_error('tshirt2', '<div class="error" style="color: red;">', '</div>');
echo "</br>";
/*
echo "<h3>Участник 3</h3>";
echo form_label('Име :', 'first_name3');
echo form_input('first_name3', set_value('first_name3'));
echo form_error('first_name3', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Фамилия :', 'last_name3');
echo form_input('last_name3', set_value('last_name3'));
echo form_error('last_name3', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('E-Mail :', 'email3');
echo form_input('email3', set_value('email3'));
echo form_error('email3', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Възраст :', 'age3');
echo form_input('age3', set_value('age3'));
echo form_error('age3', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Занимание :');
?>
<select name="occupation3">
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
echo form_error('occupation3', '<div class="error" style="color: red;">', '</div>');
echo "</br>";
echo form_label('Размер Тениска :', 'tshirt4');
?>
<select name="tshirt3">
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
echo form_error('tshirt3', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo "<h3>Участник 4</h3>";
echo form_label('Име :', 'first_name4');
echo form_input('first_name4', set_value('first_name4'));
echo form_error('first_name4', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Фамилия :', 'last_name4');
echo form_input('last_name4', set_value('last_name4'));
echo form_error('last_name4', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('E-Mail :', 'email4');
echo form_input('email4', set_value('email4'));
echo form_error('email4', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Възраст :', 'age4');
echo form_input('age4', set_value('age4'));
echo form_error('age4', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Занимание :');
?>
<select name="occupation4">
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
echo form_error('occupation4', '<div class="error" style="color: red;">', '</div>');
echo "</br>";
echo form_label('Размер Тениска :', 'tshirt4');
?>
<select name="tshirt4">
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
echo form_error('tshirt4', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo "<h3>Участник 5</h3>";
echo form_input(array('name' => 'activate', 'type' => 'checkbox', 'id' => 'yourBox'));
echo form_label('Име :', 'first_name5');
echo form_input('first_name5', set_value('first_name'));
echo form_error('first_name5', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Фамилия :', 'last_name5');
echo form_input('last_name5', set_value('last_name5'));
echo form_error('last_name5', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('E-Mail :', 'email5');
echo form_input('email5', set_value('email5'));
echo form_error('email5', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Възраст :', 'age5');
echo form_input('age5', set_value('age5'));
echo form_error('age5', '<div class="error" style="color: red;">', '</div>');
echo "</br>";

echo form_label('Занимание :');
?>
<select name="occupation5">
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
echo form_error('occupation5', '<div class="error" style="color: red;">', '</div>');
echo "</br>";
echo form_label('Размер Тениска :', 'tshirt5');
?>
<select name="tshirt5">
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
echo form_error('tshirt5', '<div class="error" style="color: red;">', '</div>');
echo "</br>";
 */
echo form_label('Технология или изобретение от 21-ви век, която ви вдъхновява (по желание): ');
echo "</br>";
echo form_textarea('inspiration', set_value('inspiration'), array('placeholder' => 'Facebook, stackoverflow, Tesla motors, wikipedia, YouTube...s'));
echo "</br>";

echo form_label('Добавете Лого: ', 'upload');
echo form_upload();
echo "<br/>";

echo form_submit(array('id' => 'submit', 'value' => 'Запиши отбора'));
echo form_close();
?>
<script>
	document.getElementById('yourBox').onchange = function() {
    document.getElementById('yourText').disabled = !this.checked;
};
</script>