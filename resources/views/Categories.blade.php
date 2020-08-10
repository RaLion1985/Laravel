<?php foreach ($name as $n): ?>
    <div><a href="<?=route('News',['id'=> $n['id']])?>"><?=$n['Category'] ?></a></div>
<?php endforeach; ?>
<br>
<br>
<a href="<?=route('Welcome')?>">На начальную страницу</a>
