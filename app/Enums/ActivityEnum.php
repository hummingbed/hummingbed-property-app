<?php

namespace App\Enums;

enum ActivityEnum
{
    const ACTIVITY_QUIZ_SUBMITTED = 'Quiz submitted';
    const ACTIVITY_VIDEO_WATCHED = 'Video watched';
    const ACTIVITY_LESSON_DOCUMENT_COMPLETED = 'article/external video completed';
    const ACTIVITY_VIDEO_DOWNLOADED = 'Video downloaded';
    const ACTIVITY_PR_CREATED = 'PR created';
    const ACTIVITY_PR_UPDATED = 'PR updated';
    const ACTIVITY_PR_MERGED = 'PR merged';
}
