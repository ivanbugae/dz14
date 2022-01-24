<?php

namespace App\Services\History;

class TaskHistoryService
{
    public function add(int $id, array $change)
    {
        $history = new \App\Models\TaskHistory();
        $history->task_id = $id;
        $history->old_value = $change[0];
        $history->new_value = $change[1];
        $history->save();
    }
}
