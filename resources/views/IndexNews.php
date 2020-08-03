<?php
?>
<h1>Страница новостей по категории</h1>
<h2><?=$Category?> </h2>
<?php foreach ($IndexNews as $n): ?>
    <div><?=$n ?></div>
<?php endforeach; ?>
<br>
<br>
<a href="<?=route('Welcome')?>">На начальную страницу</a>
