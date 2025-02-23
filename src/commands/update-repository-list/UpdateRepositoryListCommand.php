<?php declare(strict_types=1);
/*
 * This file is part of Phive.
 *
 * Copyright (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de> and contributors
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace PharIo\Phive;

use PharIo\Phive\Cli\Command;

class UpdateRepositoryListCommand implements Command {

    /** @var RemoteSourcesListFileLoader */
    private $loader;

    public function __construct(RemoteSourcesListFileLoader $loader) {
        $this->loader = $loader;
    }

    public function execute(): void {
        $this->loader->downloadFromSource();
    }
}
