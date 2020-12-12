<?php
include 'header.php';
$title      = null;
$content    = null;
$img        = null;
function setUpContent($place)
{
    switch ($place) {
        case "international":
            $GLOBALS['title']      = "International Packages";
            $GLOBALS['content'] = "Looking for an international holiday? You've come to the right place. We provide a vast range of tour packages all over the world. You can avail expert counsel advice to plan your trips.";
            $GLOBALS['img'] = "images/services/1.jpg";
        break;

        case "domestic":
            $GLOBALS['title']      = "Domestic tour package";
            $GLOBALS['content'] = "If you are planning for having some domestic holidays, we've got you covered. We provide the best tour packages to give you a soulful experience of vacationing. You can select from the vast range of available packages.";
            $GLOBALS['img'] = "images/services/1.jpg";
        break;

        case "holyland":
            $GLOBALS['title']      = "Holyland Packages";
            $GLOBALS['content'] = "Want to take your mind off from the worldly rush?  Get yourself out to have a visit to your favorite Holy Lands and Feed your soul with refreshments.";
            $GLOBALS['img'] = "images/services/1.jpg";
        break;

        case "bus":
            $GLOBALS['title']      = "Bus Ticket Booking";
            $GLOBALS['content'] = "We provide Bus ticket booking service at best fares across india.";
            $GLOBALS['img'] = "images/services/1.jpg";
        break;

        case "cab":
            $GLOBALS['title']      = "Cab Services";
            $GLOBALS['content'] = "We provide cab booking service for pick-ups and drop-off for anytime.";
            $GLOBALS['img'] = "images/services/1.jpg";
        break;

        case "cruise":
            $GLOBALS['title']      = "Cruice Trip";
            $GLOBALS['content'] = "We offer affordable and luxurious trips in the back waters with Cruise Ships.";
            $GLOBALS['img'] = "images/services/1.jpg";
        break;

        case "daily":
            $GLOBALS['title']      = "Daily Trips";
            $GLOBALS['content'] = "Each day, we have specialised trips based on the climate and other conditions to get the most out of it.";
            $GLOBALS['img'] = "images/services/1.jpg";
        break;

        case "pancard":
            $GLOBALS['title']      = "Pan Card";
            $GLOBALS['content'] = "We get can get your pan card without getting you through its complicatory application processes.";
            $GLOBALS['img'] = "images/services/1.jpg";
        break;
        
        default:
            header("Location: http://www.inspireholidays.in");
}
}
?>