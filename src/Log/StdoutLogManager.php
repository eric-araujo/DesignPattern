<?php

namespace DesignPattern\Log;

class StdoutLogManager extends LogManager
{
    public function criarLogWritter(): LogWritterInterface
    {
        return new StdoutLogWritter();
    }
}
