<?php

/*
 * This file is part of the Yosymfony\Spress.
 *
 * (c) YoSymfony <http://github.com/yosymfony>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yosymfony\Spress\Core\ContentManager\Converter;

/**
 * Mirror converter.
 *
 * @author Victor Pueras <vpgugr@gmail.com>
 */
class MirrorConverter implements ConverterInterface
{
    /**
     * Get the converter priority.
     *
     * @return int
     */
    public function getPriority()
    {
        return 0;
    }

    /**
     * If file's extension is support by converter.
     *
     * @param string $extension Extension without dot
     *
     * @return bool
     */
    public function matches($extension)
    {
        return true;
    }

    /**
     * Convert the input data.
     *
     * @param string $input The raw content without Front-matter
     *
     * @return string
     */
    public function convert($input)
    {
        return $input;
    }

    /**
     * The extension of filename result (without dot). E.g: html.
     *
     * @param string $extension File's extension
     *
     * @return string
     */
    public function getOutExtension($extension)
    {
        return $extension;
    }
}
