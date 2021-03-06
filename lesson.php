<?php

$file = file_get_contents(__DIR__. '/lesson.phonebook.json');
$data = json_decode($file, true);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>hw5</title>
</head>
<body>

  <table>
    <tr>
      <td>№</td>
      <td>Имя</td>
      <td>Фамилия</td>
      <td>Адрес</td>
      <td>Телефон</td>
    </tr>
    <?php foreach ($data as $phonebook) {?>
      <tr>
        <td><?php echo $phonebook['id']; ?></td>
        <td><?php echo $phonebook['firstname']; ?></td>
        <td><?php echo $phonebook['lastname']; ?></td>
        <td><?php echo $phonebook['address']['city'] . ' ' . $phonebook['address']['street']; ?></td>
        <td><?php echo implode(', ', $phonebook['phonenumber']); ?></td>
      </tr>  
    <?php }?>
  </table>

</body>
</html>