<?php 

/* PHP SDK v5.0.0 */
/* make the API call */
try {
    // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get(
      '/{post-id}/comments',
      '{access-token}'
    );
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }
  $graphNode = $response->getGraphNode();
  /* handle the result */

?>