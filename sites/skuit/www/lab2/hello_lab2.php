<?
$name = 'Руденко Иван Дмитриевич';
$age = 16;
?>
<title><?= $name?></title>
<?for ($age; $age > 0; $age-- ):?>
    <p> <?= $age?> Статичный текст </p>
    <?endfor;?>
