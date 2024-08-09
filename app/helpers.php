<?php

use SimpleSoftwareIO\QrCode\Facades\QrCode;


    function generateQrCode($url, $subject, $authId)
    {
        $fullUrl = $url . '?subject=' . urlencode($subject) . '&auth_id=' . urlencode($authId);
        return QrCode::size(200)->generate($fullUrl);
    }
