<?php

declare(strict_types=1);

namespace Utils\Rector;

use PhpParser\Node;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Param;
use Rector\Core\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class CustomRector extends AbstractRector
{
    /**
     * @return array<class-string<Node>>
     */
    public function getNodeTypes(): array
    {
        // @see https://github.com/rectorphp/php-parser-nodes-docs/
        return [Param::class, Variable::class];
    }

    /**
     * @param Variable|Param $node
     */
    public function refactor(Node $node): ?Node
    {
        return null;
    }

    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Does something',
            [
               new CodeSample('BEFORE', 'AFTER'),
            ]
        );
    }
}
