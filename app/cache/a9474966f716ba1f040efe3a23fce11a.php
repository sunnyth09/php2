<h2>Sửa Color</h2>

<form action="/color/update/<?= $color['id'] ?>" method="POST">
    <input type="text" name="name" value="<?= $color['name'] ?>" required>
    <button type="submit">Cập nhật</button>
</form>

<a href="/color">Quay lại</a><?php /**PATH /var/www/html/app/views/color/edit.blade.php ENDPATH**/ ?>