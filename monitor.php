<?php
// Path file yang akan dimonitor
$file_to_protect = '/home/he109633/aislastur.com/index.php';
$backup_file = '/home/he109633/aislastur.com/backup/index.php';

// Fungsi untuk mengembalikan file jika dihapus
function restore_file($file, $backup) {
    if (!file_exists($file)) {
        copy($backup, $file);
        echo "Files have been restored.\n";
    } else {
        echo "Files are still there.\n";
    }
}

// Memeriksa apakah file dihapus, jika iya kembalikan dari backup
restore_file($file_to_protect, $backup_file);
?>
