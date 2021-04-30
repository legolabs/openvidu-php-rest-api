# openvidu-php-rest-api
OpenVidu REST API client written in PHP

**Note**: PHP >= 7.2 required

## A simple PHP implementation to send OpenVidu REST API requests

OpenVidu [(https://openvidu.io)](https://openvidu.io/) is a powerful open source library for secure real-time video stream management and composition.
OpenVidu provides a full REST API, and this project aims to create a simple PHP implementation to call them.

An official complete OpenVidu REST API description can be found here: [https://docs.openvidu.io/en/latest/reference-docs/REST-API/](https://docs.openvidu.io/en/latest/reference-docs/REST-API/)

### Examples

This library is very simple to use. You can istantiate an OpenVidu object, a Request object and then send it through the OpenVidu->send_request method

``` php
$ov = new OpenVidu("https://demos.openvidu.io", "MY_SECRET");
$req = new GetOpenviduConfiguration();
$resp = $ov->send_request($req);

print_r($resp);
```

Inside the sample *example.php* script, you can find some examples on how to open, manage and close new sessions with tokens and much more.
