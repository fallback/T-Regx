<?php
namespace CleanRegex;

use CleanRegex\Internal\Pattern;
use SafeRegex\ExceptionFactory;
use SafeRegex\preg;

class SplitPattern
{
    /** @var Pattern */
    private $pattern;

    /** @var string */
    private $subject;

    public function __construct(Pattern $pattern, string $subject)
    {
        $this->pattern = $pattern;
        $this->subject = $subject;
    }

    public function split(): array
    {
        return preg::split($this->pattern->pattern, $this->subject);
    }

    public function separate(): array
    {
        return preg::split($this->pattern->pattern, $this->subject, -1, PREG_SPLIT_DELIM_CAPTURE);
    }
}
