<!doctype html>
<html lang="en">

<head>
    <title> HackVratsa 2016</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="theme-color" content="#1C8800">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>

<body>
<?php
echo '<table class="table table-hover">
	<thead>
    <tr><th>Лого</th>
    	<th>Име на отбора</th>
  	<th>Категория</th>
  	<th>Технология</th>
  	<th>Мото</th>
  	<th>Виж повече</th></tr>
  </thead>
  <tbody>';
foreach ($all_teams as $key => $value) {
    echo "<tr><td><img src='../uploads/" . $value['team_thumbnail'] . "'  alt='logo' style='width:150px; height:120px;' ></td>";
    echo "<td> $value[team_name]</td>";
    echo "<td> $value[category]</td>";
    echo "<td>$value[technologies]</td>";
    echo "<td>$value[team_moto]</td>";
    echo "<td>" . anchor("registration2/view_team?id=$value[team_id]", 'Виж', array('class' => 'btn btn-info', 'id' => $value['team_id'], 'role' => 'button')) . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";
