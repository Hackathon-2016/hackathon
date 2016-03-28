<?php
echo '<table class="table table-hover">
	<thead>
	<tr><th>Имена на участник</th>
	<th>Възраст</th>
	<th>Занимание</th></tr>
	</thead>
	<tbody>';
foreach ($one_team as $key => $value) {
    echo "<tr><td> $value[first_name] $value[last_name]</td>";
    echo "<td> $value[age]</td>";
    echo "<td> $value[occupation]</td><tr>";
}
echo "</tbody><table>";
echo anchor("registration2/teams", 'Обратно', array('class' => 'btn btn-info', 'role' => 'button'));
