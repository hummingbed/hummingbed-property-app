<?php

namespace App\Enums;

enum QueueEnum
{
    const QUEUED_TASKS = 'queued_tasks';
    const ASSESSMENT_REMINDER = 'assessment_reminder';
    const USER_ACTIVITY_TASKS = 'user_activity_task';
}
