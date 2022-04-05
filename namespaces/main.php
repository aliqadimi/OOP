<?php

# App\Utilities\User;
include "Utilities/User.php";   
# App\Models\User;
include "Models/User.php";

# direct use of namepaces in object creaion
// $model = new App\Models\User();
// $util = new App\Utilities\User();

use App\Utilities\User as UserUtil;
use App\Models\User as UserModel;

$util = new UserUtil();
$model = new UserModel();
$model = new UserModel();
$model = new UserModel();
$model = new UserModel();
$model = new UserModel();
UserUtil::test();