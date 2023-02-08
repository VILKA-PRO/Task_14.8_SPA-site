<?php
// var_dump($_FILES);

// // var_dump($_FILES['files']);
// echo 'Файл ' . $_FILES['files']['name'][0];
// if (UPLOAD_ERR_OK === $_FILES['files']['error'][0]) {
//     echo 'Файл если ' . $_FILES['files']['name'][0] . ' успешно загружен на сервер!';

// }

//     // путь, где временно хранится загруженный файл
//     $tmpName = $_FILES['files']['tmp_name'][0];

//     // путь для сохранения загруженного файла
//     $savePath = 'uploads/' . $_FILES['files']['name'][0];
    
//     // копируем файл
//     copy($tmpName, $savePath);

/* ?>
<img src="<?= $savePath ?>">
*/

// phpinfo();
session_start();
?>
<a href="index.php">index</a>
<?php
$count = $_SESSION['count'] ?? 0;
$count++;
$_SESSION['count'] = $count;
?>

<br><br>Счетчик <?= $count ?><br><br>
<?php
setcookie(name: 'count', value: 42);


$files = $_FILES['files'];

if(empty($files)) {
    echo 'Файлы не загружены.';
} else {
?>

    <table border="1">
        <tr>
            <th colspan=2>Загруженные файлы</th>
        </tr>
        
    <?php foreach ($files['name'] as $key => $name) { ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $name ?></td>
        </tr>
    <?php } ?>
    </table> 

<?php } 
var_dump($_COOKIE);
?>
