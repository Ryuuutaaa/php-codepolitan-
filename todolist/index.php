<?php
$todos = [];
$file = file_get_contents("todo.txt");

if ($file) {
    $todos = unserialize($file);
}

if (isset($_POST["todo"])) {
    $data = $_POST["todo"];
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];

    file_put_contents("todo.txt", serialize($todos));
}

if (isset($_POST['delete'])) {
    $index = $_POST['delete'];
    unset($todos[$index]);
    $todos = array_values($todos);
    file_put_contents("todo.txt", serialize($todos));
}

if (isset($_POST['status'])) {
    $index = $_POST['index'];
    $todos[$index]['status'] = !$todos[$index]['status'];
    file_put_contents("todo.txt", serialize($todos));
}
?>

<h1>Todo List</h1>
<form method="post">
    <label for="">Apa Kegiatan mu hari ini</label>
    <input type="text" name="todo" required>
    <button type="submit">Simpan</button>
</form>

<ul>
    <?php foreach ($todos as $index => $item): ?>
        <li>
            <form method="post" style="display:inline;">
                <input type="hidden" name="index" value="<?php echo $index; ?>">
                <input type="checkbox" name="status" <?php echo $item['status'] ? 'checked' : ''; ?> onchange="this.form.submit()">
                <label style="<?php echo $item['status'] ? 'text-decoration: line-through;' : ''; ?>">
                    <?php echo htmlspecialchars($item['todo']); ?>
                </label>
            </form>
            <form method="post" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                <input type="hidden" name="delete" value="<?php echo $index; ?>">
                <button type="submit" style="border:none; background:none; color:red; cursor:pointer;">hapus</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>