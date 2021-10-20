<?php 
$db = [
	'teachers' => [
		[
			'name' => 'Michele',
			'lastname' => 'Papagni'
		],
		[
			'name' => 'Fabio',
			'lastname' => 'Forghieri'
		]
	],
	'pm' => [
		[
			'name' => 'Roberto',
			'lastname' => 'Marazzini'
		],
		[
			'name' => 'Federico',
			'lastname' => 'Pellegrini'
		]
	]
];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="insegnanti">
        <ul>
            <?php foreach($db['teachers'] as $nomi ) { ?>
                <li> <?php echo "{$nomi['name']} {$nomi['lastname']}" ?></li>
            <?php } ?>

        </ul>
    </div>
    <div class="studenti">
        <ul>
            <?php foreach($db['pm'] as $nomi ) { ?>
                <li> <?php echo "{$nomi['name']} {$nomi['lastname']}" ?></li>
            <?php } ?>

        </ul>
    </div>

</body>
</html>