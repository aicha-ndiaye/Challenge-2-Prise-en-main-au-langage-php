<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Projets</title>
</head>
<body>
    <?php
    $projets = [
        [
            'nom' => 'projet1',
            'description' => 'desc1',
            'activites' => [
                [
                    'nom' => 'activiteA',
                    'description' => 'DescriptionA',
                    'date' => '2023-10-05'
                ],
                [
                    'nom' => 'activiteB',
                    'description' => 'DescriptionB',
                    'date' => '2023-10-06'
                ],
            
            ]
        ],
        [
            'nom' => 'projet2',
            'description' => 'desc2',
            'activites' => [
                [
                    'nom' => 'activiteA',
                    'description' => 'DescriptionA',
                    'date' => '2023-10-05'
                ],
                [
                    'nom' => 'activiteB',
                    'description' => 'DescriptionB',
                    'date' => '2023-10-06'
                ],
            
            ]
        ],
        [
            'nom' => 'projet3',
            'description' => 'desc3',
            'activites' => [
                [
                    'nom' => 'activiteA',
                    'description' => 'DescriptionA',
                    'date' => '2023-10-05'
                ],
                [
                    'nom' => 'activiteB',
                    'description' => 'DescriptionB',
                    'date' => '2023-10-06'
                ],
                
            ]
        ]
    ];

    // Parcourons la liste des projets et affichons les informations
    foreach ($projets as $projet) {
        echo "<h1>{$projet['nom']}</h1>";
        echo "<p>{$projet['description']}</p>";
        echo "<h5>nombre dactivite ".count($projet["activites"])."</h5>";
        echo "<h2>Liste des activités :</h2>";
        foreach ($projet['activites'] as $activite) {
            echo "<p>Nom de l'activité : {$activite['nom']}</p>";
            echo "<p>Description de l'activité : {$activite['description']}</p>";
            echo "<p>Date de l'activité : {$activite['date']}</p>";
        }
    }
    ?>
</body>
</html>
