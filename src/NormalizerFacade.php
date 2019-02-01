<?php

namespace ScheMeZa\Normalizer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ScheMeZa\Normalizer\Skeleton\SkeletonClass
 */
class NormalizerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'normalizer';
    }
}
