<?php 
$link = mysqli_connect('localhost', 'root', '', 'duniailkom_ajax');
$query = 'SELECT nama FROM mahasiswa';
$result = mysqli_query($link, $query);

while ($data = mysqli_fetch_array($result)) {
    echo "<option value='{$data['nama']}'>{$data['nama']}</option>";
}
?>