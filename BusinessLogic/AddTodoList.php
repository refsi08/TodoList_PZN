<?php

/**
 * Menambahkan todo di list
 */
function addTodoList(string $todo)
{
    global $todolist; // memanggil variabel global dari model todolist

    $number = sizeof($todolist) + 1; // memeriksa jumlah data array ditambahkan 1
    echo $number;
    $todolist[$number] = $todo; // memasukkan data todo kedalam variabel todolist
}
