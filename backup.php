<?php
// Database configuration
$host = 'localhost'; // Database host
$user = 'root'; // Database username
$password = ''; // Database password
$dbname = 'cloqi'; // Database name

// Backup file name
$backupFile = $dbname . '_' . date("Y-m-d_H-i-s") . '.sql';

// Command to create a backup
$command = "mysqldump --opt -h $host -u $user -p$password $dbname > $backupFile";

// Execute the command
system($command, $output);

// Check if the backup was successful
if ($output === 0) {
    echo "Database backup successful! Backup file: $backupFile";
} else {
    echo "Error during backup!";
}
?>
