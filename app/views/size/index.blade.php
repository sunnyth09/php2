<h2>Danh sách Size</h2>

<form action="/size/create" method="POST">
    <input type="text" name="name" placeholder="Nhập size">
    <button type="submit">Thêm</button>
</form>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Tên size</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($sizes as $size): ?>
        <tr>
            <td><?= $size['id'] ?></td>
            <td><?= $size['name'] ?></td>
            <td>
                <a href="/size/update/<?= $size['id'] ?>">Sửa</a>
                <a href="/size/delete/<?= $size['id'] ?>" onclick="return confirm('Xoá?')">Xoá</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>