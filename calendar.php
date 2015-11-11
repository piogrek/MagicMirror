<?php
include "vendor/autoload.php";
include "config.php";

$client = new Google_Client();
$credentials = $client->loadServiceAccountJson(__DIR__."/googlekeys.json", Google_Service_Calendar::CALENDAR_READONLY);

$client->setAssertionCredentials($credentials);
if ($client->getAuth()->isAccessTokenExpired()) {
    $client->getAuth()->refreshTokenWithAssertion();
}

$service = new Google_Service_Calendar($client);

// Print the next 10 events on the user's calendar.
$calendarId = CAL_ID;

$optParams = [
    'maxResults'   => 15,
    'orderBy'      => 'startTime',
    'singleEvents' => true,
    'timeMin'      => date('c'),
];
//$calendars = $service->calendarList->listCalendarList();
///** @type Google_Service_Calendar_Calendar $cal */
//foreach($calendars->getItems() as $cal) {
// var_dump($cal->getId());
//}
$results = $service->events->listEvents($calendarId, $optParams);
//var_dump($results->count());
$events = [];

/** @type Google_Service_Calendar_Event $event */
foreach ($results as $event) {
//var_dump($event);
//    var_dump($event->getSummary());
    $time = $event->getStart()->getDateTime()
        ? new DateTime($event->getStart()->getDateTime())
        : new DateTime($event->getStart()->getDate());

    $start = $event->getStart()->getDateTime() ? $time->format('g:ia | D jS') : $time->format('D jS');

    $events[] = [
        'summary'  => $event->getSummary(),
        'start'    => $start,
        'end'      => $event->getEnd()->getDateTime(),
        'location' => $event->getLocation(),
    ];
}
header('Content-Type: application/json');
echo json_encode($events);
