<p style="color:#01DF01;"><?php if (isset($result)) { ?>El resultado es: <?php echo $result; } ?></p>
<p style="color:#FF0000;"><?php if (isset($error)) { ?>Error: <?php echo $error; } ?></p>
<p>Sumar o restar números desde -1000 hasta 1000</p>
<?= form_open('calculadora/calcular'); ?>

<div>
<?= form_label('Primer número ', 'first_number'); ?>
<?= form_input('first_number', '', ['id' => 'first_number']); ?>
</div>
<div>
<?= form_label('Segundo número ', 'second_number'); ?>
<?= form_input('second_number', '', ['id' => 'second_number']); ?>
</div>
<?= form_submit('sumar', 'Sumar'); ?>
<?= form_submit('restar', 'Restar'); ?>
<?= form_close(); ?>



