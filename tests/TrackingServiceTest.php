<?php

namespace Test;

use Logistic\Models\Tracking;
use Logistic\Services\TrackingService;
use PHPUnit\Framework\TestCase;

class TrackingServiceTest extends TestCase
{
    /**
     * @var TrackingService
     */
    private $trackingService;

    public function __construct()
    {
        $this->trackingService = new TrackingService();

        parent::__construct();
    }

    public function testCreate()
    {
        $tracking = new Tracking();
        $tracking->setNumber('TRACK-000000000001');
        $tracking->setDetail([
            [
                'date' => date('Y-m-d H:i:s'),
                'country' => 'PE',
                'state' => 'Lima',
                'city' => 'Cuzco',
                'address' => 'Av. central',
                'status' => 'pick-up'
            ],
        ]);

        $response = $this->trackingService->create($tracking);

        $this->assertNotEmpty($response->getNumber());
    }
}
