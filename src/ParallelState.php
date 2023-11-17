<?php

declare(strict_types=1);

namespace Serverless\Workflow;

final class ParallelState extends State
{
    public string|null $id = null;

    public string|null $name = null;

    public string|null $type = null;

    public bool|End|null $end = null;

    public StateDataFilter|null $stateDataFilter = null;

    public ParallelStateTimeOut|null $timeouts = null;

    /** @var Branch[]|null */
    public array|null $branches = null;

    public string|null $completionType = null;

    public int|string|null $numCompleted = null;

    /** @var Error[]|null */
    public array|null $onErrors = null;

    public string|Transition|null $transition = null;

    public string|null $compensatedBy = null;

    public bool|null $usedForCompensation = null;

    public Metadata|null $metadata = null;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->completionType ??= 'allOf';
        $this->usedForCompensation ??= false;
        $this->type ??= 'parallel';
    }
}