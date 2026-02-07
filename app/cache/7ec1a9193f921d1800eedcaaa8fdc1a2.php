<h2>Danh sách Color</h2>

<form action="/color/store" method="POST">
    <input name="name" required>
    <button>Thêm</button>
</form>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Tên color</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($colors as $color): ?>
        <tr>
            <td><?= $color['id'] ?></td>
            <td><?= $color['name'] ?></td>
            <td>
                <a href="/color/edit/<?= $color['id'] ?>">Sửa</a>

                <a href="/color/delete/<?= $color['id'] ?>" onclick="return confirm('Xoá?')">Xoá</a>
            </td>
        </tr>
    <?php endforeach ?>
</table><?php /**PATH /var/www/html/app/views/color/index.blade.php ENDPATH**/ ?>