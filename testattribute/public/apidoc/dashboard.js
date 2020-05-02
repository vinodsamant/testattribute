/**
 * @api {get}  /v1/dashboard Dashboard
 * @apiName Dashboard
 * @apiVersion 1.0.0
 * @apiGroup Dashboard
 * @apiPermission none
 * 
 * @apiDescription This api is used to app dashboard notification count.
 * 
 * @apiHeader {String} Authorization Bearer <access_token>
 * 
 * @apiSuccess {Object} data Data as Object.
 * @apiSuccess {String} message  Message.
 * 
 * @apiSuccessExample Success-Response:
 * HTTP/1.1 200 OK
 {
    "data": {
        "notification": 0,
        "start_games": 0,
        "my_requests": 0
    },
    "message": "The request has succeeded."
 }
 *
 * @apiErrorExample Sample Error-Response:
 * 
HTTP/1.1 405 Method Not Allowed
{
    "data": {},
    "message": "Method Not Allowed"
}
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