<?php

namespace Wistis\LaravelYandexKassa\Events;

use Wistis\LaravelYandexKassa\Requests\YandexKassaRequest;

class BeforeResponse extends YandexKassaEvent
{
    /**
     * @var \Wistis\LaravelYandexKassa\Requests\YandexKassaRequest
     */
    public $request;

    /**
     * @var array
     */
    public $responseParameters;

    /**
     * BeforeResponse constructor.
     * @param \Wistis\LaravelYandexKassa\Requests\YandexKassaRequest $request
     * @param array $responseParameters
     */
    public function __construct(YandexKassaRequest $request, $responseParameters)
    {
        $this->request = $request;
        $this->responseParameters = $responseParameters;
    }
}