<?
/**
 * Implements Tent Server API in compliance with Tent.io protocol.
 * @see http://tent.io/docs/app-server
 * @license MIT
 */
class TentServer {

  // an impl of iTentData
  private $_D;
  // an impl of iTentRequest
  private $_R;

  function __construct(/* iTentData */ $data, /* iTentRequest */ $request = null) {
    $this->_D = $data;
    $this->_R = $R;
  }

  /**
   * @return bool
   */
  function isAuthorized() {

  }

  /** 
   * @param string Scope as defined by
   * @return bool Should return false if TentServer::isAuthorized is false
   */
  function hasScope($scope) {

  }

  /**
   * @param iTentRequest (optiona) when null, references TestServer::$R
   * @return iTentResponse
   */
  function exec(/* iTentRequest */ $request = null) {
    if (is_null($request)) {
      $request = $this->_R;
    }
    if (is_null($request)) {
      return TentResponse::error("Invalid request: iTentRequest is missing.");
    }
    $function = strtolower($this->_R->getMethod()).ucwords($this->_R->getFunctionName());
    $callable = array($this, $function);
    return call_user_func_array($callable, $this->_R->getPathArgs());
  }

  /**
   * Apps can request the user's profile from the server.
   */
  function getProfile() {
    return $this->_D->getProfile();
  }

  /**
   * Apps can add or edit information in a user's profile including 
   * adding new profile info types. Users choose which apps have permission 
   * to make edits and additions to different sections of their profiles.
   */
  function putProfile($type = null) {

  }

  /**
   * Apps can tell a server to follow another entity.
   */
  function postFollowings() {

  }

  /**
   * Apps can also retrieve a list of the entities currently being followed.
   * Apps can request information on the relationship with a specific entity being followed.
   */
  function getFollowings($id = null) {

  }

  /**
   * Apps can request the server stop following a specific entity.
   */
  function deleteFollowings($id) {

  }

  /**
   * Apps can get a list of current followers.
   * Apps can request information on a specific follower.
   */
  function getFollowers($id = null) {

  }

  /**
   * Apps can end the user's relationship with a follower.
   */
  function deleteFollowers($id) {

  }

  /**
   * Apps can create posts by sending them to the server. The server will
   * then send notifications to any entities with permission to see the 
   * post and who either requested the post type in their following request
   * or who were mentioned in the post.
   * Apps can create a new post with an attachment and send both to the server. 
   * Files and binary data are usually transferred as attachments to posts.
   */
  function postPosts() {

  }

  /**
   * Apps can retrieve posts. If the request is not authenticated this will
   * return the user's own public posts. If the request is authenticated and
   * the app has been granted the necessary scopes, this will also return the
   * user's non-public posts, posts from entities the user follows, and posts
   * that mention the user.
   * Apps can retrieve a specific post.
   */
  function getPosts($id = null, $attachments = false, $name = null) {

  }

}