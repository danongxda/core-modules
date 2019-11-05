<?php return '{
    "name": "omt/blog",
    "description": "",
    "authors": [
        {
            "name": "MaoDK",
            "email": "maodk61@gmail.com"
        }
    ],
    "extra": {
        "laravel": {
            "providers": [
                "Modules\\\Blog\\\Providers\\\BlogServiceProvider"
            ],
            "aliases": {

            }
        }
    },
    "autoload": {
        "psr-4": {
            "Modules\\\\Blog\\\\": ""
        }
    }
}
';
