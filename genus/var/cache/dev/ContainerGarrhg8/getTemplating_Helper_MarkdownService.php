<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.helper.markdown' shared service.

return $this->services['templating.helper.markdown'] = new \Knp\Bundle\MarkdownBundle\Helper\MarkdownHelper(${($_ = isset($this->services['markdown.parser.parser_manager']) ? $this->services['markdown.parser.parser_manager'] : $this->getMarkdown_Parser_ParserManagerService()) && false ?: '_'});
