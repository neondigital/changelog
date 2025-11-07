# Changelog

Provide changelog updates to a select list of email addresses to show what has changed in your app.

## Installation

```
composer require neondigital/changelog
```

### Publish the configuration

```
php artisan vendor:publish 
```

## Usage

### Create a changelog entry

Changelog Markdown files live in the `changelog` directory at the root of your application and should be in named in `YYYY_MM_DD_XXXXXXX`.

```md
---
title: Minor updates to the system
version: 1.0.3
changes: 
    - 
        type: fix
        title: "Documentation: fix typo and phrasing"
    -
        type: improvement
        title: Add clarity for opt-out telemetry during upgrade
    -
        type: fix
        title: Handle soft deleted purchasable on order lines
    -
        type: addition
        title: We added this thing so it's better
---

## What's Changed
* A new feature was added
```

### Sending update emails

You can send changelog notifications to an array of email addresses:

```php
    Changelog::notifyOnRelease(function () : array {
        return ['user1@domain.com', 'user2@domain.com'];
    });
```

You can override the published views in `views/vendor/changelog`.