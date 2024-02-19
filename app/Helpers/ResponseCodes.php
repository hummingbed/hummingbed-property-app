<?php

namespace App\Helpers;

class ResponseCodes
{
    const METHOD_NOT_IMPLEMENTED = 'method_not_implemented';
    const UNEXPECTED_ERROR = 'E001';
    const AUTH_ERROR = 'E002';
    const NOT_FOUND = 400;

    const CLIENT_REGISTRATION_FAILED = "client_registration_failed";
    const USER_CREDENTIAL_REGISTRATION_FAILED = "user_credential_registration_failed";
    const JOB_REQUEST_CREATION_FAILED = "job_request_creation_failed";
    const ENTITY_NOT_FOUND = "entity_not_found";
}
