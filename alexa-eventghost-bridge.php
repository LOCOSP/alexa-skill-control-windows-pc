<?php
function getResponseArray($value) {
    return array(
      'version' => '1.0',
      'response' => array(
        'outputSpeech' => array(
          'type' => 'PlainText',
          'text' => 'OK, ' . $value,
        ),
        'card' => array(
          'text' => 'OK, ' . $value,
          'title' => 'AMAZON',
           'type' => 'Standard',
        ),
        'shouldEndSession' => true
      ),
      'sessionAttributes' => array()
    );
}
// Get raw POST data
$post = file_get_contents( 'php://input' );
// Decode the JSON into a stdClass object
$post = json_decode( $post );
// Check the applicationId to make sure it's your Alexa Skill
if ( 'amzn1.ask.skill.xxxsecretxxx' == $post->session->application->applicationId ) {
    // 
    switch($post->request->intent->name) {
    // Here are Your custom Intents
      case 'OPENBROWSER':
        $response = getResponseArray('Windows PC will open Chrome browser for You');
        include 'http://Windows_PC_IP_with_EventGhost_Web_Server_Plugin:Port_when_different_than_80/index.html?OPENBROWSER';
        break;
      case 'CLOSEBROWSER':
        $response = getResponseArray('The browser is closed');
        include 'http://Windows_PC_IP_with_EventGhost_Web_Server_Plugin:Port_when_different_than_80/index.html?CLOSEBROWSER';
        break;
      default:
        $response = getResponseArray('I\'m sorry, but I dont know how to handle the command ' . $post->request->intent->name);
        break;
    }
    //
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Insert code to run if the applicationId does NOT match
    echo 'The applicationId does NOT match!';
}
