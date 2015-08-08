<?php

$enabledFixers = [
    'alias_functions',
    'blankline_after_open_tag',
    'double_arrow_multiline_whitespaces',
    'duplicate_semicolon',
    'empty_return',
    'extra_empty_lines',
    'include',
    'join_function',
    'list_commas',
    'multiline_array_trailing_comma',
    'namespace_no_leading_whitespace',
    'new_with_braces',
    'no_blank_lines_after_class_opening',
    'no_empty_lines_after_phpdocs',
    'object_operator',
    'operators_spaces',
    'phpdoc_align',
    'phpdoc_indent',
    'phpdoc_inline_tag',
    'phpdoc_no_access',
    'phpdoc_no_empty_return',
    'phpdoc_no_package',
    'phpdoc_scalar',
    'phpdoc_separation',
    'phpdoc_to_comment',
    'phpdoc_trim',
    'phpdoc_type_to_var',
    'phpdoc_var_without_name',
    'remove_leading_slash_use',
    'remove_lines_between_uses',
    'return',
    'single_array_no_trailing_comma',
    'single_blank_line_before_namespace',
    'single_quote',
    'spaces_before_semicolon',
    'spaces_cast',
    'standardize_not_equal',
    'ternary_spaces',
    'trim_array_spaces',
    'unalign_double_arrow',
    'unused_use',
    'whitespacy_lines',
];

$enabledContribFixers = [
    'concat_with_spaces',
    'ordered_use',
    'phpdoc_order',
    'short_array_syntax',
    'short_echo_tag',
];

return \Symfony\CS\Config\Config::create()
    ->level(\Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers(array_merge($enabledFixers, $enabledContribFixers))
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->exclude('Symfony/CS/Tests/Fixtures')
            ->in(__DIR__)
    );