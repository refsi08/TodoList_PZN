<?php

/**
 * Menampilkan todo di list
 */

function showTodoList()
{
    global $todolist;

    /**
     * Judul Halaman
     */
    echo "TODOLIST" . PHP_EOL;

    //logic menampilkan data
    foreach ($todolist as $index => $value) {
        echo "$index. $value" . PHP_EOL;
    }
}
