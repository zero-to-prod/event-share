<?php

namespace App\Routing;
enum ApiV1Routes: string
{
    case ping = 'ping';
    case ues = 'ues';
    case ues_show = 'ues/{id}';
}
