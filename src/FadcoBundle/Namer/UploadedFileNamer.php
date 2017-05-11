<?php

/*
 * This file is part of the Cocorico package.
 *
 * (c) Cocolabs SAS <contact@cocolabs.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FadcoBundle\Namer;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * UploadedFileNamer
 *
 * @author  Eldo Magan <magan.eldo@gmail.com>
 */
class UploadedFileNamer
{

    /**
     * @param  UploadedFile $file
     * @return string
     */

    public function name(UploadedFile $file)
    {
        $name = "";

        if ($extension = $file->getClientOriginalExtension()) {
            $name = sprintf('%s.%s', sha1(uniqid(mt_rand(), true)), $extension);
        }

        return $name;
    }
}
