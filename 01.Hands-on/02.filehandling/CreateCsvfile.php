<?php
$mfile = fopen("student.csv", "w") or die("Unable to open file!");
$rows = [
    ['RollNo', 'Name', 'Mark'],
    [101, "Javith", 1200],
    [102, "Raja", 1100],
    [103, "Heer", 1140],
    [104, "Ram", 1130],
    [105, "Vijay", 1170],
];
foreach ($rows as $row) {
    fputcsv($mfile, $row);
}



fclose($mfile);
