<?php

namespace VisualSignal\HasUUID;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

trait HasUUID
{
    public static function bootHasUUID()
    {
        static::creating(function(Model $model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}
