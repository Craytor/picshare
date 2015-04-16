<?php

namespace App\Repositories\Images;

interface ImagesRepositoryInterface
{
    public function save($file);

    public function get($id);

    public function remove($id);

    public function url($id);

    public function encode($id);

    public function decode($id);
}
