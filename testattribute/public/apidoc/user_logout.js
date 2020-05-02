/**
 * @api {post} /v1/logout Logout
 * @apiName Logout
 * @apiVersion 1.0.0
 * @apiGroup User
 * @apiPermission none
 *
 * @apiDescription This api is used to user logout.
 * @apiHeader {String} Authorization Bearer <access_token>
 *
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 *
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": null,
    "message": "Logged out successfully."
 }
 * @apiErrorExample Sample Error-Response:
 * 
HTTP/1.1 405 Method Not Allowed
{
    "data": {},
    "message": "Method Not Allowed"
}
HTTP/1.1 401 Unauthorized
{
    "message": "Authorization Token not found"
}
HTTP/1.1 401 Unauthorized 
{
    "message": "Token is Invalid"
}
HTTP/1.1 403 Forbidden 
{
    "message": "Token is Expired"
}
HTTP/1.1 422 Unprocessed Entity
{
    "data": {},
    "message": "The user not Found"
}
*/