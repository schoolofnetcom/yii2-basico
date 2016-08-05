<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
?>
<h1>Listagem de cursos</h1>

<h3><a href="<?php echo Url::to(['course/create']); ?>">Novo curso</a></h3>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Hours</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($courses as $course): ?>
        <tr>
            <td><?php echo $course->id; ?></td>
            <td><?php echo $course->name; ?></td>
            <td><?php echo $course->hours; ?></td>
            <td>
                <a href="<?php echo Url::to(['course/update', 'id' => $course->id]); ?>">Editar</a> |
                <a href="<?php echo Url::to(['course/delete', 'id' => $course->id]); ?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
