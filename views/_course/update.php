<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
?>
<h1>Edição de curso</h1>

<form name="form" method="post" action="<?php echo Url::to(['course/update', 'id' => $model->id]); ?>">
    <input type="hidden" name="<?php echo \Yii::$app->request->csrfParam; ?>"
           value="<?php echo \Yii::$app->request->csrfToken; ?>">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name"
               placeholder="Digite o nome" value="<?php echo $model->name; ?>">
    </div>
    <div class="form-group">
        <label for="hours">Hours:</label>
        <input type="text" class="form-control" id="hours" name="hours"
               placeholder="Digite a carga horária" value="<?php echo $model->hours; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>