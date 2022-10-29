<?php

declare(strict_types=1);

namespace App\Helpers;

use App\Enums\ResponseCode;
use ArrayObject;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;

class JsonResponse implements JsonSerializable
{
    /**
     * Data to be returned
     *
     * @var mixed
     */
    private $data = [];

    /**
     * Error message in case process is not success. This will be a string.
     *
     * @var string
     */
    private $message = null;

    /**
     * @var bool
     */
    private $success = false;

    /**
     * @var int
     */
    private $code = null;

    /**
     * Success with data
     *
     * @param  array  $data
     * @param  int    $code
     * @param  null   $message
     * @return \App\Helpers\JsonResponse
     */
    public function success($data = [], int $code = ResponseCode::OK, $message = null)
    {
        if ($this->shouldBeJson($data)) {
            $this->data = $data;
        }

        $this->success = true;
        $this->data    = $data;
        $this->code    = $code;
        $this->message = $message;

        return $this;
    }

    /**
     * Fail with error message
     *
     * @param  string  $error
     * @param  int     $code
     * @param  array   $data
     * @return \App\Helpers\JsonResponse
     */
    public function fail($error = '', int $code = ResponseCode::FAIL, $data = [])
    {
        if ($this->shouldBeJson($data)) {
            $this->data = $data;
        }

        $this->success = false;
        $this->message = $error;
        $this->code    = $code;
        $this->data    = $data;

        return $this;
    }

    /**
     * Determine if the given content should be turned into JSON.
     *
     * @param  mixed  $content
     *
     * @return bool
     */
    private function shouldBeJson($content): bool
    {
        return $content instanceof Arrayable ||
            $content instanceof Jsonable ||
            $content instanceof ArrayObject ||
            $content instanceof JsonSerializable ||
            is_array($content);
    }

    /**
     * Convert the object into something JSON serializable.
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
        return [
            'success' => $this->success,
            'data'    => $this->data,
            'message' => $this->message,
            'code'    => $this->code,
        ];
    }
}
