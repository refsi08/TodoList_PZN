<?php

/**
 * Menghapus todo di list
 */
function removeTodoList($todoNumber) : bool
{
    global $todolist;

    // validation
    if ($todoNumber > sizeof($todolist)) {
        return false;
    }

    // menggeser data yang ingin dihapus
    for ($i = $todoNumber; $i < sizeof($todolist); $i++) {
        $todolist[$i] = $todolist[$i + 1];
    }

    unset($todolist[sizeof($todolist)]);

    return true;
}
