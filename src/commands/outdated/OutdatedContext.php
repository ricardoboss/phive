<?php declare(strict_types=1);
namespace PharIo\Phive;

use PharIo\Phive\Cli\GeneralContext;

class OutdatedContext extends GeneralContext {

    public function requiresValue(string $option): bool {
        return $option === 'output';
    }

    protected function getKnownOptions(): array {
        return [
            'json' => 'j',
            'xml' => 'x',
            'output' => 'o'
        ];
    }

    protected function getConflictingOptions(): array {
        return [
            ['json' => 'xml']
        ];
    }

}
