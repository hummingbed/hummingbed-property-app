<?php

namespace App\Enums;

enum StatusEnum
{
    const STATUS_ACTIVE = 'active';
    const STATUS_DONE = 'done';
    const STATUS_PENDING = 'pending';
    const STATUS_MERGED = 'merged';
    const STATUS_SUCCESS = 'success';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_ENROLLED = 'enrolled';
    const STATUS_UNENROLLED = 'unenrolled';
    const STATUS_GRADUATE = 'graduate';
}
