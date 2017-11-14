<?php

namespace Application\Controller;

return array_merge([],
    include __DIR__.'/interfaces/user.php',
    include __DIR__.'/interfaces/push.php'
);