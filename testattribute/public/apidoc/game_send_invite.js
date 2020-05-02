/**
 * @api {post}  /v1/send_invite Invite
 * @apiName Invite
 * @apiVersion 1.0.0
 * @apiGroup Game
 * @apiPermission none
 * 
 * @apiDescription This api is used to user send invite to play game.
 * @apiHeader {String} Authorization Bearer <access_token>
 * @apiExample Example usage:
 {
    "receiver_email":"emma@yopmail.com",
    "location":"Central Park, New York, NY, USA",
    "latitude":"40.7829",
    "longitude":"73.9654",
    "datetime":"25-04-2020 05:00:00"
 }
 * @apiParam {String} receiver_email Receiver email is required in body.
 * @apiParam {String} location Location is required in body.
 * @apiParam {String} latitude Latitude email is required in body.
 * @apiParam {String} longitude Longitude email is required in body.
 * @apiParam {String} datetime Datetime is required in body.
 * 
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 * 
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": null,
    "message": "Invitation has been successfully sent."
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