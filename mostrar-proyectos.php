<?php
include 'conexion.php';

$sql = "SELECT * FROM proyectos";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$proyectos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section id="proyectos" class="my-5">
    <h1>Proyectos</h1>
    <div class="card-deck">
        <?php foreach ($proyectos as $proyecto): ?>
            <div class="card" data-toggle="collapse" data-target="#proyecto<?= $proyecto['id'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($proyecto['nombre']) ?></h5>
                    <div id="proyecto<?= $proyecto['id'] ?>" class="collapse">
                        <p class="card-text"><?= htmlspecialchars($proyecto['descripcion']) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
