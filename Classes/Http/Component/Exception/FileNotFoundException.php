<?php
namespace Wwwision\PrivateResources\Http\Component\Exception;

/*                                                                             *
 * This script belongs to the Neos Flow package "Wwwision.PrivateResources".   *
 *                                                                             */

use Neos\Flow\Exception as FlowException;

/**
 * An exception that is thrown if a specified resource/file could not be found
 */
class FileNotFoundException extends FlowException
{

    /**
     * @var integer
     */
    protected $statusCode = 404;
}
