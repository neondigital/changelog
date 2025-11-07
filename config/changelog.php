<?php

return [
    /**
     * Set the path where the changelog entries will live.
     */
    'path' => base_path('changelog'),

    /**
     * Whether to queue the notification mailer, if true the default queue will be used
     * otherwise you can set a specific queue here to use instead.
     */
    'queue_mail' => true,
];
