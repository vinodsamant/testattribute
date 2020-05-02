/**
 * @api {post}  /v1/update_invite Update Invite
 * @apiName Update Invite
 * @apiVersion 1.0.0
 * @apiGroup Game
 * @apiPermission none
 * 
 * @apiDescription This api is used to user accept, reject invite to play game.
 * @apiHeader {String} Authorization Bearer <access_token>
 * @apiExample Example usage:
 {
    "invite_id":1,
    "status":1
 }
 * @apiParam {Number} invite_id Invite Id is required in body.
 * @apiParam {Number} status Status(1=>accept,2=>reject) is required in body.
 * 
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 * 
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": null,
    "message": "Invite status updated successfully."
 }
 *
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
*/