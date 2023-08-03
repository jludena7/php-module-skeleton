### PHP Module Skeleton

Example of how to autoload files with psr-4

#### How to include the module in a project?

````
require_once YOUR_BASE_PATH . '/vendor/autoload.php';

use Security\Services\UserService;
use Logistic\Services\TrackingService;
use Security\Models\User;
use Logistic\Models\Tracking;

$userService = new UserService();
$trackingService = new TrackingService();

$user = new User();
//Set values user

$tracking = new Tracking();
//Set values tracking

$user = $userService->create($user);
$tracking = $trackingService->create($tracking);
````
