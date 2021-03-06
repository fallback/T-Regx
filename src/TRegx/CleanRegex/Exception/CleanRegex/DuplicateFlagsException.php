<?php
namespace TRegx\CleanRegex\Exception\CleanRegex;

class DuplicateFlagsException extends CleanRegexException
{
    public static function forFlag(string $flag, string $flags): DuplicateFlagsException
    {
        return new self("Regular expression flag: '$flag' is duplicated in '$flags'");
    }
}
