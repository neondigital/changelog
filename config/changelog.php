<?php

return [
    /**
     * Set the path to your logo to display on emails, should be relative to the public directory.
     */
    'logo' => null,

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
