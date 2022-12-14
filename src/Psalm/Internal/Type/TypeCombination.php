<?php

namespace Psalm\Internal\Type;

use Psalm\Type\Atomic;
use Psalm\Type\Atomic\TIterable;
use Psalm\Type\Atomic\TLiteralFloat;
use Psalm\Type\Atomic\TLiteralInt;
use Psalm\Type\Atomic\TLiteralString;
use Psalm\Type\Atomic\TNamedObject;
use Psalm\Type\Atomic\TObject;
use Psalm\Type\Atomic\TTemplateParam;
use Psalm\Type\Union;

/**
 * @internal
 */
class TypeCombination
{
    /** @var array<string, Atomic> */
    public array $value_types = [];

    /** @var array<string, TNamedObject>|null */
    public ?array $named_object_types = [];

    /** @var list<Union> */
    public array $array_type_params = [];

    /** @var array<string, non-empty-list<Union>> */
    public array $builtin_type_params = [];

    /** @var array<string, non-empty-list<Union>> */
    public array $object_type_params = [];

    /** @var array<string, bool> */
    public array $object_static = [];

    /** @var array<int, bool>|null */
    public ?array $array_counts = [];

    /** @var array<int, bool>|null */
    public ?array $array_min_counts = [];

    /** @var bool */
    public bool $array_sometimes_filled = false;

    /** @var bool */
    public bool $array_always_filled = true;

    /** @var array<string|int, Union> */
    public array $objectlike_entries = [];

    /** @var bool */
    public bool $objectlike_sealed = true;

    /** @var ?Union */
    public ?Union $objectlike_key_type = null;

    /** @var ?Union */
    public ?Union $objectlike_value_type = null;

    /** @var bool */
    public bool $empty_mixed = false;

    /** @var bool */
    public bool $non_empty_mixed = false;

    /** @var ?bool */
    public ?bool $mixed_from_loop_isset = null;

    /** @var array<string, TLiteralString>|null */
    public ?array $strings = [];

    /** @var array<string, TLiteralInt>|null */
    public ?array $ints = [];

    /** @var array<string, TLiteralFloat>|null */
    public ?array $floats = [];

    /** @var array<string, TNamedObject|TObject>|null */
    public ?array $class_string_types = [];

    /**
     * @var array<string, TNamedObject|TTemplateParam|TIterable|TObject>
     */
    public array $extra_types = [];

    /** @var ?bool */
    public ?bool $all_arrays_lists = null;

    /** @var ?bool */
    public ?bool $all_arrays_callable = null;

    /** @var ?bool */
    public ?bool $all_arrays_class_string_maps = null;

    /** @var array<string, bool> */
    public array $class_string_map_names = [];

    /** @var array<string, ?TNamedObject> */
    public array $class_string_map_as_types = [];
}
