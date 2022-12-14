<?php

namespace Psalm\Internal\Analyzer\Statements\Expression\Call\Method;

use Psalm\Internal\MethodIdentifier;
use Psalm\Type\Union;

/**
 * @internal
 */
class AtomicMethodCallAnalysisResult
{
    /**
     * @var ?Union
     */
    public ?Union $return_type = null;

    /**
     * @var bool
     */
    public bool $returns_by_ref = false;

    /**
     * @var bool
     */
    public bool $has_mock = false;

    /**
     * @var bool
     */
    public bool $has_valid_method_call_type = false;

    /**
     * @var bool
     */
    public bool $has_mixed_method_call = false;

    /**
     * @var array<string>
     */
    public array $invalid_method_call_types = [];

    /**
     * @var array<string>
     */
    public array $existent_method_ids = [];

    /**
     * @var array<string>
     */
    public array $non_existent_class_method_ids = [];

    /**
     * @var array<string>
     */
    public array $non_existent_interface_method_ids = [];

    /**
     * @var array<string>
     */
    public array $non_existent_magic_method_ids = [];

    /**
     * @var bool
     */
    public bool $check_visibility = true;

    /**
     * @var bool
     */
    public bool $too_many_arguments = true;

    /**
     * @var list<MethodIdentifier>
     */
    public array $too_many_arguments_method_ids = [];

    /**
     * @var bool
     */
    public bool $too_few_arguments = false;

    /**
     * @var list<MethodIdentifier>
     */
    public array $too_few_arguments_method_ids = [];

    /**
     * @var bool
     */
    public bool $can_memoize = false;
}
