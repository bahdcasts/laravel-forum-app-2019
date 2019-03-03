<?php

namespace LaravelForum;

class Discussion extends Model
{
    public function author()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
      return 'slug';
    }
}
