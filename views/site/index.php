<?php include ROOT . '/views/layouts/header.php'; ?>



<div class="container-xl">

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col"><a href="#">Имя</a></th>
            <th scope="col"><a href="#">Email</a></th>
            <th scope="col" class="text-cell"><a href="#">Текст</a></th>
            <th scope="col" class="status-cell"><a href="#">Статус</a></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= $task['name']; ?></td>
            <td><?= $task['email']; ?></td>
            <td><?= $task['text']; ?></td>
            <td>
                <input type="checkbox" class="check-task">
                <p class="admin-check">Отредактированно администратором</p>
                <a href="/task/edit/<?= $task['id']; ?>">Редактировать</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <?= $pagination->get(); ?>
</div>




<?php include ROOT . '/views/layouts/footer.php'; ?>